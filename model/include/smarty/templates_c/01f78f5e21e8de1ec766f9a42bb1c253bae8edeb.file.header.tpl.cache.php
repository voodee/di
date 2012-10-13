<?php /* Smarty version Smarty-3.1.11, created on 2012-10-12 03:20:47
         compiled from "../view/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1704994194504291141746e4-62496727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01f78f5e21e8de1ec766f9a42bb1c253bae8edeb' => 
    array (
      0 => '../view/header.tpl',
      1 => 1349980936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1704994194504291141746e4-62496727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504291141c1c93_72362780',
  'variables' => 
  array (
    'title' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504291141c1c93_72362780')) {function content_504291141c1c93_72362780($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class='no-js lt-ie9 lt-ie8 lt-ie7'> <![endif]-->
<!--[if IE 7]>         <html class='no-js lt-ie9 lt-ie8'> <![endif]-->
<!--[if IE 8]>         <html class='no-js lt-ie9'> <![endif]-->
<!--[if gt IE 8]><!--> <html class='no-js'> <!--<![endif]-->
  <head>
    <meta charset='utf-8'>
    <title><?php if ($_smarty_tpl->tpl_vars['title']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 | <?php }?><?php echo Core::inst()->site_name;?>
</title>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width'>
    
    <link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/css/normalize.css'>
    <link rel='stylesheet' href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/css/main.css'>
    <script src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/js/vendor/modernizr-2.6.1.min.js'></script>
  </head>
  <body>
  <!--[if lt IE 7]><p class='chromeframe'>You are using an outdated browser. <a href='http://browsehappy.com/'>Upgrade your browser today</a> or <a href='http://www.google.com/chromeframe/?redirect=true'>install Google Chrome Frame</a> to better experience this site.</p><![endif]--><?php }} ?>