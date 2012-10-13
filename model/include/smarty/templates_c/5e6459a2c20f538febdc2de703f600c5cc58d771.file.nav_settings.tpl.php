<?php /* Smarty version Smarty-3.1.11, created on 2012-09-02 03:21:22
         compiled from "../view/nav_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19895736515042913f00e115-23819821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e6459a2c20f538febdc2de703f600c5cc58d771' => 
    array (
      0 => '../view/nav_settings.tpl',
      1 => 1346541657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19895736515042913f00e115-23819821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5042913f030ac2_73466646',
  'variables' => 
  array (
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5042913f030ac2_73466646')) {function content_5042913f030ac2_73466646($_smarty_tpl) {?><div class='LineTextEasy BlockLinkInfo'>
  <a href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
settings/profile/' title=''>
    <dl>
      <dt><?php echo Core::inst()->user->get_name();?>
</dt>
      <dd>Изменить персональные данные</dd>
    </dl>
  </a>
</div>
<div class='LineTextEasy BlockLinkNav'>
  <ul>
    <li<?php if (Core::inst()->controller=='settings'&&Core::inst()->action=='synchronization'){?> class='active'<?php }?>><a href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
settings/synchronization/' title='Синхронизация'>Синхронизация</a></li>
    <li<?php if (Core::inst()->controller=='settings'&&Core::inst()->action=='profile'){?> class='active'<?php }?>><a href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
settings/profile/' title='Профиль'>Профиль</a></li>
  </ul>
</div><?php }} ?>