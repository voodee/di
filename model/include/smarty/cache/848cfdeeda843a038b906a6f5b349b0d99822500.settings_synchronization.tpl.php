<?php /*%%SmartyHeaderCode:2890439175042967dc91b59-78147963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '848cfdeeda843a038b906a6f5b349b0d99822500' => 
    array (
      0 => '../view/settings_synchronization.tpl',
      1 => 1346523645,
      2 => 'file',
    ),
    '01f78f5e21e8de1ec766f9a42bb1c253bae8edeb' => 
    array (
      0 => '../view/header.tpl',
      1 => 1348270991,
      2 => 'file',
    ),
    'a1ff46a4d9bc09220ceb34a9766244aad6ea8e7f' => 
    array (
      0 => '../view/nav.tpl',
      1 => 1346594131,
      2 => 'file',
    ),
    '5e6459a2c20f538febdc2de703f600c5cc58d771' => 
    array (
      0 => '../view/nav_settings.tpl',
      1 => 1346541657,
      2 => 'file',
    ),
    'f196ee24b7f82a1fa659fab3d25f42289d6d84b3' => 
    array (
      0 => '../view/footer.tpl',
      1 => 1348271171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2890439175042967dc91b59-78147963',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506205c9a01c50_53407268',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506205c9a01c50_53407268')) {function content_506205c9a01c50_53407268($_smarty_tpl) {?><!doctype html>  

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
  <!--[if lt IE 9]>
    <script src='http://html5shim.googlecode.com/svn/trunk/html5.js'></script>
  <![endif]-->
  
  <!--[if IE 7]><link rel='stylesheet' href='http://example.com/testapi/view/include/css/icon-ie7.css'><![endif]-->

  <link rel='stylesheet' href='http://example.com/testapi/view/include/css/style.css?v=2'>
  
  <link rel='stylesheet' href='http://example.com/testapi/view/include/css/jquery.toastmessage.css'>  
  <script src='http://example.com/testapi/view/include/js/libs/modernizr-1.6.min.js'></script>

</head>

<body>
<header>
  <div id='HeaderLine'>
    <div id='HeaderLineIn'>
      <ul id='HeaderLineMenu'>
        <li style='float: left;'><a href='http://example.com/testapi/' title='Главная' class='gradient'><span class='icon-home'></span>Главная</a></li>
        <li><a href='http://example.com/testapi/login/out/' title='Выйти' class='gradient'><span class='icon-logout'></span>Выйти</a></li>
        <li><a href='http://example.com/testapi/settings/' title='Настройки' class='gradient'><span class='icon-cog'></span>Настройки</a></li>
      </ul>
    </div>
  </div>
</header>
<div id='Main' role='main' class='PageWriter clearfix'>
  <div id='LineNav'>
    <div class='LineTextEasy BlockLinkInfo'>
  <a href='http://example.com/testapi/settings/profile/' title=''>
    <dl>
      <dt>Роман</dt>
      <dd>Изменить персональные данные</dd>
    </dl>
  </a>
</div>
<div class='LineTextEasy BlockLinkNav'>
  <ul>
    <li class='active'><a href='http://example.com/testapi/settings/synchronization/' title='Синхронизация'>Синхронизация</a></li>
    <li><a href='http://example.com/testapi/settings/profile/' title='Профиль'>Профиль</a></li>
  </ul>
</div>
  </div>
  <div id='LineText'>
    <div class='LineTextHeader'>
      <h2>Синхронизация</h2>
      <p class='LineTextHeaderSub'>Здесь вы можете синхронизировать свои аккаунты.</p>
    </div>
    <div class='LineTextContent clearfix'>
      <ul class='SocialIcon64List'>
                                            <li>
          <a href='http://example.com/testapi/synchronization/fb_logout/2/' title='Выйти' class='Icon64Link Icon64LinkOut Icon64Link_fb ir'>Выйти</a>
          <p>Андрей Татьянович</p>
        </li>
                                                      <li>
          <a href='http://example.com/testapi/synchronization/twitter_logout/25/' title='Выйти' class='Icon64Link Icon64LinkOut Icon64Link_twitter ir'>Выйти</a>
          <p>Roome</p>
        </li>
                                        <li>
          <a href='http://example.com/testapi/synchronization/twitter_logout/26/' title='Выйти' class='Icon64Link Icon64LinkOut Icon64Link_twitter ir'>Выйти</a>
          <p>Роман</p>
        </li>
                            </ul>
          </div>
    <div class='LineTextBottom clearfix'>
      <ul class='SocialIcon64List'>
              <li>
          <a href='http://example.com/testapi/synchronization/fb_login/' title='Войти' class='Icon64Link Icon64LinkIn Icon64Link_fb ir'>Войти</a>
          <p><a href='http://facebook.com/' title='FaceBook'>FaceBook</a></p>
        </li>
              <li>
          <a href='http://example.com/testapi/synchronization/twitter_login/' title='Войти' class='Icon64Link Icon64LinkIn Icon64Link_twitter ir'>Войти</a>
          <p><a href='http://twitter.com/' title='Twitter'>Twitter</a></p>
        </li>
            </ul>
    </div>
  </div>
</div>
  <footer></footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="view/include/js/libs/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
  
    <script src='http://vkontakte.ru/js/api/openapi.js'></script>
  <script src='http://example.com/testapi/view/include/js/libs/jquery.autosize-min.js'></script>
  <script src='http://example.com/testapi/view/include/js/libs/jQuery.fileinput.js'></script>
  <script src='http://example.com/testapi/view/include/js/libs/jquery.form.js'></script>
  <script src='http://example.com/testapi/view/include/js/libs/waypoints.min.js'></script>
  <script src='http://example.com/testapi/view/include/js/libs/jquery.toastmessage.js'></script>
    
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