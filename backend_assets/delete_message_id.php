<?php
require('db.php');

$user_id = $_GET['id'];

$delete = "DELETE FROM client_message_table WHERE id= $user_id";
mysqli_query($db_connect, $delete);
header('location: all_message_list.php');
?>
