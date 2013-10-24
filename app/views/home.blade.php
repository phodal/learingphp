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
<h1>Welcome </h1>
@foreach ($box_office as $box_office)
    标题<p>{{ $box_office->post_title}} {{ $box_office->created_at }}</p>
    正文<p>{{ $box_office->post_content}}</p>
@endforeach

@endif
@stop

