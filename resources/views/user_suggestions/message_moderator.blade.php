@extends('layouts.user_sug')
@section('content')
    <div style="margin-top: 135px" class="container">
        <div class="card">
            <form data-aos="fade-down" style="font-family:'serif'; text-align: center;"
                  action="{{route('user.suggestions.post.store')}}" method="post"
                  enctype="multipart/form-data">
                {{csrf_field()}}
                <label style="color: darkred" for="title"><h2>Тема</h2></label>
                <input id="title" name="title" type="text" class="form-control">
                <label style="color: darkred" id="body"><h2>Описание</h2></label>
                <input type="text" name="body" class="form-control">
                <label style="color: darkred" id="body"><h2>Изображение</h2></label>
                <input type="file" name="img" class="form-control">
                <label>Категория</label>
                <select name="category_id" class="form-select" aria-label="Default select example">
                    <option selected>Выберите категорию.</option>
                    @foreach($categories as $value)
                        <option value="{{$value->id}}">{{$value->title}}</option>
                    @endforeach
                </select>
                <button class="btn btn-outline-primary mt-3" type="submit">Отправить на проверку</button>
            </form>
        </div>
    </div>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success d-flex">
                <img src="https://img.icons8.com/cute-clipart/64/000000/ok.png" width="40" height="40"><h5
                    class="align-middle">{{session('success')}}</h5>
            </div>
        @endif
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('../js/aos.js')}}"></script>
@endsection
