<?php /* Smarty version Smarty-3.1.11, created on 2012-09-22 00:22:20
         compiled from "../view/wall_get_one_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114317179850573d2d607a67-36549517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49580fe9b85646c18dcac72866edf28746c7e21d' => 
    array (
      0 => '../view/wall_get_one_msg.tpl',
      1 => 1348258851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114317179850573d2d607a67-36549517',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50573d2d667589_66424764',
  'variables' => 
  array (
    'post_info' => 0,
    'val' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50573d2d667589_66424764')) {function content_50573d2d667589_66424764($_smarty_tpl) {?><div class='LineTextEasy PostOneOnMainPage clearfix' data-post_id='<?php echo $_smarty_tpl->tpl_vars['post_info']->value['id'];?>
' data-post_date='<?php echo $_smarty_tpl->tpl_vars['val']->value['date_created_source'];?>
'>
  <dl class='PostOneOnMainPageHeader'>
    <dt>
    <?php if ($_smarty_tpl->tpl_vars['post_info']->value['display_link']==''){?>
      <?php echo $_smarty_tpl->tpl_vars['post_info']->value['display_name'];?>

    <?php }else{ ?>
      <a href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
<?php echo $_smarty_tpl->tpl_vars['post_info']->value['link_name'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['post_info']->value['display_name'];?>
'><?php echo $_smarty_tpl->tpl_vars['post_info']->value['display_name'];?>
</a>
    <?php }?>
    </dt>
    <dd><?php echo $_smarty_tpl->tpl_vars['post_info']->value['date_created'];?>
</dd>
  </dl>
  <article><?php echo $_smarty_tpl->tpl_vars['post_info']->value['text'];?>
</article>
  <?php if ($_smarty_tpl->tpl_vars['val']->value['type']==1){?>
    <div class='PostOneOnMainPageAdditionalLink'>
      <a href='<?php echo $_smarty_tpl->tpl_vars['val']->value['link'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['val']->value['link_title'];?>
'><?php echo $_smarty_tpl->tpl_vars['val']->value['link_title'];?>
 »</a>
    </div>
  <?php }?>
</div><?php }} ?>