@extends('template')

@section('headnav')
@foreach($navbars as $navbar)
	<li><a href="{{URL::to('/page/'.$navbar->nav_en)}}" title='{{$navbar->nav_name}}'>{{$navbar->nav_name}}</a></li>
@endforeach
@stop

@section('title')
PlanD CMS
@stop

@section('Columns')
@foreach($col_set as $cols)
		<div class="col-lg-5">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">{{ $cols->columns_name}}</h3>
					</div>
					<div class="list-group">
			 			@yield('content')	
			 		</div>
	 		</div>
 	    </div>
@endforeach
@stop

@section('content')
@foreach ($news_posts as $news_post)
    <li class="list-group-item"><a href="{{ URL::to('/blogs/' .$news_post->post_title) }} " 
    		title="{{$news_post->post_title}}">
    {{ $news_post->post_title}} {{ $news_post->created_at }}
    </a></li>
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

