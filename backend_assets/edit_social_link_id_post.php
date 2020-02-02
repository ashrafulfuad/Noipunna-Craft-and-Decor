<?php
require('db.php');

$user_id = $_POST['id'];
$social_link = $_POST['social_link'];
$social_fa_class = $_POST['social_fa_class'];

$sql = "UPDATE social_link_table SET social_link='$social_link', social_fa_class='$social_fa_class' WHERE id = $user_id";
mysqli_query($db_connect, $sql);
header("location: all_social_link_list.php");


?>
