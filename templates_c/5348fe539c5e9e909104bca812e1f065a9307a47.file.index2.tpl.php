<?php /* Smarty version Smarty-3.1.15, created on 2013-10-22 13:40:10
         compiled from ".\templates\index2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8942526656d8009639-15683154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5348fe539c5e9e909104bca812e1f065a9307a47' => 
    array (
      0 => '.\\templates\\index2.tpl',
      1 => 1382442009,
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
    'navbrand' => 1,
    'navname' => 0,
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
	     <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['navbrand']->value;?>
</a>
	  </div>

	  <div class="collapse navbar-collapse navbar-ex1-collapse subMenu">
	    <ul class="nav navbar-nav" id="top-nav">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['name'] = 'outer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['navname']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total']);
?>
			<li ><a href="#section-<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['outer']['rownum'];?>
"><?php echo $_smarty_tpl->tpl_vars['navname']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']];?>
</a></li> 
		<?php endfor; endif; ?>

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

<?php }} ?>
