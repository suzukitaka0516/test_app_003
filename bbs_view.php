<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>ポートフォリオ　フォーム</title>
  </head>
  <?php foreach(get_errors() as $error){ ?>
    <p><?php print $error; ?></p>
  <?php } ?>
  <?php foreach(get_messages() as $messages){ ?>
    <p><?php print $messages; ?></p>
  <?php } ?>
  <?php
    require_once '../conf/const.php';
    require_once MODEL_PATH. 'bbs.php';

    session_start();

    include_once VIEW_PATH. 'bbs_view.php';
  ?>
  <?php
    require_once '../conf/const.php';
    require_once MODEL_PATH. 'functions.php';
    require_once MODEL_PATH. 'bbs.php';

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
    <?php
      require_once '../conf/const.php';
      require_once MODEL_PATH. 'functions.php';
      require_once MODEL_PATH. 'bbs.php';

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
    <?php
     require_once '../conf/const.php';
     require_once MODEL_PATH. 'functions.php';
     require_once MODEL_PATH. 'bbs.php';

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
    <!-- 投稿フォーム -->
    <form method="post" action="bbs_insert.php">
      <div>
        <label>年月日</label>
        <input type="text" name="name">
      </div>
      <div>
        <label>コメント</label>
        <input type="text" name="comment">
      </div>
      <input type="submit" value="送信">
    </form>

    <!-- 表示 -->
    <table>
    <div class="allwrap" style="min-height: 502px;">
          <div class="container">
            <div id="Notice" class="sabu">
             <p>Information</p>
            <dl id="Notice-new">
            <span class="Notice-days">
              <dt>2020.12.7</dt>
              <dd class="Notice-Text">
                <a href="">今後の更新について</a>
              </dd>
            </span>
            <p class="btn-Notice">
              <a href="">お知らせ一覧</a>
            </p>
            </dl>
          </div>
         </div>
       </div>
       <tbody>
         <?php foreach($bbs as $data){ ?>
         <tr>
         <td><?php print($data['name']); ?></td>
         <td><?php print($data['comment']); ?></td>
         <td><?php print($data['created']); ?></td>
         <td></td>
         </tr>
         <?php } ?>
       </tbody>
      <tbody>
        <?php foreach($bbs as $data){ ?>
         <tr>
           <td><?php print($data['name']); ?></td>
           <td>
             <form method="post" action="bbs_update.php">
               <input type="text" name="comment" value="<?php print($data['comment']); ?>">
               <input type="submit" value="変更">
                <!-- hiddenで該当idをpost -->
               <input type="hidden" name="id" value="<?php print($data['id']); ?>">
             </form>    
            </td>
            <td><?php print($data['created']); ?></td>
            <td>
             <form method="post" action="bbs_delete.php">
             <input type="submit" value="削除">
             <input type="hidden" name="id" value="<?php print($data['id']); ?>">
             </form>
            </td>
         </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
  

</html>
