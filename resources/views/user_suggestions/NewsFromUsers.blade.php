@extends('layouts.user_sug')
@section('content')
    <style>
        body {
            background: #8e5a2d;
        }
    </style>
    <div style="margin-top: 200px" class="container">
        <table class="table table-inverse text-white text-md-center">
            <thead>
            <tr>
                <th>#</th>
                <th>Тема</th>
                <th>Изображение</th>
                <th>Добавлено</th>
                <th>Автор</th>
            </tr>
            </thead>
            <tbody>
            @foreach($news as $new)
                @if($new->cheched_at == 1)
                <tr>
                    <th scope="row">{{$new->id}}</th>
                    <td>{{$new->title}}</td>
                    <td><img src="{{asset('storage/'. $new->img)}}" width="200" height="200"></td>
                    <td>{{$new->created_at}}</td>
                    <td>{{$new->user->name}}</td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
