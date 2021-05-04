<?php
require_once dirname(__FILE__) .'/functions.php';
require_once dirname(__FILE__) .'/db.php';

// Create
function post_comment($db, $name, $comment){
  $sql = "
INSERT INTO
bbs(
name,
comment
)
VALUES(?,?)
";
  return execute_query($db, $sql, array($name, $comment));
}
// Read
function get_comments($db, $id){
  $sql = "
SELECT
id,
name,
comment,
created
FROM
bbs
";
  return fetch_all_query($db, $sql);
}
// Update
function update_comment($db, $id, $comment){
  $sql = "
UPDATE
bbs
SET
comment = ?
WHERE
id = ?
";
  return execute_query($db, $sql, array($comment, $id));
}
// Delete
function delete_comment($db, $id){
  $sql = "
DELETE FROM
bbs
WHERE
id = ?
";
  return execute_query($db, $sql, array($id));
}