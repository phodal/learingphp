<?php /* Smarty version Smarty-3.1.15, created on 2013-10-22 13:28:33
         compiled from ".\templates\index2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8942526656d8009639-15683154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5348fe539c5e9e909104bca812e1f065a9307a47' => 
    array (
      0 => '.\\templates\\index2.tpl',
      1 => 1382441312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8942526656d8009639-15683154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_526656d804fb49_39499489',
  'variables' => 
  array (
    'title' => 1,
    'Name' => 1,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526656d804fb49_39499489')) {function content_526656d804fb49_39499489($_smarty_tpl) {?><!DOCTYPE html lang="zh-cn">
<html>
  <head>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8">
   <meta name="keywords" content="">
   <meta name="viewport" content="width=device-width">
   <meta name="description" content="">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</title>
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
	     <a class="navbar-brand" href="#">Phodal</a>
	  </div>

	  <div class="collapse navbar-collapse navbar-ex1-collapse subMenu">
	    <ul class="nav navbar-nav" id="top-nav">
	      <li  href="#section-1"><a href="#">在校情况</a></li>
	    <li ><a href="#section-2" >项目经历</a></li>
	    <li ><a href="#section-3" >其他项目、经历</a></li>
	    <li ><a href="#section-4" >专业技能</a></li>
 
	      <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">简历下载 </a>
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

<?php }} ?>
