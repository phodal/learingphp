
<!DOCTYPE html lang="zh-cn">
<html>
  <head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   <meta name="keywords" content="">
   <meta name="viewport" content="width=device-width">
   <meta name="description" content="">
<link rel="stylesheet" type="text/css" href="./templates/css/bootstrap.min.css" />
</head>
@if(Auth::check())
<h1>Welcome "{{ Auth::user()->name }}"</h1>
@else
<h1>Welcome</h1>
@endif

<script type="text/javascript" src="./templates/js/jquery.min.js"></script>
<script type="text/javascript" src="./templates/js/bootstrap.min.js"></script>
</body>
</html>