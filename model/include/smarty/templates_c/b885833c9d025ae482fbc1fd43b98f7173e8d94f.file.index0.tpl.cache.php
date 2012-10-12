<?php /* Smarty version Smarty-3.1.11, created on 2012-09-02 18:06:37
         compiled from "../view/index0.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1723731112504367ed43c8a8-38413284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b885833c9d025ae482fbc1fd43b98f7173e8d94f' => 
    array (
      0 => '../view/index0.tpl',
      1 => 1343939113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1723731112504367ed43c8a8-38413284',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504367ed4ccd40_46741405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504367ed4ccd40_46741405')) {function content_504367ed4ccd40_46741405($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<header>
  <div id='HeaderLine'></div>
</header>
<div id='Main' role='main' class='LoginForm'>
  <h2>Добро пожаловать</h2>
  <p>Цените своё время</p>
  <form>
    <section class='BoxFormLogin'>
      <p id='BoxFormLoginTel'><input type='text' name='tel' placeholder='Мобильный телефон' /></p>
      <div id='BoxFormLoginMes'></div>
      <p id='BoxFormLoginCode'><input type='text' name='code' placeholder='Код из SMS' /></p>
      <p id='BoxFormLoginNewPass'><input type='text' name='password' placeholder='Новый пароль' /></p>
      <p id='BoxFormLoginPass'><input type='text' name='password' placeholder='Пароль' /></p>
      <p id='BoxFormLoginNext'><span class='BoxButton'><input type='button' name='next' value='Далее' /></span></p>
      <p id='BoxFormLoginEnter'><span class='BoxButton'><input type='button' name='enter' value='Войти' /></span></p>
      <p id='BoxFormLoginReg'><span class='BoxButton'><input type='button' name='registration' value='Зарегистрироваться' /></span></p>
      <div id='BoxFormLoginLoading'><div class='LoadingLane' style='display: block; margin: 0 auto;'></div>Загрузка</div>
    </section>
  </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>