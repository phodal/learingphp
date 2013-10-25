<!DOCTYPE html lang="zh-cn">
<html>
  <head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   <meta name="keywords" content="">
   <meta name="viewport" content="width=device-width">
   <meta name="description" content="">
<link rel="stylesheet" type="text/css" href="../templates/css/bootstrap.min.css" />
</head>
<body>
<div class="container">

	<div class="login section">
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
</div>
</div>
<script type="text/javascript" src="../templates/js/jquery.min.js"></script>
<script type="text/javascript" src="../templates/js/bootstrap.min.js"></script>
</body>
</html>