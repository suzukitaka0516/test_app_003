<?php
    require_once dirname(__FILE__) .'/conf/const.php';
    require_once dirname(__FILE__) .'/model/functions.php';
    require_once dirname(__FILE__) .'/model/bbs.php';

    session_start();

    // データベース接続
    $db = get_db_connect();

    // Postされたものを定義
    $name = get_post('name');
    $comment = get_post('comment');

    // Insert
    if(post_comment($db, $name, $comment)){
    set_message('コメントを投稿しました。');
    }else{
    set_error('投稿に失敗しました。');
    }
    
    redirect_to(BBS_URL);
    
?>