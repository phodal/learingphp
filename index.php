<?php
require './libs/Smarty.class.php';
require './configs/db.php';

$smarty = new Smarty;
//$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;
$smarty->assign("Name","Phodal",true);
$smarty->assign("navbrand","Phodal",true);

$smarty->assign("title","dream",true);
$smarty->assign("navname",array("在校情况","项目经历","其他项目、经历","专业技能"));

$smarty->display('index2.tpl');
