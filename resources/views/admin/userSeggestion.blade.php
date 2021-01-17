@extends('layouts.admin')
@section('content')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                @if(count($notRead) == 0)
                    <h4 class="text-success">Не прочитанные</h4>
                @else
                    <h4 class="text-danger">Не прочитанные {{count($notRead)}}</h4>
                @endif
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Прочитанные</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

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
                @foreach($notRead as $value)
                    <tr class="table-danger">
                        <td class="align-middle">{{$value->id}}</td>
                        <td class="align-middle"><img src="{{asset('storage/'.$value->img)}}" width="200" height="150"></td>
                        <td class="align-middle">{{$value->title}}</td>
                        <td class="align-middle">{{mb_strimwidth("$value->body", 0, 150, "...")}}</td>
                        <td class="align-middle">{{$value->user->name}}</td>
                        <td>
                            <a href="{{route('admin.addPostDelete', $value->id)}}"><img src="https://img.icons8.com/flat_round/50/000000/delete-sign.png" width="50"/></a>
                            <a href="{{route('admin.addUserPost', $value->id)}}"><img src="https://img.icons8.com/fluent/48/000000/ok.png" width="50"/></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                @foreach($read as $value)
                    <tr class="table-primary">
                        <td class="align-middle">{{$value->id}}</td>
                        <td class="align-middle"><img src="{{asset('storage/'.$value->img)}}" width="200" height="150"></td>
                        <td class="align-middle">{{$value->title}}</td>
                        <td class="align-middle">{{mb_strimwidth("$value->body", 0, 150, "...")}}</td>
                        <td class="align-middle">{{$value->user->name}}</td>
                        <td class="align-middle"><a href="{{route('admin.addPostDelete', $value->id)}}"><img src="https://img.icons8.com/flat_round/50/000000/delete-sign.png" width="50"/></a> </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


