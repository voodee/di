<?php /* Smarty version Smarty-3.1.11, created on 2012-09-22 03:56:23
         compiled from "../view/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20821304195042913f0376a0-11135601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f196ee24b7f82a1fa659fab3d25f42289d6d84b3' => 
    array (
      0 => '../view/footer.tpl',
      1 => 1348271171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20821304195042913f0376a0-11135601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5042913f05ae32_85403426',
  'variables' => 
  array (
    'page' => 0,
    'l' => 0,
    'script_init' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5042913f05ae32_85403426')) {function content_5042913f05ae32_85403426($_smarty_tpl) {?>  <footer></footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="view/include/js/libs/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
  
  <?php if ($_smarty_tpl->tpl_vars['page']->value=='main'){?>
  <script src='http://vkontakte.ru/js/api/openapi.js'></script>
  <script src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/js/libs/jquery.autosize-min.js'></script>
  <script src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/js/libs/jQuery.fileinput.js'></script>
  <script src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/js/libs/jquery.form.js'></script>
  <script src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/js/libs/waypoints.min.js'></script>
  <script src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/js/libs/jquery.toastmessage.js'></script>
  <?php }?>
  
  <script src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/js/libs/jquery.activity-indicator-1.0.0.min.js'></script>
  
  <script>var base_url = '<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
';</script>
  <!-- scripts concatenated and minified via ant build script-->
  <script src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/js/plugins.js'></script>
  <?php if ($_smarty_tpl->tpl_vars['page']->value=='login'){?><script src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/js/script_login.js'></script><?php }?>
  
  <?php if ($_smarty_tpl->tpl_vars['page']->value=='main'){?><script src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/js/script.js'></script><?php }?>
  <!-- end concatenated and minified scripts-->
  
  <?php if ($_smarty_tpl->tpl_vars['script_init']->value=='index'){?>
    
      <script>
        $(document).ready(function() {
          msg.init('<?php echo Core::inst()->user->get_screen_name();?>
');
        });
      </script>
    
  <?php }?>
  
  
  <!--[if lt IE 7 ]>
    <script src='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
view/include/js/libs/dd_belatedpng.js'></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); </script>
  <![endif]-->
  
</body>
</html><?php }} ?>