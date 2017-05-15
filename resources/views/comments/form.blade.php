<form method="POST" action="/posts/{{ $post->id }}/comment" class="form-group">
        {{ csrf_field() }}
        <div class="form-group">
            <textarea type="text" class="form-control" id="body" placeholder="Your Comment" name="body" required></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Publish">
        </div>
</form>