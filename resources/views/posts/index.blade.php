@extends('layouts.news')
@section('content')
    <div class="row mb-2">
        @foreach($posts as $post)
            <div class="col-md-12">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">{{$post->category->title}}</strong>
                        <h3 class="mb-0">{{$post->title}}</h3>
                        <div class="mb-1 text-muted">{{$post->created_at}}</div>
                        <p class="card-text mb-auto">{{ mb_strimwidth($post->body ,0 , 50, " ...Читать далее.")}}</p>
                        <button class="btn btn-primary float-left w-25 mb-3" onclick="addToFavorites({{$post->id}})">Add to favorites</button>
<!--                        <a href="#" class="stretched-link">Continue reading</a>-->
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                             preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                             aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
{{$posts->links()}}

@endsection

@push('scripts')
    <script>
        function addToFavorites(id) {
            let add = fetch('/api/favorites', {
                method: 'POST',
                headers: {
                    Authorization: "Basic {{ $authorization }}",
                    Accept: "application/json"
                },
                parameters: {
                    'post_id': id,
                    'access_token': "{{ $token }}"
                }
            })
        }
    </script>
@endpush

