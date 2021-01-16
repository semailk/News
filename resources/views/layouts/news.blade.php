<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>News</title>
    <style>
        body {
            background: url("../../images/3.jpg") no-repeat center center;
            background-size: cover;
        }

        a, h1, h2, h3, h4, h5, h6, p {
            color: white;
        }

        #vk {
            transition: 3s;
        }

        #vk:hover {
            background: #4242cb;
            border-radius: 50px;
        }

        #inst {
            transition: 3s;
        }

        #inst:hover {
            background: #fddace;
            border-radius: 50px;
        }

        #git {
            transition: 3s;
        }

        #git:hover {
            background: white;
            border-radius: 50px;
        }
    </style>
</head>
<body>
<script
    src="https://partner.googleadservices.com/gampad/cookie.js?domain=bootstrap-4.ru&amp;callback=_gfp_s_&amp;client=ca-pub-8588635311388465&amp;cookie=ID%3D45d97e46d4ed5fd7-228a8d8184b9002a%3AT%3D1610203730%3ART%3D1610203730%3AS%3DALNI_Mag7rTYDB8AykkvkQHLG75Wnft7Mw"></script>
<script src="https://pagead2.googlesyndication.com/pagead/js/r20201203/r20190131/show_ads_impl_fy2019.js"
        id="google_shimpl"></script>
<script async="" src="https://mc.yandex.ru/metrika/tag.js"></script>
<script async="" src="https://www.google-analytics.com/analytics.js"></script>
<script defer="">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-4481610-59', 'auto');
    ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(39705265, "init", {clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true}); </script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/39705265" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript> <!-- /Yandex.Metrika counter -->

<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-8588635311388465",
        enable_page_level_ads: true
    });
</script>


<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div style="border-top: 3px solid white; text-align: center;" class="col-4 pt-1">
                <a class="text-muted" href="#"><h2 style="font-family: Saab"><span
                            style="color: blue;">Н</span>овост<span style="color: red">И</span> сего<span
                            style="color: green">Д</span>ня</h2></a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-white" href="/news">Главная страница</a>
                <a href="{{route('user.suggestions')}}"><button class="btn btn-sm btn-outline-primary" type="button">Раздель для пользователей</button></a>
                <a href="https://vk.com/id15341621"><img src="https://img.icons8.com/nolan/64/vk-circled.png" id="vk"
                                                         width="48"/></a>
                <a href="https://www.instagram.com/semailk/?hl=ru"><img id="inst"
                                                                        src="https://img.icons8.com/doodle/48/000000/instagram-new.png"/></a>
                <a href="https://github.com/semailk?tab=repositories"><img id="git"
                                                                           src="https://img.icons8.com/dusk/64/000000/github.png"
                                                                           width="48"/></a>
            </div>
            <div class="col-4 d-flex justify-content-center">
                @if(!\Illuminate\Support\Facades\Auth::check())
                    <a class="btn btn-sm btn-outline-danger" href="{{route('login')}}">Войти</a>
                    <a class="btn btn-sm btn-outline-primary" href="{{route('register')}}">Регистрация</a>
                @else
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        @if(\Illuminate\Support\Facades\Auth::user()->getAuthIdentifier() == 1)
                            <a href="{{route('admin.news.index')}}">
                                <button type="button" class="btn btn-outline-warning">Админ панель</button>
                            </a>
                        @endif
                        <div class="d-flex w-75 flex-wrap justify-content-center">
                        <button class="btn btn-sm btn-outline-danger" type="submit">Выйти</button>
                        </div>
                    </form>
                    <h3 style="font-family: 'Abyssinica SIL';">{{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
                @endif
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-around">
            @foreach($categories as $category)
                <a class="p-2 text-whites"
                   href="{{route('categories',[$category->id,$category->title])}}">{{$category->title}}</a>
            @endforeach
        </nav>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div style="width: 85%" class="container mb-3">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('../images/main.jpeg')}}" class="d-block w-100" height="400px" alt="...">
                </div>
                @foreach($slide as $img)
                    <div class="carousel-item">
                        <img src="{{ asset('storage/' . $img->img)}}" class="d-block w-100" height="400px" alt="...">
                    </div>
                @endforeach
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    @yield('content')
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
@stack('scripts')
</body>
</html>

