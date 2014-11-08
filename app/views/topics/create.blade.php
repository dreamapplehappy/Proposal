@extends('layouts.default')

@section('title')
@parent
@stop

@section('styles')
<!-- <link rel="stylesheet" href="{{ asset('css/input.css')}}"> -->
@stop

@section('body')

@if(!isset($topic)){{ Form::open(array('route' =>'topic.store', 'role' => 'form', 'class' => 'form-horizontal')) }}
@else {{ Form::open(array('route'=>['topic.update', $topic->id],'method' => 'patch', 'role' => 'form', 'class' => 'from-horizontal')) }}
@endif

	{{ Form::hidden('user_id',Auth::id()) }}
	<div class="form-group my-title">
		{{ Form::text('title', isset($topic)?$topic->title:null, array('class' => 'form-control', 'placeholder' => '提议标题')) }}
	</div>
	<div class="form-group my-deadline">
		{{ Form::text('title', isset($topic)?$topic->title:null, array('class' => 'form-control', 'placeholder' => '截止日期(?)')) }}
	</div>
	<div class="form-group my-content" id="editor">
		<textarea v-model="input" name="body" class="form-control" rows="15" placeholder ="您想说点什么呢。。。。。。">{{{ isset($topic)?$topic->body:null }}}</textarea>
		<div v-html="input | marked"></div>
	</div>
	<div class="form-group">
		{{ Form::submit('提交', array('class' => 'btn btn-primary post-btn', 'id' => 'article-create')) }}
	</div>
	{{ Form::close() }}

@stop

@section('scripts')
@stop
