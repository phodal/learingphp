@extends('layout')

@section('nav')


@stop

@section('title')
hello
@stop

@section('panel')

liui
@stop
@section('content')
@foreach ($posts as $blogs)
    <div itemscope itemtype="http://schema.org/Article">

    标题<p>{{ $blogs->post_title}} {{ $blogs->created_at }}</p>
    正文<p>

    <div style="clear:both;">

    {{ $blogs->post_content}}</p>
    </div>
    <a href="<?= url('/') ?>" rel="alternate">back</a>
    </div>
@endforeach
@stop


