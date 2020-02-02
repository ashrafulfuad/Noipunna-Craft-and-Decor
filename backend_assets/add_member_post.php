<?php
require_once('db.php');

$member_name = $_POST['member_name'];
$member_designation = $_POST['member_designation'];
$member_fb_link = $_POST['member_fb_link'];
$member_gmail_link = $_POST['member_gmail_link'];
$member_another_link = $_POST['member_another_link'];
$member_another_fa_class = $_POST['member_another_fa_class'];
$member_photo = $_FILES['member_photo'];

$insert_member = "INSERT INTO member_table
(member_name, member_designation, member_fb_link, member_gmail_link, member_another_link,
member_another_fa_class, member_photo) VALUES ('$member_name', '$member_designation',
   '$member_fb_link', '$member_gmail_link', '$member_another_link',
   '$member_another_fa_class', 'member_default_photo.jpg')";
mysqli_query($db_connect, $insert_member);

if (!empty($member_photo['name'])) {
  $uploading_image_name = $member_photo['name'];
  $afertExplode = explode('.', $uploading_image_name);
  $extention = end($afertExplode);
  $user_id = mysqli_insert_id($db_connect);
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
  $update_with_photo = "UPDATE member_table SET member_photo = '$new_file_name' WHERE id = $user_id";
  mysqli_query($db_connect, $update_with_photo);
  header('location: all_member_list.php');
}else{
  header('location: all_member_list.php');
}

?>
