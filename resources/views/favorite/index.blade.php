<div class="">
    @foreach($favorites as $favorite)
        <div class="favorite">
            <h2>{{ $favorite->post->title }}</h2>
            <p>{{ $favorite->post->body }}</p>
        </div>
    @endforeach
</div>
