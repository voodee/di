<?php
  $server_name = $_SERVER['SERVER_NAME'];
  $script_url = 'http://' . $server_name.preg_replace('/^(.*?)model\/index\.php$/is', '$1', $_SERVER['SCRIPT_NAME']); 
  
  $site_name = isset($_POST['site_name']) ? $_POST['site_name']:'Di';
  $site_description = isset($_POST['site_description']) ? $_POST['site_description']:'';
  $db_host = isset($_POST['db_host']) ? $_POST['db_host']:'localhost';
  $db_user = isset($_POST['db_user']) ? $_POST['db_user']:'';
  $db_pass = isset($_POST['pass']) ? $_POST['db_pass']:'';
  $db_name = isset($_POST['db_name']) ? $_POST['db_name']:'';

  $error = '';
  
  if (isset($_POST['command']) && $_POST['command'] == 'setup') {
    if (!mysql_connect($db_host, $db_user, $db_pass))
      $error .= '<p style=\'font-weight: bold;\'>Не верны данные доступа к Базе Данных.</p>';
    elseif (!mysql_select_db($db_name))
      $error .= '<p style=\'font-weight: bold;\'>Не найдена База Данных.</p>';
    else {
      $query = mysql_query('
        CREATE TABLE IF NOT EXISTS `di_user` (
          `user_id` int(15) NOT NULL AUTO_INCREMENT,
          `user_tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
          `user_password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
          `user_remote_addr` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
          `user_code` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
          `user_hash` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
          `user_is_confirmed` tinyint(1) NOT NULL,
          `user_date_created` int(15) NOT NULL,
          PRIMARY KEY (`user_id`)
        ) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ;
      ');
      if (!$query) 
        $error .= '<p style=\'font-weight: bold;\'>Ошибка создания таблицы #1.</p>';
      
      $query = mysql_query('
        CREATE TABLE IF NOT EXISTS `di_usermeta` (
          `usermeta_user_id` int(15) NOT NULL DEFAULT \'0\',
          `usermeta_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
          `usermeta_val` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
          PRIMARY KEY (`usermeta_user_id`,`usermeta_key`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
      ');
      if (!$query) 
        $error .= '<p style=\'font-weight: bold;\'>Ошибка создания таблицы #2.</p>';
      
      if (!isset($error{1})) {
        $fd = fopen('data/config.bd.php', 'w+');
        fwrite($fd, '<'."?php\n");
        fwrite($fd, 'Core::inst()->bdhost = \''.$db_host.'\';'."\n");
        fwrite($fd, 'Core::inst()->bdlogin = \''.$db_user.'\';'."\n");
        fwrite($fd, 'Core::inst()->bdpassword = \''.$db_pass.'\';'."\n");
        fwrite($fd, 'Core::inst()->bdname = \''.$db_name.'\';'."\n");
        fwrite($fd, '?'.'>');
        fclose($fd);
        
        $fd = fopen('data/config.general.php', 'w+');
        fwrite($fd, '<'."?php\n");
        fwrite($fd, 'Core::inst()->site_name = \''.$site_name.'\';'."\n");
        fwrite($fd, 'Core::inst()->description = \''.$site_description.'\';'."\n");
        fwrite($fd, 'Core::inst()->salt_bd = \'0000\';'."\n");
        fwrite($fd, 'Core::inst()->salt_au = \'0000\';'."\n");
        fwrite($fd, 'Core::inst()->salt_session = \'0000\';'."\n");
        fwrite($fd, '?'.'>');
        fclose($fd);
        
        header('Location: '.$script_url);
        exit('0');
      }
    } 
  }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class='no-js lt-ie9 lt-ie8 lt-ie7'> <![endif]-->
<!--[if IE 7]>         <html class='no-js lt-ie9 lt-ie8'> <![endif]-->
<!--[if IE 8]>         <html class='no-js lt-ie9'> <![endif]-->
<!--[if gt IE 8]><!--> <html class='no-js'> <!--<![endif]-->
    <head>
        <meta charset='utf-8'>
        <title>Установка</title>
        <meta name='description' content=''>
        <meta name='viewport' content='width=device-width'>
    </head>
    <body>
        <p>Вас привествует мастер установки.</p>
        <?php
          if (isset($error{1}))
            echo $error;
        ?>
        <form action=<?php echo $script_url; ?> method='post'>
          <input type='hidden' name='command' value='setup'>
          <p><label><input type='text' name='site_name' value='<?php echo $site_name; ?>'> - Название сайта</label></p>
          <p><label><input type='text' name='site_description' value='<?php echo $site_description; ?>'> - Описание сайта</label></p>
          <p><label><input type='text' name='db_host' value='<?php echo $db_host; ?>'> - host Database</label></p>
          <p><label><input type='text' name='db_user' value='<?php echo $db_user; ?>'> - имя пользователя Database</label></p>
          <p><label><input type='text' name='db_pass' value='<?php echo $db_pass; ?>'> - пароль пользователя Database</label></p>
          <p><label><input type='text' name='db_name' value='<?php echo $db_name; ?>'> - название Database</label></p>
          <p><input type='submit' name='button' value='далее'></p>
        </form>
    </body>
</html>
<?php
  exit(0);
?>