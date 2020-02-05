<?php
require_once('backend_assets/db.php');

$user_id = $_GET['id'];

$select_data_from_db = "SELECT * FROM product_table where id = '$user_id'";
$query = mysqli_query($db_connect, $select_data_from_db);
$after_assoc = mysqli_fetch_assoc($query);
echo $after_assoc['likes'];



?>
