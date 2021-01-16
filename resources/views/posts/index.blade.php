@extends('layouts.news')
@section('content')

    <div class="row mb-2">
        @foreach($posts as $post)
            <div class="col-md-12 ">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div style="opacity: 80%" class="col p-4 d-flex flex-column position-static bg-secondary">
                        <strong class="d-inline-block mb-2 text-primary">{{$post->category->title}}</strong>
                        <h3 class="mb-0">{{$post->title}}</h3>
                        <div class="mb-1 text-muted">{{$post->created_at}}</div>
                        <p class="card-text mb-auto">{{ mb_strimwidth($post->body ,0 , 50, " ...Читать далее.")}}</p>
                        <a style="font-size: 20px" href="#" class="stretched-link">Подробнее</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img width="500" height="300" src="{{asset('storage/' . $post->img)}}">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{$posts->links()}}
@endsection

