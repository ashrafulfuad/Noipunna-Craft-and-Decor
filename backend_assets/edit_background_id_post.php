<?php
require('db.php');

$user_id = $_POST['id'];
$heading_bg = $_FILES['heading_bg'];
$counter_bg = $_FILES['counter_bg'];

  $calling_all_from_db = "SELECT * FROM bg_table WHERE id= $user_id ";
  $query = mysqli_query($db_connect, $calling_all_from_db);
  $after_assoc = mysqli_fetch_assoc($query);
  if ($heading_bg['name'] == '' && $counter_bg['name'] == '') {
    header("location: view_background_id.php");
  }

  // for heading background start
  if ($heading_bg['name'] != '') {
    if ($after_assoc['heading_bg'] != 'default_heading_bg.jpg') {
      if($heading_bg['name'] != ''){
        $photo_path = "photos/bg_photo/".$after_assoc['heading_bg'];
        unlink($photo_path);
      }
    }
    $uploading_image_name = $heading_bg['name'];
    $afertExplode = explode('.', $uploading_image_name);
    $extention = end($afertExplode);
    $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
    if(!in_array($extention, $allowd_format)){
      echo "This format is not Allowed";
      die;
    }
    $uploading_image_size = $heading_bg['size'];
    if($uploading_image_size >= 500000000){
      echo "You can not upload Photo more than 5 MB";
      die;
    }
    $new_file_name = $user_id.'.'.$extention;
    $old_photos_location = $heading_bg['tmp_name'];
    $new_photos_location = "photos/bg_photo/".$new_file_name;
    move_uploaded_file($old_photos_location, $new_photos_location);
    $insert_with_photo = "UPDATE bg_table SET heading_bg = '$new_file_name' WHERE id = $user_id";
    mysqli_query($db_connect, $insert_with_photo);
  }
  // for heading background end


  // for counter background start
  if ($counter_bg['name'] != '') {
    if ($after_assoc['heading_bg'] != 'default_counter_bg.jpg') {
      if($counter_bg['name'] != ''){
        $photo_pathfor_counter = "photos/bg_photo/".$after_assoc['counter_bg'];
        unlink($photo_pathfor_counter);
      }
    }
    $uploading_image_name_for_counter = $counter_bg['name'];
    $afertExplodeForCounter = explode('.', $uploading_image_name_for_counter);
    $extention_for_counter = end($afertExplodeForCounter);
    $allowd_format_for_counter = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
    if(!in_array($extention_for_counter, $allowd_format_for_counter)){
      echo "This format is not Allowed";
      die;
    }
    $uploading_image_size_for_counter = $counter_bg['size'];
    if($uploading_image_size_for_counter >= 500000000){
      echo "You can not upload Photo more than 5 MB";
      die;
    }
    $new_file_name_for_counter = time().'.'.$extention_for_counter;
    $old_photos_location_for_counter = $counter_bg['tmp_name'];
    $new_photos_location_for_counter = "photos/bg_photo/".$new_file_name_for_counter;
    move_uploaded_file($old_photos_location_for_counter, $new_photos_location_for_counter);
    $insert_with_photo_for_counter = "UPDATE bg_table SET counter_bg = '$new_file_name_for_counter' WHERE id = $user_id";
    mysqli_query($db_connect, $insert_with_photo_for_counter);
  }
  // for counter background end

  header("location: view_background_id.php");

?>
