<?php
require_once('db.php');



$social_link = $_POST['social_link'];
$social_fa_class = $_POST['social_fa_class'];

$insert_social_link = "INSERT INTO social_link_table (social_link, social_fa_class) VALUES ('$social_link', '$social_fa_class')";
$after_query = mysqli_query($db_connect, $insert_social_link);

header('location: all_social_link_list.php');


?>
