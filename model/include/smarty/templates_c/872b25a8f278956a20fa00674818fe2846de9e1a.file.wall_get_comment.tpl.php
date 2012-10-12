<?php /* Smarty version Smarty-3.1.11, created on 2012-10-05 21:17:06
         compiled from "../view/wall_get_comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1541767520506f1612cdcf83-00255088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '872b25a8f278956a20fa00674818fe2846de9e1a' => 
    array (
      0 => '../view/wall_get_comment.tpl',
      1 => 1349457218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1541767520506f1612cdcf83-00255088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506f1612d677c5_99328089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506f1612d677c5_99328089')) {function content_506f1612d677c5_99328089($_smarty_tpl) {?><dt class='clearfix'><img src='<?php echo $_smarty_tpl->tpl_vars['comment']->value['pic'];?>
' title='' /></dt>
<dd>
  <p class='PostOneOnMainPageCommentListHeader'>
    <a href='#' title=''><?php echo $_smarty_tpl->tpl_vars['comment']->value['screen_name'];?>
</a> 
    <span class='PostOneOnMainPageCommentListHeaderDate'><?php echo $_smarty_tpl->tpl_vars['comment']->value['date'];?>
</span>
  </p>
  <p><?php echo $_smarty_tpl->tpl_vars['comment']->value['text'];?>
</p>
</dd><?php }} ?>