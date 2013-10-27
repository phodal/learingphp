
<!DOCTYPE html lang="zh-cn">
<html>
  	<head>
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	    <meta name="keywords" content="">
	    <meta name="viewport" content="width=device-width">
	    <meta name="description" content="">
	    <title>@yield('title')</title>
		<link rel="stylesheet" type="text/css" href="<?= url('css/bootstrap.min.css') ?>" />
	    <link rel="stylesheet" type="text/css" href="<?= url('css/nivo-slider.css') ?>" />
	    <link rel="stylesheet" type="text/css" href="<?= url('css/styles.css') ?>" />
	    <link rel="stylesheet" href="<?= url('css/themes/default/default.css') ?>" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?= url('css/themes/light/light.css') ?>" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?= url('css/themes/dark/dark.css') ?>" type="text/css" media="screen" />
	    <link rel="stylesheet" href="<?= url('css/themes/bar/bar.css') ?>" type="text/css" media="screen" />


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
            <li ><a href="#">Home</a></li>
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
		<div class="slider-wrapper theme-default">
		 	<div id="slider" class="nivoSlider">
			    <img src="<?= url('uploads/1.jpg') ?>">
			    <img src="<?= url('uploads/2.jpg') ?>">
			    <img src="<?= url('uploads/3.jpg') ?>">
			    <img src="<?= url('uploads/4.jpg') ?>">
			</div>
		</div>
	</div>
</div>

<div class="container">
  <div class="row-fluid">

		<div class="col-lg-5">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
			 			@yield('content')	
			 		</div>
	 		</div>
 	    </div>

		<div class="col-lg-5">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
			 			@yield('content')	
			 		</div>
	 		</div>
 	    </div>

 		<div class="col-lg-2">
 			@yield('panel')
 		</div>
    </div>
</div>
<div class="container">
  <div class="row-fluid">

		<div class="col-lg-4">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
			 			@yield('content')	
			 		</div>
	 		</div>
 	    </div>

		<div class="col-lg-4">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title</h3>
					</div>
					<div class="panel-body">
			 			@yield('content')	
			 		</div>
	 		</div>
 	    </div>

		<div class="col-lg-4">
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

<script type="text/javascript" src="<?= url('js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?= url('js/jquery.nivo.slider.js') ?>"></script>

<script type="text/javascript">
    $(window).load(function() {
       $('#slider').nivoSlider({
		    effect: 'random',               // Specify sets like: 'fold,fade,sliceDown'
		    slices: 15,                     // For slice animations
		    boxCols: 8,                     // For box animations
		    boxRows: 4,                     // For box animations
		    animSpeed: 500,                 // Slide transition speed
		    pauseTime: 3000,                // How long each slide will show
		    startSlide: 0,                  // Set starting Slide (0 index)
		    directionNav: true,             // Next & Prev navigation
		    controlNav: true,               // 1,2,3... navigation
		    controlNavThumbs: false,        // Use thumbnails for Control Nav
		    pauseOnHover: true,             // Stop animation while hovering
		    manualAdvance: false,           // Force manual transitions
		    prevText: 'Prev',               // Prev directionNav text
		    nextText: 'Next',               // Next directionNav text
		    randomStart: false,             // Start on a random slide
		    beforeChange: function(){},     // Triggers before a slide transition
		    afterChange: function(){},      // Triggers after a slide transition
		    slideshowEnd: function(){},     // Triggers after all slides have been shown
		    lastSlide: function(){},        // Triggers when last slide is shown
		    afterLoad: function(){}         // Triggers when slider has loaded
		});
        
    });
</script>

<script type="text/javascript" src="<?= url('js/bootstrap.min.js') ?>"></script>

</body>
</html>