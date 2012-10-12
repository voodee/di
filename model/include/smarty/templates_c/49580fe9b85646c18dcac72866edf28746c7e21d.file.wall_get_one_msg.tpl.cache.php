<?php /* Smarty version Smarty-3.1.11, created on 2012-09-17 14:03:43
         compiled from "../view/wall_get_one_msg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8202281395053074f64b403-80938998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49580fe9b85646c18dcac72866edf28746c7e21d' => 
    array (
      0 => '../view/wall_get_one_msg.tpl',
      1 => 1347876218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8202281395053074f64b403-80938998',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5053074f678197_79368940',
  'variables' => 
  array (
    'post_info' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5053074f678197_79368940')) {function content_5053074f678197_79368940($_smarty_tpl) {?><div class='LineTextEasy PostOneOnMainPage clearfix' data-post_id='<?php echo $_smarty_tpl->tpl_vars['post_info']->value['id'];?>
'>
  <dl class='PostOneOnMainPageHeader'>
    <dt>
    <?php if ($_smarty_tpl->tpl_vars['post_info']->value['display_link']==''){?>
      <?php echo $_smarty_tpl->tpl_vars['post_info']->value['display_name'];?>

    <?php }else{ ?>
      <a href='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
<?php echo $_smarty_tpl->tpl_vars['post_info']->value['display_link'];?>
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
</div><?php }} ?>