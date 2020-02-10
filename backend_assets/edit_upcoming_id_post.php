<?php
require('db.php');

$user_id = $_POST['id'];
$upcoming_title = $_POST['upcoming_title'];
$upcoming_desc = $_POST['upcoming_desc'];
$upcoming_date = $_POST['upcoming_date'];
$upcoming_photo = $_FILES['upcoming_photo'];

$sql = "UPDATE upcoming_table SET upcoming_title='$upcoming_title', upcoming_desc='$upcoming_desc',
 upcoming_date='$upcoming_date' WHERE id = $user_id";


if (mysqli_query($db_connect, $sql)) {
  $calling_all_from_db = "SELECT * FROM upcoming_table WHERE id= $user_id ";
  $query = mysqli_query($db_connect, $calling_all_from_db);
  $after_assoc = mysqli_fetch_assoc($query);
  if (empty($upcoming_photo['name'])) {
    header("location: view_upcoming_product.php");
    die;
  }
  if (isset($upcoming_photo['name'])) {
    $photo_path = "photos/upcoming_photo/".$after_assoc['upcoming_photo'];
    unlink($photo_path);
  }
  $uploading_image_name = $upcoming_photo['name'];
  $afertExplode = explode('.', $uploading_image_name);
  $extention = end($afertExplode);
  $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
  if(!in_array($extention, $allowd_format)){
    echo "This format is not Allowed";
    die;
  }
  $uploading_image_size = $upcoming_photo['size'];
  if($uploading_image_size >= 500000000000){
    echo "You can not upload Photo more than 5 MB";
    die;
  }
  $new_file_name = $user_id.'.'.$extention;
  $old_photos_location = $upcoming_photo['tmp_name'];
  $new_photos_location = "photos/upcoming_photo/".$new_file_name;
  move_uploaded_file($old_photos_location, $new_photos_location);
  $insert_with_photo = "UPDATE upcoming_table SET upcoming_photo = '$new_file_name' WHERE id = $user_id";
  mysqli_query($db_connect, $insert_with_photo);
  header("location: view_upcoming_product.php");
}else {
  echo "Not Updated";
}

?>
