<?php
require('db.php');

$user_id = $_GET['id'];
$sql = "SELECT * from upcoming_table WHERE id = $user_id";
$assoc = mysqli_fetch_assoc(mysqli_query($db_connect, $sql));
if ($assoc['status'] == 2) {
  $for_db_conn = "UPDATE upcoming_table SET status = 1 WHERE id = $user_id";
  mysqli_query($db_connect, $for_db_conn);
  header('location: view_upcoming_product.php');
}else{
  $for_db_conn = "UPDATE upcoming_table SET status = 2 WHERE id = $user_id";
  mysqli_query($db_connect, $for_db_conn);
  header('location: view_upcoming_product.php');
}
