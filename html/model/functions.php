<?php

function redirect_to($url){
  header('Location:'. $url);
  exit;
}

function get_post($name){
  if(isset($_POST[$name]) === true){
    return $_POST[$name];
  };
  return '';
}  

// セッション
function get_session($name){
  if(isset($_SESSION[$name]) === true){
      return $_SESSION[$name];
  };
  return '';
}

function set_session($name, $value){
  $_SESSION[$name] = $value;
}

// エラーメッセージ
function set_error($error){
  $_SESSION['__errors'][] = $error;
}

function get_errors(){
  $errors = get_session('__errors');
  if($errors === ''){
      return array();
  }
  set_session('__errors', array());
  return $errors;
}

// メッセージ
function set_message($message){
  $_SESSION['__message'][] = $message;
}

function get_messages(){
  $messages = get_session('__message');
  if($messages === ''){
      return array();
  }
  set_session('__message', array());
  return $messages;
}
?>