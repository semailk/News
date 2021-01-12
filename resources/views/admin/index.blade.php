@extends('layouts.admin')
@section('content')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
               aria-selected="true">Добавить данные</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
               aria-controls="contact"
               aria-selected="false">Добавить текст</a>
        </li>
    </ul>
    <div class="container">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="card-header">
                    <form action="{{route('admin.news.post.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <label for="images"><h3>Выберите картинку</h3></label>
                        <input type="file" id="images" name="img" class="form-control">

                        <label for="title"><h3>Тема</h3></label>
                        <input type="text" name="title" id="title" placeholder="Введите текст" class="form-control">
                        <label for="categories"><h3>Категория</h3></label>
                        <select name="category_id" class="form-select" aria-label="Default select example">
                            <option selected>Выберите категорию</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>

                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1"><h3>Текст Новости</h3></label>
                    <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                </div>
            </div>
        </div>

    <div class="container d-flex justify-content-center">
        <button type="submit" class="btn btn-outline-primary mt-4 col-md-2">Отправить</button>
    </div>
    </div>
    </form>

    @if(session('success'))
    <div class="alert-success">
        {{session('success')}}
    </div>
    @endif
@endsection
