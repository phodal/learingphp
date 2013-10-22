<?php
require './libs/Smarty.class.php';
require './configs/db.php';
require './vendor/autoload.php';

global $zero;
$smarty = new Smarty;
//$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;
$smarty->assign("Name","Phodal",true);
$smarty->assign("navbrand","Phodal",true);

$smarty->assign("title","dream",true);
$smarty->assign("navname",$zero);
$app = new \Slim\Slim();

$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});
$app->run();
$smarty->display('index2.tpl');
