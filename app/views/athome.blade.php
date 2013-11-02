
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
        <style >
        .chart {
		    background: #eee;
		    padding: 3px;
		}

		.chart div {
		  width: 0;
		  transition: all 1s ease-out;
		  -moz-transition: all 1s ease-out;
		  -webkit-transition: all 1s ease-out;
		}

		.chart div {
		  font: 10px sans-serif;
		  background-color: steelblue;
		  text-align: right;
		  padding: 3px;
		  margin: 5px;
		  color: white;
		  box-shadow: 2px 2px 2px #666;
		}
		</style>
	</head>
<body>


<div class="container">

<div class="container">
  <div class="row-fluid">
 		
		<div class="col-lg-12">
			<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Panel title  {{ $maxid}}</h3>
					</div>
					<div class="panel-body">
				    <div id="App1" ng-app="myApp" ng-controller="FetchCtrl">
				      <pre>http status code: <%status%></pre>
				      <pre>http response data: <%data%></pre>
				    </div>

				    <div id="App2" ng-controller="MainCtrl">
				        <button ng-click="click()" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Star
获取数据</button>
					    <linechart data='data' options='options'></linechart>
					</div>
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
<script type="text/javascript" src="<?= url('js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?= url('js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?= url('js/angular.min.js') ?>"></script>
<script type="text/javascript" src="<?= url('js/log.js') ?>"></script>
<script type="text/javascript" src="<?= url('js/d3.v3.min.js') ?>"></script>
<script type="text/javascript" src="<?= url('js/line-chart.js') ?>"></script>
<script type="text/javascript" src="<?= url('js/angular-locale_zh-cn.js') ?>"></script>

<script type="text/javascript">
log('[c="font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; color: #fff; font-size: 20px; padding: 15px 20px; background: #444; border-radius: 4px; line-height: 100px; text-shadow: 0 1px #000"]Console[c]');

		var codeStyle = 'background: rgb(255, 255, 219); padding: 1px 5px; border: 1px solid rgba(0, 0, 0, 0.1)';
		var bold = 'font-weight: bold';
		var italic = 'font-style: italic';
		var testHeaderStyle = 'font-weight: bold; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 13px; color: #444; padding: 8px 0; line-height: 40px';
		var testNumber = 1;
		
		log.l('%c Enjoying it ！%c','', bold, '');
</script>
<script>
	var myApp = angular.module('myApp', [], function($interpolateProvider) {
	    $interpolateProvider.startSymbol('<%');
	    $interpolateProvider.endSymbol('%>');
	});
	var sensorsData=[];

	function FetchCtrl($scope, $http, $templateCache) {
	  $scope.method = 'GET';
	  $scope.url = '<?= url('/athome/1') ?>';

	  $scope.code = null;
	  $scope.response = null;
	 
	  $http({method: $scope.method, url: $scope.url, cache: $templateCache}).
	    success(function(data, status) {
	        $scope.status = status;
	        $scope.data = data;
	        $.each(data,function(key,val){
	        	sensorsData.push(val.sensors1);
	        })
	    }).
	    error(function(data, status) {
	        $scope.data = data || "Request failed";
	        $scope.status = status;
	        log.l("Request Failed");
	    });
	}

	var app = angular.module('chartApp', ['n3-charts.linechart']);
	app.controller('MainCtrl', function($scope, $http, $templateCache) {
		$scope.click=function(){
			$scope.options = {lineMode: 'cardinal',series: [{y: 'value', label: '温度', color: 'steelblue'}]};
			$scope.data=[{x:0,value:12}];
	        $scope.url = '<?= url('/athome') ?>';
            $scope.url=$scope.url+'/'+{{$maxid}};
			log.l($scope.url);

			$scope.method = 'GET';
			 
			$http({method: $scope.method, url: $scope.url, cache: $templateCache}).
			    success(function(data, status) {
			        $.each(data,function(key,val){
			        	$scope.data.push({x:1,value:val.sensors1});
			        	$scope.data.push({x:2,value:val.sensors2});
			        	log.l($scope.data);
			        })
			    }).
			    error(function(data, status) {
			        $scope.data = data || "Request failed";
			        log.l("Request Failed");
			    });
		}
	});

	angular.bootstrap(document.getElementById("App2"),['chartApp']);

</script>


</body>
</html>