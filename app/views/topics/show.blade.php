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
    <!-- <div>进度条</div> -->
      <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">{{ $topic->vote_count*100/25 }}%
            <!-- <span class="sr-only">60% Complete</span> $topic->vote_count*100/25-->
          </div>
      </div>
  <div class="panel-body">
      {{ $topic->body }}
  </div>
  <div class="panel-footer clearfix">
      @if(Auth::id() == $topic->user_id)
      <span><a href="{{route('topic.edit',$topic->id)}}">编辑</a>
          <a href="{{ route('topic.destroy',$topic->id) }}" data-toggle="tooltip" data-delete="{{ csrf_token() }}" title="Delete"> | 删除</a>
      </span>
      @endif
      <span class="right">{{ $topic->user->name }} 发表的提议</span>
  </div>
</div>
</div>
</section>
 <div class="show-chart">
              <div class="explain">
                     <div class="support">
                       <div></div><i class="show icon-thumbs-up"></i>
                     </div>
                     <div class="show-space"></div>
                     <div class="oppose">
                       <div></div><i class="show icon-thumbs-down"></i>
                     </div>
             </div>
   <canvas id="show-chart" width="200px" height="200px" style="display: block; background-color: black;"></canvas>
 </div>
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
<script src="{{asset('js/count.percent.js')}}"></script>
<script src="{{ asset('js/show.chart.js') }}"></script>
@stop
