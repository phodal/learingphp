@extends('template')

@section('title')
{{ $page_name}}
@stop

@section('content')

@stop

@section('Columns')
@foreach($col_set as $cols)
{{ $cols->columns_name}}
@endforeach
@stop

@section('panel')


@stop

