<?php /* Smarty version Smarty-3.1.11, created on 2012-09-02 19:46:52
         compiled from "../view/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17122139975042913f001915-06141285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '17122139975042913f001915-06141285',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5042913f00b5d9_30184612',
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5042913f00b5d9_30184612')) {function content_5042913f00b5d9_30184612($_smarty_tpl) {?><header>
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