<div class="col-sm-3 offset-sm-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
      @foreach ($archives as $archive)
        <li><a href="/?month={{ $archive->month }}&year={{ $archive->year }}">{{ Carbon\Carbon::parse($archive->year . '-' . $archive->month)->format('F') . ' ' . $archive->year }}</a></li>
      @endforeach
    </ol>
  </div>
  <div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="https://git.oschina.net/zyd2001/learnlaravel" target="_blank">GitOsChina</a></li>
    </ol>
  </div>
</div><!-- /.blog-sidebar -->