<?php
 /**
 * Example Application

 * @package Example-application
 */

require './libs/Smarty.class.php';

$smarty = new Smarty;
//$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;
$smarty->assign("Name","Phodal",true);
$smarty->assign("title","dream",true);

$smarty->display('index2.tpl');
