@extends('layouts.default')

@section('title')
@parent
|sign up
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@stop

@section('body')
<div class="row text-center pad-top ">
    <div class="outer">
            <div class="inner"></div>
        </div>
    <header class="col-md-12">
        <h2>欢迎您注册</h2>
    </header>
</div>
<div class="row  pad-top">
<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
    <div class="">
    <strong>请仔细填写下面表单</strong>  
    </div>

    <!-- sign up foom start -->
    <section>
    {{ Form::open(array('class' => '', 'role' => 'form')) }}
    <br />
    <div class="form-group input-group {{ $errors->has('name') ? 'has-error' : '' }}">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        {{ Form::text('name','',array('class' => 'form-control', 'placeholder' => '用户名')) }}
    </div>
    <div class="form-group input-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        {{ Form::email('email','',array('class' => 'form-control', 'placeholder' => '邮箱')) }}
    </div>
    <div class="form-group input-group {{ $errors->has('password') ? 'has-error' : '' }}">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        {{ Form::password('password',array('class' => 'form-control','placeholder' => '密码')) }}
    </div>
    <div class="form-group input-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => '确认密码')) }}
    </div>
    <div class="form-group">
        <div id="messages">
            @if($errors->has())
            @foreach($errors->all() as $error)
                <small class="error">{{ $error }}</small>
            @endforeach
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::submit('注册', array('class' => 'btn btn-success')) }}
    </div>
    {{ Form::close()  }}
    <hr />
            您已经注册过了 ?  <a href="{{ route('login') }}" >点击我登录</a>
    </section>
    <!-- form end -->

</div>
</div>
@stop

@section('scripts')
<script src="{{ asset('js/register.js') }}"></script>
@stop
