<?php
  require_once dirname(__FILE__) .'/conf/const.php';
  require_once dirname(__FILE__) .'/model/functions.php';
  require_once dirname(__FILE__) .'/model/bbs.php';

  session_start();

  // データベース接続
  $db = get_db_connect();

  // Postされたものを定義
  $id = get_post('id');

  // Delete
  if(delete_comment($db, $id)){
    set_message('コメントを削除しました。');
  } else {
    set_error('コメントの削除に失敗しました。');
  }

  redirect_to(BBS_URL);
?>