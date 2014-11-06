<br/>
<h2>{{ $topic->reply_count }} 个讨论</h2>
<section class="reply-list">
    @foreach($replies as $reply)
    <div class="panel panel-success">
        <div class="panel-body">
        {{ $reply->body }}
        </div>
        <div class="panel-footer clearfix">
            <span class="right">Reply by {{ $reply->user->name }}</span> 
            @if(Auth::id() == $reply->user_id)
            <a href=" {{ route('reply.edit', $reply->id) }}">edit</a>
            <a href="{{ route('reply.destroy',$reply->id) }}" data-toggle="tooltip" data-delete="{{ csrf_token() }}" title="delete">| delete</a>
            @endif
        </div>
    </div>
    @endforeach
</section>
