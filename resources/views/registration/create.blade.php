@extends ('layouts.master')

@section ('content')
    <form action="/user/register" method="POST">
        {{ csrf_field() }}
        <h1>Register</h1>
        <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="E-mail">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-primary" id="submit" name="submit" value="Sign up">
        </div>
        @include ('layouts.error')
    </form>
@endsection