@extends('layouts.user_sug')
@section('content')
    <style>
        body {
            background: #5a6268;
        }
    </style>

    <table class="table text-md-center">
        <thead>
        <tr>
            <th>#</th>
            <th>Картинка</th>
            <th>Тема</th>
            <th>Текст</th>
            <th>Автор</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
        @foreach($user as $value)
            <tr class="table-danger">
                <td class="align-middle">{{$i}}</td><?php $i++ ?>
                <td class="align-middle"><img src="{{asset('storage/'.$value->img)}}" width="200" height="150"></td>
                <td class="align-middle">{{$value->title}}</td>
                <td class="align-middle">{{mb_strimwidth("$value->body", 0, 150, "...")}}</td>
                <td class="align-middle">{{$value->user->name}}</td>
                <td class="align-middle">
                    <a href="{{route('admin.addPostDelete', $value->id)}}"><img src="https://img.icons8.com/flat_round/50/000000/delete-sign.png" width="50"/></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
