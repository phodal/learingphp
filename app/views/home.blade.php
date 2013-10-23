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
<h1>Welcome</h1>
@endif
@stop

