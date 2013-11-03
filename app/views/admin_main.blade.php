@extends('template')

@section('title')
{{ $page_name}}
@stop

@section('content')
@foreach ($news_posts as $news_post)
    <li class="list-group-item"><a href="{{ URL::to('/blogs/' .$news_post->post_title) }} " 
    		title="{{$news_post->post_title}}">
    {{ $news_post->post_title}} {{ $news_post->created_at }}
    </a></li>
@endforeach
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

@section('panel')


@stop

