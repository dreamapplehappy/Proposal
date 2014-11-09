<br/>
<h2 class="hello"><i class="icon-comments-alt"></i>   {{ $topic->reply_count }} 个讨论</h2>
<section class="reply-list">
    @foreach($replies as $reply)
    <div class="panel panel-success">
        <div class="panel-body">
        {{ $reply->body }}
        </div>
        <div class="panel-footer clearfix">
            <span class="right">{{ $reply->user->name }}</span> 
            @if(Auth::id() == $reply->user_id)
            <a href=" {{ route('reply.edit', $reply->id) }}">编辑</a>
            <a href="{{ route('reply.destroy',$reply->id) }}" data-toggle="tooltip" data-delete="{{ csrf_token() }}" title="delete">| 删除</a>
            @endif
        </div>
    </div>
    @endforeach
</section>
