<?php
require_once('db.php');

$p_category_name = $_POST['p_category_name'];

$insert_category = "INSERT INTO p_category_table (p_category_name) VALUES ('$p_category_name')";
mysqli_query($db_connect, $insert_category);

header('location: all_category_list.php');

?>
