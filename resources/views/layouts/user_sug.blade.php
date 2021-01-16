<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Гости</title>
    <style>
        body {
            background: url("../images/fon.jpg") no-repeat center center fixed;
            background-size: cover;
        }

        .card {
            opacity: 80%;
            background: #8abee8;
        }

        .card:hover {
            opacity: 100%;
        }
    </style>
</head>
<body>

<div style="height: 120px;" class="container d-flex" data-aos="fade-down">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center">
            <img src="https://img.icons8.com/flat_round/64/000000/back--v1.png" width="40"/>
            <a style="text-decoration: none;color: white" href="{{route('post.index')}}"><h6>Венуться на Главнуя
                    страницу</h6></a>
        </div>

        <div class="col-md-2 d-flex align-items-center">
            <img src="https://img.icons8.com/fluent/96/000000/home.png" width="40"/>
            <a style="text-decoration: none;color: yellow" href="{{route('user.suggestions')}}"><h6>В начало</h6></a>
        </div>

        <div class="col-md-2 d-flex align-items-center">
            <img src="https://img.icons8.com/plasticine/100/000000/user-male.png" width="40"/>
            <a style="text-decoration: none;color: #ea0842" href="{{route('user.suggestions.news.users')}}"><h6>Новости от пользователей</h6></a>
        </div>

        <div class="col-md-2 d-flex align-items-center">
            <img src="https://img.icons8.com/fluent/96/000000/new-message.png" width="40"/>
            <a style="text-decoration: none;color: #ea0842" href="{{route('user.suggestions.message')}}"><h6>Предложить Новость</h6></a>
        </div>

        <div class="col-md-2 d-flex align-items-center">
            <img src="https://img.icons8.com/color/96/000000/edit-user-male--v1.png" width="40"/>
            <a style="text-decoration: none;color: #d59412" href="{{route('post.index')}}"><h6>Сообщения
                    отправленные модератору</h6></a>
        </div>


        <div class="col-md-2 d-flex align-items-center">
            <img src="https://img.icons8.com/color/96/000000/thermometer.png" width="40"/>
            <a style="text-decoration: none;color: white" href="{{route('user.suggestions.news.weather')}}"><h6>Узнать погоду вашего
                    города</h6></a>
        </div>
    </div>
</div>

@yield('content')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('../js/aos.js')}}"></script>
</body>
</html>
