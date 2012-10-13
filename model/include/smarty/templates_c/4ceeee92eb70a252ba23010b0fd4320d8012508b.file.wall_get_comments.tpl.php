<?php /* Smarty version Smarty-3.1.11, created on 2012-10-05 21:19:48
         compiled from "../view/wall_get_comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14893884765064cca9337416-62737521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ceeee92eb70a252ba23010b0fd4320d8012508b' => 
    array (
      0 => '../view/wall_get_comments.tpl',
      1 => 1349457583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14893884765064cca9337416-62737521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5064cca9397fa9_49081134',
  'variables' => 
  array (
    'count_comments' => 0,
    'comments' => 0,
    'val' => 0,
    'l' => 0,
    'post_id' => 0,
    'post_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5064cca9397fa9_49081134')) {function content_5064cca9397fa9_49081134($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['count_comments']->value>0){?>
  <?php if ($_smarty_tpl->tpl_vars['count_comments']->value>3){?>
  <p class='PostOneOnMainPageCommentLinkCount'><a href='#' title=''><span class='Ul'><?php echo $_smarty_tpl->tpl_vars['count_comments']->value;?>
 комментариев</span><span> &dArr;</span></a></p>
  <?php }?>
  <dl class='PostOneOnMainPageCommentList'>
  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
    <dt class='clearfix'><img src='<?php echo $_smarty_tpl->tpl_vars['val']->value['pic'];?>
' title='' /></dt>
    <dd>
      <p class='PostOneOnMainPageCommentListHeader'>
        <?php if ($_smarty_tpl->tpl_vars['val']->value['api_type']!=''){?><span class='PostOneOnMainPageCommentListHeaderIcon Icon16Link_<?php echo $_smarty_tpl->tpl_vars['val']->value['api_type'];?>
'></span><?php }?>
        <a href='#' title=''><?php echo $_smarty_tpl->tpl_vars['val']->value['screen_name'];?>
</a> 
        <span class='PostOneOnMainPageCommentListHeaderDate'><?php echo $_smarty_tpl->tpl_vars['val']->value['date'];?>
</span>
      </p>
      <p><?php echo $_smarty_tpl->tpl_vars['val']->value['text'];?>
</p>
    </dd>
  <?php } ?>
  </dl>
<?php }else{ ?>
  <dl class='PostOneOnMainPageCommentList'></dl>
<?php }?>
<div class='AddCommentBox clearfix'>
  <form action='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
wall/add_comment/' enctype='multipart/form-data' method='post'>
    <textarea class='AddCommentBoxText' name='text' placeholder='Добавить комментарий...'></textarea>
    
    <input type='hidden' name='post_id' value='<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
' />
    <input type='hidden' name='post_type' value='<?php echo $_smarty_tpl->tpl_vars['post_type']->value;?>
' />
    
    <p><input class='AddCommentBoxSendButton' type='submit' value='Написать' /></p>
  </form>
</div><?php }} ?>