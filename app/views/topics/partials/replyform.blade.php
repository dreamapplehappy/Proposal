<section class="reply-form">
    <h2 class="hello"><i class="icon-comment"></i>  您可以在此发表评论</h2>
    {{ Form::open(['route'=>'reply.store','role' => 'form']) }}
    {{ Form::hidden('topic_id',$topic->id) }}
    {{ Form::hidden('user_id', Auth::check()?(Auth::id()):null) }}
    <div class="form-group">
        {{ Form::textarea('body',null,['class'=>'form-control']) }}
    </div>
    {{ Form::submit('评论', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
</section>
