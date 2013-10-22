<?php
require './libs/Smarty.class.php';
require './configs/db.php';
global $zero;
$smarty = new Smarty;
//$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;
$smarty->assign("Name","Phodal",true);
$smarty->assign("navbrand","Phodal",true);

$smarty->assign("title","dream",true);
$smarty->assign("navname",$zero);

$smarty->display('index2.tpl');
