@extends('layouts.user_sug')
@section('content')
    <style>
        body {
            background: #6c5b30;
        }
    </style>
    <div class="container">
        <div class="card-header">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form method="post" action="{{route('user.suggestions.news.weatherResponse')}}">
                        @csrf
                        <input type="text" name="city" placeholder="Введите название города на английским.">
                        <button type="submit" class="btn btn-outline-primary">Найти</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    @if(!empty($data->name) && !empty($currentTime))
        <div class="container">
            <h2 class="text-white">Погода в городе <?php echo $data->name; ?></h2>
            <div class="row">
                <p class="text-warning"><?php echo date("l g:i a", $currentTime); ?></p>
                <p class="text-white"><?php echo date("jS F, Y",$currentTime); ?></p>
                <p class="text-white"><?php echo ucwords($data->weather[0]->description); ?></p>
            </div>
            <div class="weather__forecast">
                <span class="text-white"><?php echo $data->main->temp_min; ?>°C</span>
                <span class="text-white"><?php echo $data->main->temp_max; ?>°C</span>
            </div>
            <p class="text-white">Влажность: <?php echo $data->main->humidity; ?> %</p>
            <p class="text-white">Ветер: <?php echo $data->wind->speed; ?> км/ч</p>
        </div>
        <script src="{{asset('../js/weather.js')}}"></script>
    @else
    <h1 class="text-white">Такой город не найден</h1>
    @endif

@endsection




