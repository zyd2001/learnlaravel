<ul class="list-group">
        @foreach ($post->comments as $comment)
        <li class="list-group-item">
            {{ $comment->created_at->diffForHumans() }} by&nbsp<strong>{{ $comment->user->name }}:</strong>&nbsp{{ $comment->body }}
        </li>
        @endforeach
</ul>