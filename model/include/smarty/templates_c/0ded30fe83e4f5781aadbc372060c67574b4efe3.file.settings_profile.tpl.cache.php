<?php /* Smarty version Smarty-3.1.11, created on 2012-09-02 02:49:56
         compiled from "../view/settings_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8511090155042911404b135-74234772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ded30fe83e4f5781aadbc372060c67574b4efe3' => 
    array (
      0 => '../view/settings_profile.tpl',
      1 => 1346539155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8511090155042911404b135-74234772',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feedback' => 0,
    'l' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5042911416ea68_66489323',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5042911416ea68_66489323')) {function content_5042911416ea68_66489323($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div id='Main' role='main' class='PageWriter clearfix'>
  <div id='LineNav'>
    <?php echo $_smarty_tpl->getSubTemplate ('nav_settings.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

  </div>
  <div id='LineText'>
    <div class='LineTextHeader'>
      <h2>Профиль</h2>
      <p class='LineTextHeaderSub'>Здесь вы можете изменить свои личные данные.</p>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['feedback']->value)==2){?>
    <div class='LineTextContent MesSuccessError clearfix <?php if ($_smarty_tpl->tpl_vars['feedback']->value[0]){?>MesSuccessErrorGreen<?php }else{ ?>MesSuccessErrorRed<?php }?>'>
      <p><?php echo $_smarty_tpl->tpl_vars['feedback']->value[1];?>
</p>
    </div>
    <?php }?>
    <form action='<?php echo $_smarty_tpl->tpl_vars['l']->value;?>
settings/profile/' method='post' class='SettingForm'>
    <div class='LineTextContent clearfix'>
      <fieldset>
        <label for='input_user_name'>Имя</label>
        <div>
          <input id='input_user_name' type='text' maxlength='20' name='user[name]' value='<?php echo $_smarty_tpl->tpl_vars['user_info']->value['name'];?>
' />
          <p>Введите своё настоящее имя.</p>
        </div>
      </fieldset>
      <fieldset>
        <label for='input_screen_name'>Логин</label>
        <div>
          <input id='input_screen_name' type='text' maxlength='15' name='user[screen_name]' value='<?php echo $_smarty_tpl->tpl_vars['user_info']->value['screen_name'];?>
' />
          <p><?php echo $_smarty_tpl->tpl_vars['l']->value;?>
u/ваш_логин</p>
        </div>
      </fieldset>
      <fieldset>
        <label for='input_email'>Адрес электронной почты</label>
        <div>
          <input id='input_email' type='text' name='user[email]' value='<?php echo $_smarty_tpl->tpl_vars['user_info']->value['email'];?>
' />
          <p>Адрес электронной почты будет скрыт.</p>
        </div>
      </fieldset>
      <fieldset>
        <label for='input_url'>Сайт</label>
        <div>
          <input id='input_url' type='text' name='user[url]' value='<?php echo $_smarty_tpl->tpl_vars['user_info']->value['url'];?>
' />
          <p>У вас есть сайт или блог? Просто введите адрес.</p>
        </div>
      </fieldset>
      <fieldset style='margin: 0;'>
        <label for='input_description'>О себе</label>
        <div>
          <textarea id='input_description' type='text' name='user[description]'><?php echo $_smarty_tpl->tpl_vars['user_info']->value['description'];?>
</textarea>
          <p>Не более 255 символов о себе.</p>
        </div>
      </fieldset>
    </div>
    <div class='LineTextBottom clearfix'>
      <fieldset>
        <div>
          <input type='hidden' name='command' value='refresh' />
          <input type='submit' value='Сохранить изменения' />
        </div>
      </fieldset>
    </div>
    </form>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>