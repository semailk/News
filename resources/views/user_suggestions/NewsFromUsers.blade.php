@extends('layouts.user_sug')
@section('content')
    <style>
        body {
            background: #5a6268;
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
                @if($new->checked_at == 1)
                <tr>
                    <th class="align-middle" scope="row">{{$new->id}}</th>
                    <td class="align-middle">{{$new->title}}</td>
                    <td class="align-middle"><img src="{{asset('storage/'. $new->img)}}" width="200" height="200"></td>
                    <td class="align-middle">{{$new->created_at}}</td>
                    <td class="align-middle">{{$new->user->name}}</td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
