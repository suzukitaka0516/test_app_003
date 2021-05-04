<?php
  require_once dirname(__FILE__) .'/conf/const.php';
  require_once dirname(__FILE__) .'/model/functions.php';
  require_once dirname(__FILE__) .'/model/bbs.php';

  session_start();

  // データベース接続
  $db = get_db_connect();

  // Postされたものを定義
  $id = get_post('id');
  $comment = get_post('comment');

  // Update
  if(update_comment($db, $id, $comment)){
    set_message('コメントを変更しました。');
  } else {
    set_error('コメントの変更に失敗しました。');
  }

  redirect_to(BBS_URL);
?>