<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a href="/" id="home" class="nav-link">Home</a>
      @if (Auth::check())
        <a href="/posts/create" id="create" class="nav-link ml-auto">Create</a>
        <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
        <a href="/logout" class="nav-link">Logout</a>
      @else
      <a href="/login" id="login" class="nav-link ml-auto">Login</a>
      <a href="/register" id="register" class="nav-link disabled">Register</a>
      @endif
    </nav>
  </div>
</div>