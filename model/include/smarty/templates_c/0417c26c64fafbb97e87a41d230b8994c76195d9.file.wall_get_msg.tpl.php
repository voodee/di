<?php /* Smarty version Smarty-3.1.11, created on 2012-09-28 01:42:59
         compiled from "../view/wall_get_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74241631250572bb4897485-88758864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0417c26c64fafbb97e87a41d230b8994c76195d9' => 
    array (
      0 => '../view/wall_get_msg.tpl',
      1 => 1348782098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74241631250572bb4897485-88758864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50572bb48f4f26_30212531',
  'variables' => 
  array (
    'post_info' => 0,
    'val' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50572bb48f4f26_30212531')) {function content_50572bb48f4f26_30212531($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['post_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
<div class='LineTextEasy PostOneOnMainPage clearfix' data-post_id='<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
' data-post_date='<?php echo $_smarty_tpl->tpl_vars['val']->value['date_created_source'];?>
'>
  <dl class='PostOneOnMainPageHeader'>
    <dt>
    <?php if ($_smarty_tpl->tpl_vars['val']->value['display_link']==''){?>
      <?php echo $_smarty_tpl->tpl_vars['val']->value['display_name'];?>

    <?php }else{ ?>
      <a href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
<?php echo $_smarty_tpl->tpl_vars['val']->value['link_name'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['val']->value['display_name'];?>
'><?php echo $_smarty_tpl->tpl_vars['val']->value['display_name'];?>
</a>
    <?php }?>
    </dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['val']->value['date_created'];?>
</dd>
  </dl>
  <article><?php echo $_smarty_tpl->tpl_vars['val']->value['text'];?>
</article>
  <?php if ($_smarty_tpl->tpl_vars['val']->value['type']==1){?>
    <div class='PostOneOnMainPageAdditionalLink'>
      <a href='<?php echo $_smarty_tpl->tpl_vars['val']->value['link'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['val']->value['link_title'];?>
'><?php echo $_smarty_tpl->tpl_vars['val']->value['link_title'];?>
 »</a>
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['val']->value['type']==2){?>
    <div class='PostOneOnMainPageAdditionalImg'>
      <img src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/images/600/<?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
.jpg' />
    </div>
  <?php }?>
</div>
<div class='PostOneOnMainPageComment clearfix' data-comment_post_id='<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
' data-comment_post_type='<?php echo $_smarty_tpl->tpl_vars['val']->value['type'];?>
'></div>
<?php } ?><?php }} ?>