@extends ('layouts.master')

@section ('content')
    <h1>{{ $post->title }}</h1>
    {{ $post->body }}
    @if (count($post->comments))
    <hr>
    @endif
    @include ('comments.show')
    <hr>
    @include ('comments.form')
@endsection