@extends ('layouts.master')

@section ('content')
        <form action="/login" method="POST">
        {{ csrf_field() }}
        <h1>Login</h1>
        <div class="form-group">
            <label for="E-mail">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-primary" id="submit" name="submit" value="Log in">
        </div>
        @include ('layouts.error')
    </form>
@endsection