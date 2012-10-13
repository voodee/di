<?php /* Smarty version Smarty-3.1.11, created on 2012-09-02 17:55:33
         compiled from "../view/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1538875956504291141c4f60-98797686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1ff46a4d9bc09220ceb34a9766244aad6ea8e7f' => 
    array (
      0 => '../view/nav.tpl',
      1 => 1346594131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1538875956504291141c4f60-98797686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504291142222f4_16456829',
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504291142222f4_16456829')) {function content_504291142222f4_16456829($_smarty_tpl) {?><header>
  <div id='HeaderLine'>
    <div id='HeaderLineIn'>
      <ul id='HeaderLineMenu'>
        <li style='float: left;'><a href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
' title='Главная' class='gradient'><span class='icon-home'></span>Главная</a></li>
        <li><a href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
login/out/' title='Выйти' class='gradient'><span class='icon-logout'></span>Выйти</a></li>
        <li><a href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
settings/' title='Настройки' class='gradient'><span class='icon-cog'></span>Настройки</a></li>
      </ul>
    </div>
  </div>
</header><?php }} ?>