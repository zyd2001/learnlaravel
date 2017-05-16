<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="/">Home</a>
      @if (Auth::check())
        <a href="/posts/create" class="nav-link ml-auto">Create</a>
        <a href="#" class="nav-link">{{ Auth::user()->name }}</a>
      @else
      <a href="/login" class="nav-link ml-auto">Login</a>
      <a href="/register" class="nav-link disabled">Register</a>
      @endif
    </nav>
  </div>
</div>