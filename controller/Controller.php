<?php
  class Controller Extends Base {

    function index() {
      $this('smarty')->assign('title', '');
      $this('smarty')->display('index.tpl');
    }
    
  }
?>