<?php
session_start();

require_once('db.php');

$m_as_p_id = $_POST['m_as_p_id'];
$m_as_p_name = $_POST['m_as_p_name'];
$m_as_p_email = $_POST['m_as_p_email'];
$m_as_p_phone = $_POST['m_as_p_phone'];
$m_as_p_location = $_POST['m_as_p_location'];
$m_as_p_message = $_POST['m_as_p_message'];
$m_as_p_photo = $_FILES['m_as_p_photo'];

$insert_defauls_m_as_p_photo = "INSERT INTO m_as_p
(m_as_p_id, m_as_p_name, m_as_p_email, m_as_p_phone, m_as_p_location, m_as_p_message, m_as_p_photo)
 VALUES ('$m_as_p_id', '$m_as_p_name', '$m_as_p_email', '$m_as_p_phone', '$m_as_p_location', '$m_as_p_message', 'defaults_m_as_p_photo.jpg')";
mysqli_query($db_connect, $insert_defauls_m_as_p_photo);





if (!empty($m_as_p_photo['name'])) {
  $uploading_image_name = $m_as_p_photo['name'];
  $afertExplode = explode('.', $uploading_image_name);
  $extention = end($afertExplode);
  $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
  if(!in_array($extention, $allowd_format)){
    echo "This format is not Allowed Please Use jpg, jpeg, png, JPG, GPEG, PNG Format";
    die;
  }
  $uploading_image_size = $m_as_p_photo['size'];
  if($uploading_image_size >= 50000000000){
    echo "You can not upload Photo more than 5 MB";
    die;
  }
  $user_id = mysqli_insert_id($db_connect);
  $new_file_name = $user_id.'.'.$extention;


  $old_photos_location = $m_as_p_photo['tmp_name'];
  $new_photos_location = "photos/m_as_p_photo/".$new_file_name;
  move_uploaded_file($old_photos_location, $new_photos_location);
  $update_with_photo = "UPDATE m_as_p SET m_as_p_photo = '$new_file_name' WHERE id = $user_id";
  mysqli_query($db_connect, $update_with_photo);
}


$_SESSION['message_as_p_sent'] = 'yes';

header('location:../product_details.php?id='.$m_as_p_id.'#m_as_p');



?>
