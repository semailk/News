<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Document</title>

</head>
<body>
<script src="{{ asset('js/app.js') }}" defer></script>
<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Админ Панель</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="{{route('admin.news.index')}}">Добавления поста</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.categories')}}">Добавления категории</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle show" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="true">Работа с постами</a>
                    <ul class="dropdown-menu show" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="{{route('post.index')}}">Страница гостей</a></li>
                        <li><a class="dropdown-item" href="{{route('post.slide.edit')}}">Настройка слайдов</a></li>
{{--                        <li><a class="dropdown-item" href="{{route('post.index')}}">Главное меню с постами</a></li>--}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
