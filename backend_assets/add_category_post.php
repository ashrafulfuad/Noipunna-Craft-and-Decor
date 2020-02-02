<?php
require_once('db.php');

$category_name = $_POST['category_name'];

$insert_category = "INSERT INTO category_table (category_name) VALUES ('$category_name')";
mysqli_query($db_connect, $insert_category);

header('location: all_category_list.php');

?>
