<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>ポートフォリオ　フォーム</title>
  </head>
  <body>
    <h1>ポートフォリオ　フォーム</h1>
    <form method="post" action= "bbs_insert.php">
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
      <thead>
        <tr>
          <th>名前</th>
          <th>コメント</th>
          <th>投稿時間</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach((array)$bbs as $data){ ?>
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