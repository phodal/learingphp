@extends('template')

@section('title')
{{ $page_name}}
@stop

@section('content')

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

