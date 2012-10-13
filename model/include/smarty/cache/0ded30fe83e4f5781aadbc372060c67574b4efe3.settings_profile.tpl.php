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
    '01f78f5e21e8de1ec766f9a42bb1c253bae8edeb' => 
    array (
      0 => '../view/header.tpl',
      1 => 1344004260,
      2 => 'file',
    ),
    'a1ff46a4d9bc09220ceb34a9766244aad6ea8e7f' => 
    array (
      0 => '../view/nav.tpl',
      1 => 1346507859,
      2 => 'file',
    ),
    '5e6459a2c20f538febdc2de703f600c5cc58d771' => 
    array (
      0 => '../view/nav_settings.tpl',
      1 => 1346538767,
      2 => 'file',
    ),
    'f196ee24b7f82a1fa659fab3d25f42289d6d84b3' => 
    array (
      0 => '../view/footer.tpl',
      1 => 1345314319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8511090155042911404b135-74234772',
  'variables' => 
  array (
    'feedback' => 0,
    'l' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504291142df5d9_85344319',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504291142df5d9_85344319')) {function content_504291142df5d9_85344319($_smarty_tpl) {?><!doctype html>  

<!--[if lt IE 7 ]> <html lang='en' class='no-js ie6'> <![endif]-->
<!--[if IE 7 ]>    <html lang='en' class='no-js ie7'> <![endif]-->
<!--[if IE 8 ]>    <html lang='en' class='no-js ie8'> <![endif]-->
<!--[if IE 9 ]>    <html lang='en' class='no-js ie9'> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang='en'' class='no-js'> <!--<![endif]-->
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>

  <title>Test Api</title>
  <meta name='description' content=''>
  <meta name='author' content=''>

  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <link rel='shortcut icon' href='http://example.com/testapi/favicon.ico'>
  <link rel='apple-touch-icon' href='http://example.com/testapi/apple-touch-icon.png'>
  
  <!--[if gte IE 9]>
  <style type='text/css'>
    .gradient {filter: none;}
  </style>
  <![endif]-->

  <link rel='stylesheet' href='http://example.com/testapi/view/include/css/style.css?v=2'>
  <script src='http://example.com/testapi/view/include/js/libs/modernizr-1.6.min.js'></script>

</head>

<body>
<header>
  <div id='HeaderLine'>
    <div id='HeaderLineIn'>
      <ul id='HeaderLineMenu'>
        <li style='float: left;'><a href='http://example.com/testapi/' title='Главная' class='gradient'>Главная</a></li>
        <li><a href='http://example.com/testapi/login/out/' title='Выйти' class='gradient'>Выйти</a></li>
        <li><a href='http://example.com/testapi/settings/' title='Настройки' class='gradient'>Настройки</a></li>
      </ul>
    </div>
  </div>
</header>
<div id='Main' role='main' class='PageWriter clearfix'>
  <div id='LineNav'>
    <div class='LineTextEasy BlockLinkInfo'>
  <a href='http://example.com/testapi/settings/profile/' title=''>
    <dl>
      <dt>Roman</dt>
      <dd>Изменить персональные данные</dd>
    </dl>
  </a>
</div>
<div class='LineTextEasy BlockLinkNav'>
  <ul>
    <li><a href='http://example.com/testapi/settings/synchronization/' title='Синхронизация'>Синхронизация</a></li>
    <li class='active'><a href='http://example.com/testapi/settings/profile/' title='Профиль'>Профиль</a></li>
  </ul>
</div>
  </div>
  <div id='LineText'>
    <div class='LineTextHeader'>
      <h2>Профиль</h2>
      <p class='LineTextHeaderSub'>Здесь вы можете изменить свои личные данные.</p>
    </div>
        <form action='http://example.com/testapi/settings/profile/' method='post' class='SettingForm'>
    <div class='LineTextContent clearfix'>
      <fieldset>
        <label for='input_user_name'>Имя</label>
        <div>
          <input id='input_user_name' type='text' maxlength='20' name='user[name]' value='Roman' />
          <p>Введите своё настоящее имя.</p>
        </div>
      </fieldset>
      <fieldset>
        <label for='input_screen_name'>Логин</label>
        <div>
          <input id='input_screen_name' type='text' maxlength='15' name='user[screen_name]' value='' />
          <p>http://example.com/testapi/u/ваш_логин</p>
        </div>
      </fieldset>
      <fieldset>
        <label for='input_email'>Адрес электронной почты</label>
        <div>
          <input id='input_email' type='text' name='user[email]' value='' />
          <p>Адрес электронной почты будет скрыт.</p>
        </div>
      </fieldset>
      <fieldset>
        <label for='input_url'>Сайт</label>
        <div>
          <input id='input_url' type='text' name='user[url]' value='' />
          <p>У вас есть сайт или блог? Просто введите адрес.</p>
        </div>
      </fieldset>
      <fieldset style='margin: 0;'>
        <label for='input_description'>О себе</label>
        <div>
          <textarea id='input_description' type='text' name='user[description]'></textarea>
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
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="view/include/js/libs/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
  
  <script src='http://vkontakte.ru/js/api/openapi.js'></script>  
  <script src='http://example.com/testapi/view/include/js/libs/jquery.activity-indicator-1.0.0.min.js'></script>
  
  <script>var base_url = 'http://example.com/testapi/';</script>
  <!-- scripts concatenated and minified via ant build script-->
  <script src='http://example.com/testapi/view/include/js/plugins.js'></script>
    
  <script src='http://example.com/testapi/view/include/js/script.js'></script>  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src='http://example.com/testapi/view/include/js/libs/dd_belatedpng.js'></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); </script>
  <![endif]-->
  
</body>
</html><?php }} ?>