
<!DOCTYPE html lang="zh-cn">
<html>
  <head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   <meta name="keywords" content="">
   <meta name="viewport" content="width=device-width">
   <meta name="description" content="">
   <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Phodal's DV</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li ><a href="./FP.EGG.html">彩蛋</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://about.phodal.com">关于我</a></li>
                <li><a href="http://www.phodal.com">个人主页</a></li>

              </ul>
            </li>
          </ul>

        </div><!--/.navbar-collapse -->
      </div>
     </div>
<div class="container">
<div class="jumbotron">

 @yield('content')
</div>
</div>
<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
</body>
</html>