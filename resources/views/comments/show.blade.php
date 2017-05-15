<ul class="list-group">
        @foreach ($post->comments as $comment)
        <li class="list-group-item">
            <strong>{{ $comment->created_at->diffForHumans() }} by {{ $comment->user->name }}:</strong>&nbsp{{ $comment->body }}
        </li>
        @endforeach
</ul>