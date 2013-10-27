
<!DOCTYPE html lang="zh-cn">
<html>
  	<head>
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	    <meta name="keywords" content="">
	    <meta name="viewport" content="width=device-width">
	    <meta name="description" content="">
	    <title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="<?= url('css/bootstrap.min.css') ?>" />
	    <link rel="stylesheet" href="<?= url('css/justified-nav.css') ?>" type="text/css" media="screen" />


	</head>
<body>

<div class="navbar nav-default">
      <div class="container">
      <h3 class="text-muted">Project name</h3>

        <div cclass="masthead">
          <ul class="nav nav-justified">
            @yield('headnav');

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
              <ul class="dropdown-menu nav">
                <li><a href="http://about.phodal.com">关于我</a></li>
                <li><a href="http://www.phodal.com">个人主页</a></li>

              </ul>
            </li>
          </ul>

        </div><!--/.navbar-collapse -->
      </div>
     </div>
<div class="container">

<div class="container">
  <div class="row-fluid">

 		<div class="col-lg-2">
 			@yield('panel')
 		</div>
 		
		<div class="col-lg-10">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
			 			@yield('content')	
			 		</div>
	 		</div>
 	    </div>

    </div>
</div>


<div class="footer">
        <p>&copy; Company 2013</p>
      </div>
</div>

</div>
<script type="text/javascript" src="<?= url('js/bootstrap.min.js') ?>"></script>

</body>
</html>