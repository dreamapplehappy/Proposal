@extends('layouts.default')

@section('title')
@parent
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('css/topic.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
@stop

@section('body')
<section class="row topic">
<div class="col-md-1 vote-part">
 @include('topics.partials.vote')
</div>
<div class="col-md-8 col-md-offset-1">
<div class="panel panel-info">
    <div class="panel-heading">
        {{ $topic->title }} 
    </div>
  <div class="panel-body">
      {{ $topic->body }}
  </div>
  <div class="panel-footer clearfix">
      @if(Auth::id() == $topic->user_id)
      <span><a href="{{route('topic.edit',$topic->id)}}">edit </a>
          <a href="{{ route('topic.destroy',$topic->id) }}" data-toggle="tooltip" data-delete="{{ csrf_token() }}" title="Delete"> | delete</a>
      </span>
      @endif
      <span class="right">Open By {{ $topic->user->name }}</span>
  </div>
</div>
</div>
</section>
<div class="row reply">
<div class="col-md-8 col-md-offset-2">
@include('topics.partials.replylist')
@include('topics.partials.replyform')
</div>
</div>
@stop

@section('scripts')
<script src="{{ asset('js/jquery.goup.min.js') }}"></script>
<script src="{{asset('js/topicPage.js')}}"></script>
@stop
