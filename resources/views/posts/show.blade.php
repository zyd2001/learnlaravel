@extends ('layouts.master')

@section ('content')
    <h1 class="blog-post-title">{{ $post->title }}</h1>
    <div class="blog-post-meta">{{ $post->body }}</div>
    @if (auth()->user()->id == $post->user->id)
    <hr>
    <form method="POST" action="/posts/{{ $post->id }}/delete">
        {{ csrf_field() }}
       <input type="submit" class="btn btn-primary blog-btn-link" value="Delete">
    </form>
    {{-- <a href="/posts/{{ $post->id }}/delete" class="btn btn-primary blog-btn-link">Delete</a> --}}
    @endif
    @if (count($post->comments))
    <hr>
    @endif
    @include ('comments.show')
    <hr>
    @include ('comments.form')
@endsection