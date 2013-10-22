<?php /* Smarty version Smarty-3.1.15, created on 2013-10-22 12:54:38
         compiled from ".\templates\index2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8942526656d8009639-15683154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5348fe539c5e9e909104bca812e1f065a9307a47' => 
    array (
      0 => '.\\templates\\index2.tpl',
      1 => 1382439276,
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
<?php if ($_valid && !is_callable('content_526656d804fb49_39499489')) {function content_526656d804fb49_39499489($_smarty_tpl) {?>
<!DOCTYPE html lang="zh-cn">
<html>
<head>
<meta charset="utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</title>
 <meta name="keywords" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="templates/css/bootstrap.min.css" />
</head>
<body>
<div class="navbar navbar-inverse ">
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

<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/bootstrap.min.js"></script>
</body>

</HTML>

<?php }} ?>
