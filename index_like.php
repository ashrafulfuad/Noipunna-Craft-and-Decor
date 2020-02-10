<?php
require_once('backend_assets/db.php');

// $user_id = $_GET['id'];

$select_data_from_db = "SELECT * FROM product_table";
$query = mysqli_query($db_connect, $select_data_from_db);

foreach ($query as $value) {
  $id = $value['id'];
  $likes =  $value['likes'];
  $ha = "SELECT * FROM product_table where id = '$id' AND likes='$likes'";
  $row = mysqli_num_rows(mysqli_query($db_connect, $ha));
  if ($row == 1) {
    // code...
    echo $value['likes'];
    return false;
  }
}



?>
