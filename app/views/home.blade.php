@extends('template')

@section('nav')


@stop

@section('title')
hello
@stop

@section('content')

@if(Auth::check())
<h1>Welcome "{{ Auth::user()->name }}"</h1>
@else

@endif
@foreach ($box_office as $box_office)
    标题<p>{{ $box_office->post_title}} {{ $box_office->created_at }}</p>
    正文<p>{{ $box_office->post_content}}</p>
    <a href="<?= url('/blogs/{{ $box_office->post_title}}') ?>">more</a>
@endforeach
@stop

@section('panel')
	    {{ Form::open(array('method' => 'post')) }}

	    {{ Form::label('username', 'Username') }}
	    {{ Form::text('username'); }}
	    </p>
	    <p>
	    {{ Form::label('password', 'Password') }}
	    {{ Form::password('password') }}
	    </p>
	 
	    <p>{{ Form::submit('Login',['class' => 'btn btn-large btn-primary openbutton']) }}</p>

	    @if (Session::has('login_errors'))
	        <span class="error">Username or password incorrect.</span>
	    @endif    
	    {{ Form::close() }}

@stop

