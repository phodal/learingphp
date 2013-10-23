<!DOCTYPE html lang="zh-cn">
<html>
  <head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   <meta name="keywords" content="">
   <meta name="viewport" content="width=device-width">
   <meta name="description" content="">
	<title>{$title} - {$Name}</title>
<link rel="stylesheet" type="text/css" href="./templates/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <!-- Brand and toggle get grouped for better mobile display -->
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	     <a class="navbar-brand" href="#">{$navbrand}</a>
	  </div>

	  <div class="collapse navbar-collapse navbar-ex1-collapse subMenu">
	    <ul class="nav navbar-nav" id="top-nav">
		{section name=outer loop=$users}
			<li ><a href="#section-{$smarty.section.outer.rownum}">{$users[outer]}</a></li> 
		{/section}

	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">简历下载<b class="caret"></b></a>
	        <ul class="dropdown-menu" >
	          <li><a href="#">全版本</a></li>
	        </ul>
	      </li>
	    </ul>
	     <form name="search-highlight" id="search-highlight" method="post" action="#" class="navbar-form navbar-right" role="search">
	        <input name="term" id="term" class="text form-control2" placeholder="页面内搜索"/>
	        <input type="submit" name="submit" id="submit" class="btn btn-info" value="搜索" />
	    </form>
	  </div><!-- /.navbar-collapse -->

	</nav>
	</div>

<script type="text/javascript" src="./templates/js/jquery.min.js"></script>
<script type="text/javascript" src="./templates/js/bootstrap.min.js"></script>
</body>

</HTML>

