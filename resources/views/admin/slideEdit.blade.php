@extends('layouts.admin')
@section('content')
    <style>
        body {
            background: #80a7ef;
        }
        tr, td, th {
            text-align: center;
            vertical-align: middle;
        }
    </style>
    @if(!empty($images))
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" style="height: 500px" data-ride="carousel">
                <div style="width: 85%; height: 500px" class="container mt-3">
                    <div class="carousel-inner ">
                        <div class="carousel-item active ">
                            <img src="{{asset('../images/main.jpeg')}}" class="d-block w-100 ml-5" height="400px"
                                 alt="...">
                        </div>
                        @foreach($images as $img)
                            <div class="carousel-item">
                                <img src="{{asset('storage/' . $img->img)}}" class="d-block w-100" height="400px"
                                     alt="...">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next " href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
        </div>
    @endif

    <div class="container">
        <div class="card">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Картанка</th>
                    <th scope="col">Путь</th>
                    <th scope="col">Действие</th>
                </tr>
                </thead>
                <tbody>
                @foreach($images as $img)
                    <tr>
                        <th scope="row">{{$img->id}}</th>
                        <td><img src="{{asset('storage/' . $img->img)}}" width="100px" height="100px"></td>
                        <td><h3>{{$img->img}}</h3></td>
                        <td><a href="{{route('admin.slide.delete', $img->id)}}"><img src="{{asset('../../images/icons8-delete-64.png')}}"></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="container pb-5">
        <div class="card">
            <form action="{{route('post.update.slayd')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input name="img" type="file" class="form-control">
                <button type="submit" class="btn btn-outline-primary mt-2">Загрузить</button>
            </form>
        </div>
    </div>
@endsection


