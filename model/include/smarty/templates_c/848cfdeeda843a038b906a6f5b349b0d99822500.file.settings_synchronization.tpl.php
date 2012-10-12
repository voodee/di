<?php /* Smarty version Smarty-3.1.11, created on 2012-09-22 04:05:44
         compiled from "../view/settings_synchronization.tpl" */ ?>
<?php /*%%SmartyHeaderCode:551843180505d00d84ebe91-96846166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '848cfdeeda843a038b906a6f5b349b0d99822500' => 
    array (
      0 => '../view/settings_synchronization.tpl',
      1 => 1346523645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '551843180505d00d84ebe91-96846166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'id2' => 0,
    'count_api' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505d00d86d7997_83300708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505d00d86d7997_83300708')) {function content_505d00d86d7997_83300708($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include './include/smarty/plugins/modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id='Main' role='main' class='PageWriter clearfix'>
  <div id='LineNav'>
    <?php echo $_smarty_tpl->getSubTemplate ('nav_settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </div>
  <div id='LineText'>
    <div class='LineTextHeader'>
      <h2>Синхронизация</h2>
      <p class='LineTextHeaderSub'>Здесь вы можете синхронизировать свои аккаунты.</p>
    </div>
    <div class='LineTextContent clearfix'>
      <ul class='SocialIcon64List'>
      <?php $_smarty_tpl->tpl_vars['count_api'] = new Smarty_variable(0, null, 0);?>
      <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = Core::inst()->oauth->get_list_api(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value2']->_loop = false;
 $_smarty_tpl->tpl_vars['id2'] = new Smarty_Variable;
 $_from = Core::inst()->oauth->get_list_account($_smarty_tpl->tpl_vars['value']->value['api_system_name']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value){
$_smarty_tpl->tpl_vars['value2']->_loop = true;
 $_smarty_tpl->tpl_vars['id2']->value = $_smarty_tpl->tpl_vars['value2']->key;
?>
        <?php if (Core::inst()->oauth->is_loggedin($_smarty_tpl->tpl_vars['value']->value['api_system_name'],$_smarty_tpl->tpl_vars['id2']->value)){?>
        <?php $_smarty_tpl->tpl_vars['count_api'] = new Smarty_variable($_smarty_tpl->tpl_vars['count_api']->value+1, null, 0);?>
        <li>
          <a href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
synchronization/<?php echo $_smarty_tpl->tpl_vars['value']->value['api_system_name'];?>
_logout/<?php echo $_smarty_tpl->tpl_vars['id2']->value;?>
/' title='Выйти' class='Icon64Link Icon64LinkOut Icon64Link_<?php echo $_smarty_tpl->tpl_vars['value']->value['api_system_name'];?>
 ir'>Выйти</a>
          <p><?php echo smarty_modifier_truncate(Core::inst()->oauth->info[$_smarty_tpl->tpl_vars['value']->value['api_system_name']][$_smarty_tpl->tpl_vars['id2']->value]['name'],39,"…");?>
</p>
        </li>
        <?php }?>
        <?php } ?>
      <?php } ?>
      </ul>
      <?php if ($_smarty_tpl->tpl_vars['count_api']->value==0){?>Выберите сервисы<?php }?>
    </div>
    <div class='LineTextBottom clearfix'>
      <ul class='SocialIcon64List'>
      <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = Core::inst()->oauth->get_list_api(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <li>
          <a href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
synchronization/<?php echo $_smarty_tpl->tpl_vars['value']->value['api_system_name'];?>
_login/' title='Войти' class='Icon64Link Icon64LinkIn Icon64Link_<?php echo $_smarty_tpl->tpl_vars['value']->value['api_system_name'];?>
 ir'>Войти</a>
          <p><a href='<?php echo $_smarty_tpl->tpl_vars['value']->value['api_link'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['value']->value['api_name'];?>
'><?php echo $_smarty_tpl->tpl_vars['value']->value['api_name'];?>
</a></p>
        </li>
      <?php } ?>
      </ul>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>