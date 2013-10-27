@extends('template')

@section('nav')


@stop

@section('title')
hello
@stop

@section('content')
@foreach ($box_office as $box_office)
    <li>{{ $box_office->post_title}} {{ $box_office->created_at }}
    <a href="{{ URL::to('/blogs/' .$box_office->post_title) }}">more</a></li>
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

