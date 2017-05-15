<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
      <a class="nav-link active" href="/">Home</a>
      @if (Auth::check())
      <a href="#" class="nav-link ml-auto">{{ Auth::user()->name }}</a>
      @endif
    </nav>
  </div>
</div>