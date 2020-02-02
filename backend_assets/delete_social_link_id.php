<?php
require('db.php');

$user_id = $_GET['id'];

$delete = "DELETE FROM social_link_table WHERE id= $user_id";
mysqli_query($db_connect, $delete);
header('location: all_social_link_list.php');
?>
