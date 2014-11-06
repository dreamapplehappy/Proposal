<div id="vote" data-method="post" data-user="{{ Auth::id() }}" data-topic="{{ $topic->id }}" data-vote="{{ isset($vote)?$vote->voted:false }}">
    @if( isset($vote)&& $vote->voted)
    <i class="fa fa-thumbs-up fa-2x vote-icon"></i>
    @else
    <i class="fa fa-thumbs-o-up fa-2x vote-icon"></i>
    @endif
    <span id="vote-count"> {{ $topic->vote_count }}</span>
</div>
