@extends ('layouts.master')

@section ('content')
<form method="POST" action="/posts">
{{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea type="text" class="form-control" id="body" placeholder="Body" name="body" required></textarea>
  </div>
  <div class="form-group">
    <input type="submit" name="submit" class="form-control btn-primary" value="Publish">
  </div>
</form>
@endsection