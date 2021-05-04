<?php
  require_once dirname(__FILE__) .'/conf/const.php';
  require_once dirname(__FILE__) .'/model/bbs.php';

  session_start();

  // SELECT文で選択したデータを表示させる為に追記
  $db = get_db_connect();
  $bbs = get_comments($db＄,$id);

  include_once dirname(__FILE__) . 'index.php';
?>
