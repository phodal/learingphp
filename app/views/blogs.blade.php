@extends('layout')

@section('nav')


@stop

@section('title')
Blogs
@stop

@section('panel')
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Panel title</h3>
	</div>
	<div class="panel-body">
		<ul class="list-group">
		@foreach($navbars as $navbar)
		<li class="list-group-item"><a href="">{{$navbar->nav_name}}</a></li>
		@endforeach
		<ul>
	</div>
</div>
@stop
@section('content')
@foreach ($posts as $blogs)
<article>

    <div itemscope itemtype="http://schema.org/Article">
    	<header>
	    <h1>{{ $blogs->post_title}}</h1>
	    <p>{{ $blogs->created_at }}</p>
	    正文<p>
	    </header>
    <div style="clear:both;">

    {{ $blogs->post_content}}</p>
    </div>
    <a href="<?= url('/') ?>" rel="alternate">back</a>
    </div>
<article>
@endforeach
@stop


