<?php

function get_db_connect(){
    // MySQL用のDSN文字列

    $dsn ='mysql: dbname=mysql; host=172.18.0.3; port=3306; charset=utf8';
    try{
      // DB接続
      $dbh = new PDO($dsn, 'test_app_001', 'test',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'));
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        exit('接続できません。理由：'.$e->getMessage());
    }
    return $dbh;
}
function execute_query($db, $sql, $params = array()){
  try{
    $statement = $db->prepare($sql);
    return $statement->execute($params);
  }catch(PDOException $e){
    set_error_handler('更新に失敗しました。');  
  }
  return false;
}

//read
function fetch_all_query($db, $sql, $params = array()){
  try{
    $statement = $db->prepare($sql);
    $statement->execute($params);
    return $statement->fetchAll();
  }catch(PDOException $e){
    set_error('データ取得に失敗しました。');
  }
  return false;
}
?>