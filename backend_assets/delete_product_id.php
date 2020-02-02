<?php
require('db.php');

$user_id = $_GET['id'];

$member_photo_in_db = "SELECT * FROM product_table WHERE id= $user_id ";
$query = mysqli_query($db_connect, $member_photo_in_db);
$after_assoc = mysqli_fetch_assoc($query);
$product_photo_one = $after_assoc['product_photo_one'];
$product_photo_two = $after_assoc['product_photo_two'];
$product_photo_three = $after_assoc['product_photo_three'];
$product_photo_four = $after_assoc['product_photo_four'];

// for photo no one
if ($product_photo_one != 'default_p_photo.jpg') {
  $photo_path = "photos/product_photo/".$product_photo_one;
  unlink($photo_path);
}
// for photo no two
if ($product_photo_two != 'default_p_photo.jpg') {
  $photo_path = "photos/product_photo/".$product_photo_two;
  unlink($photo_path);
}
// for photo no three
if ($product_photo_three != 'default_p_photo.jpg') {
  $photo_path = "photos/product_photo/".$product_photo_three;
  unlink($photo_path);
}
// for photo no four
if ($product_photo_four != 'default_p_photo.jpg') {
  $photo_path = "photos/product_photo/".$product_photo_four;
  unlink($photo_path);
}
$delete = "DELETE FROM product_table WHERE id= $user_id";
mysqli_query($db_connect, $delete);
header('location: all_product_list.php');
?>
