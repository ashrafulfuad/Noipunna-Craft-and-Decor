<?php
require('db.php');

$user_id = $_GET['id'];

$delete = "DELETE FROM category_table WHERE id= $user_id";
mysqli_query($db_connect, $delete);
header('location: all_category_list.php');
?>
