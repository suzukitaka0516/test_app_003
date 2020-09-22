<?php
  header('Content-type: application/json');

  // ルーティング
  switch($_POST['action']) {
    case 'get' :
      echo get_message();
      break;
    case 'send' :
      echo send_message($_POST['message']);
      break;
    default :
      // redirect 404 page
  }

  // 新規メッセージを取得
  function get_message() {
    // DBからメッセージを取得
    $result = array('message' => '相手からのメッセージ');
    return json_encode($result);
  }

  // メッセージを保存
  function send_message($msg) {
    // DBにメッセージを保存
    $result = array('message' => $msg);
    return json_encode($result);
  }

 ?>
