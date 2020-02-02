<?php
require('db.php');

$user_id = $_POST['id'];
$about_details = $_POST['about_details'];
$about_photo = $_FILES['about_photo'];
$logo_photo = $_FILES['logo_photo'];



$sql = "UPDATE about_table SET about_details='$about_details' WHERE id = $user_id";
if (mysqli_query($db_connect, $sql)) {
  $calling_all_from_db = "SELECT * FROM about_table WHERE id= $user_id ";
  $query = mysqli_query($db_connect, $calling_all_from_db);
  $after_assoc = mysqli_fetch_assoc($query);




  if ($about_photo['name'] == '' && $logo_photo['name'] == '') {
    header("location: view_about_id.php");
  }
  /////////////about photo start////////////////////
  if ($about_photo['name'] != '') {
    if ($after_assoc['about_photo'] != 'default_about_photo.jpg') {
      if($about_photo['name'] != ''){
        $photo_path = "photos/about_photo/".$after_assoc['about_photo'];
        unlink($photo_path);
      }
    }
    $uploading_image_name = $about_photo['name'];
    $afertExplode = explode('.', $uploading_image_name);
    $extention = end($afertExplode);
    $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
    if(!in_array($extention, $allowd_format)){
      echo "This format is not Allowed  about photo nai";
      die;
    }
    $uploading_image_size = $about_photo['size'];
    if($uploading_image_size >= 500000){
      echo "You can not upload Photo more than 5 MB";
      die;
    }
    $new_file_name = $user_id.'.'.$extention;
    $old_photos_location = $about_photo['tmp_name'];
    $new_photos_location = "photos/about_photo/".$new_file_name;
    move_uploaded_file($old_photos_location, $new_photos_location);
    $insert_with_photo_as_logo = "UPDATE about_table SET about_photo = '$new_file_name' WHERE id = $user_id";
    mysqli_query($db_connect, $insert_with_photo_as_logo);
  }
  /////////////about photo end///////////////////


  /////////////logo photo start///////////////////
  if ($logo_photo['name'] != '') {
    if ($after_assoc['logo_photo'] != 'default_logo_photo.jpg') {
      if($logo_photo['name'] != ''){
        $photo_path_as_logo = "photos/about_photo/".$after_assoc['logo_photo'];
        unlink($photo_path_as_logo);
      }
    }
    $uploading_image_name_as_logo = $logo_photo['name'];
    $afertExplode_as_logo = explode('.', $uploading_image_name_as_logo);
    $extention_as_logo = end($afertExplode_as_logo);
    $allowd_format_as_logo = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
    if(!in_array($extention_as_logo, $allowd_format_as_logo)){
      echo "This format is not Allowed logo photo nai";
      die;
    }
    $uploading_image_size_as_logo = $logo_photo['size'];
    if($uploading_image_size_as_logo >= 500000){
      echo "You can not upload Photo more than 5 MB";
      die;
    }
    $new_file_name_as_logo = time().'.'.$extention_as_logo;
    $old_photos_location_as_logo = $logo_photo['tmp_name'];
    $new_photos_location_as_logo = "photos/about_photo/".$new_file_name_as_logo;
    move_uploaded_file($old_photos_location_as_logo, $new_photos_location_as_logo);
    $insert_with_photo_as_logo = "UPDATE about_table SET logo_photo = '$new_file_name_as_logo' WHERE id = $user_id";
    mysqli_query($db_connect, $insert_with_photo_as_logo);
  }
  /////////////logo photo end///////////////////



  header("location: view_about_id.php");
}else {
  echo "Not Updated";
}

?>
