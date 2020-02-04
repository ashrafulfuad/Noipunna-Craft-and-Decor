<?php
require_once('backend_assets/db.php');
// $user_id = $_POST['id'];
$select_data_from_db = "SELECT * FROM product_table";
$query = mysqli_query($db_connect, $select_data_from_db);
$after_assoc = mysqli_fetch_assoc($query);
echo $after_assoc['id'];

?>
