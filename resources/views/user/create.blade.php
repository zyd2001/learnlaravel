@extends ('layouts.master')

@section('content')
    <div class="container">
        <h3 class="username">Username: {{ $user->name }}</h3>
    </div>
@endsection