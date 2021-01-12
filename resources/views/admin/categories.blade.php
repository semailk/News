@extends('layouts.admin')
@section('content')
<style>
    .elastic li.hide{
        display: none;
    }

</style>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home"
               aria-selected="true">Все категории</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile"
               aria-selected="false">Добавлении категории</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                @if(session('success'))
                    <div class="alert-success">
                        <h3>{{session('success')}}</h3>
                    </div>
                @endif
                @foreach($categories as $value)
                    <div class="card mt-1">
                        <h2>{{$value->title}}</h2>
                        <div class="w-25">
                            <a href="{{route('admin.category.edit', $value->id)}}"><button type="button" class="btn btn-outline-primary">Редактировать</button></a>
                            <a href="{{route('admin.category.destroy', $value->id)}}"><button type="button" class="btn btn-outline-danger">Удалить</button></a>
                        </div>
                    </div>
                    <hr>
                    <hr>
                @endforeach
                    {{$categories->links()}}
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container">
                <div class="card-header">
                    <form method="post" action="{{route('admin.category.store')}}">
                        @csrf
                        <label><h2>Названия категории</h2></label>
                        <input type="text" id="elastic" name="title" class="form-control">
                        <button type="submit" class="btn btn-outline-primary mt-2">Сохранить</button>
                        <ul class="elastic">
                            @foreach($title as $value)
                                <li>{{$value->title}}</li>
                            @endforeach
                        </ul>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="{{asset('../../js/live_search.js')}}"></script>
@endsection
