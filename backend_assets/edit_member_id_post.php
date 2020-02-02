<?php
require('db.php');

$user_id = $_POST['id'];
$member_name = $_POST['member_name'];
$member_designation = $_POST['member_designation'];
$member_fb_link = $_POST['member_fb_link'];
$member_gmail_link = $_POST['member_gmail_link'];
$member_another_link = $_POST['member_another_link'];
$member_another_fa_class = $_POST['member_another_fa_class'];
$member_photo = $_FILES['member_photo'];

$sql = "UPDATE member_table SET member_name='$member_name', member_designation='$member_designation',
 member_fb_link='$member_fb_link', member_gmail_link='$member_gmail_link',
 member_another_link='$member_another_link', member_another_fa_class='$member_another_fa_class'
  WHERE id = $user_id";
if (mysqli_query($db_connect, $sql)) {
  $calling_all_from_db = "SELECT * FROM member_table WHERE id= $user_id ";
  $query = mysqli_query($db_connect, $calling_all_from_db);
  $after_assoc = mysqli_fetch_assoc($query);
  if ($member_photo['name'] == '') {
    header("location: all_member_list.php");
  }
  if ($after_assoc['member_photo'] != 'member_default_photo.jpg') {
    if($testimonial_photo['name'] != ''){
      $photo_path = "photos/member_photo/".$after_assoc['member_photo'];
      unlink($photo_path);
    }
  }
  $uploading_image_name = $member_photo['name'];
  $afertExplode = explode('.', $uploading_image_name);
  $extention = end($afertExplode);
  $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
  if(!in_array($extention, $allowd_format)){
    echo "This format is not Allowed";
    die;
  }
  $uploading_image_size = $member_photo['size'];
  if($uploading_image_size >= 500000){
    echo "You can not upload Photo more than 5 MB";
    die;
  }
  $new_file_name = $user_id.'.'.$extention;
  $old_photos_location = $member_photo['tmp_name'];
  $new_photos_location = "photos/member_photo/".$new_file_name;
  move_uploaded_file($old_photos_location, $new_photos_location);
  $insert_with_photo = "UPDATE member_table SET member_photo = '$new_file_name' WHERE id = $user_id";
  mysqli_query($db_connect, $insert_with_photo);
  header("location: all_member_list.php");
}else {
  echo "Not Updated";
}

?>
