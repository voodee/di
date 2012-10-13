<?php
  require('./include/smarty/Smarty.class.php');
  
  class di_smarty extends Smarty {
    function __construct() {
      parent::__construct();
      
      $this->setTemplateDir('../view/');
      $this->setCompileDir('./include/smarty/templates_c/');
      $this->setConfigDir('./include/smarty/configs/');
      $this->setCacheDir('./include/smarty/cache/');
      $this->setPluginsDir('./include/smarty/plugins/');
      
      $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
      spl_autoload_register('__autoload');
    }

  }




/*


  require('./include/smarty/Smarty.class.php');
  class di_smarty extends Smarty {
    function __construct() {
      $this->template_dir = '../view/';
      $this->compile_dir  = './include/smarty/templates_c/';
      $this->config_dir   = './include/smarty/configs/';
      $this->cache_dir    = './include/smarty/cache/';
      $this->plugins_dir  = './include/smarty/plugins/';
      $this->sysplugins_dir  = './include/smarty/sysplugins/';
      $this->caching = false;
      $this->debugging = false;
      spl_autoload_register('__autoload');
    }

    function db_get_template($tpl_name, &$tpl_source, &$smarty_obj) {
      global $_CORE;
      $result = $_CORE['db']->query('SELECT `tpl_source` FROM `di_template` WHERE `tpl_name` = ?', $tpl_name);
      if ($_CORE['db']->num_rows()) {
        $tpl_source = $_CORE['db']->result($result, 0, 'tpl_source');
        return true;
      } else {
        return false;
      }
  }

    function db_get_timestamp($tpl_name, &$tpl_timestamp, &$smarty_obj) {
      global $_CORE;
      $result = $_CORE['db']->query('SELECT `tpl_timestamp` FROM `di_template` WHERE `tpl_name` = ?', $tpl_name);
      if ($_CORE['db']->num_rows()) {
        $tpl_timestamp = $_CORE['db']->result($result, 0, 'tpl_timestamp');
        return true;
      } else {
        return false;
      }
    }

    function db_get_secure($tpl_name, &$smarty_obj) {return true;}

    function db_get_trusted($tpl_name, &$smarty_obj) {}
  }
*/
?>