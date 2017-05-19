<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a href="/" id="home" class="nav-link">Home</a>
      @if (Auth::check())
        <a href="/posts/create" id="create" class="nav-link ml-auto">Create</a>
        <a href="javascript:post('/user/{{ auth()->user()->id }}')" class="nav-link">{{ Auth::user()->name }}</a>
        <a href="/user/logout" class="nav-link">Logout</a>
      @else
      <a href="/user/login" id="login" class="nav-link ml-auto">Login</a>
      <a href="/user/register" id="register" class="nav-link disabled">Register</a>
      @endif
    </nav>
  </div>
</div>