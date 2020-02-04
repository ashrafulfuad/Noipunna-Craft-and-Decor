<?php
require_once('db.php');



$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];
$p_cat_id = $_POST['p_cat_id'];
$cat_id = $_POST['cat_id'];
$product_photo_one = $_FILES['product_photo_one'];
$product_photo_two = $_FILES['product_photo_two'];
$product_photo_three = $_FILES['product_photo_three'];
$product_photo_four = $_FILES['product_photo_four'];

$insert_product = "INSERT INTO product_table
(product_name, product_price, product_desc, p_cat_id, cat_id, product_photo_one, product_photo_two,
product_photo_three, product_photo_four) VALUES ('$product_name', '$product_price',
   '$product_desc', '$p_cat_id', '$cat_id',
    'default_p_photo.jpg', 'default_p_photo.jpg', 'default_p_photo.jpg', 'default_p_photo.jpg')";
mysqli_query($db_connect, $insert_product);


// echo "done";
// die;
if ($product_photo_one['name'] == '' && $product_photo_two['name'] == '' && $product_photo_three['name'] == '' && $product_photo_four['name'] == '') {
  header('location: all_product_list.php');
}

$user_id = mysqli_insert_id($db_connect);
// code for photo no one
  if (!empty($product_photo_one['name'])) {
    $uploading_image_name = $product_photo_one['name'];
    $afertExplode = explode('.', $uploading_image_name);
    $extention = end($afertExplode);
    $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
    if(!in_array($extention, $allowd_format)){
      echo "This format is not Allowed";
      die;
    }
    $uploading_image_size = $product_photo_one['size'];
    if($uploading_image_size >= 500000000){
      echo "You can not upload Photo more than 5 MB";
      die;
    }
    $new_file_name = $user_id.'(one)'.'.'.$extention;
    $old_photos_location = $product_photo_one['tmp_name'];
    $new_photos_location = "photos/product_photo/".$new_file_name;
    move_uploaded_file($old_photos_location, $new_photos_location);
    $update_with_photo = "UPDATE product_table SET product_photo_one = '$new_file_name' WHERE id = $user_id";
    mysqli_query($db_connect, $update_with_photo);
  }

// code for photo no two
  if (!empty($product_photo_two['name'])) {
    $uploading_image_name_two = $product_photo_two['name'];
    $afertExplode_two = explode('.', $uploading_image_name_two);
    $extention_two = end($afertExplode_two);
    $allowd_format_two = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
    if(!in_array($extention_two, $allowd_format_two)){
      echo "This format is not Allowed";
      die;
    }
    $uploading_image_size_two = $product_photo_two['size'];
    if($uploading_image_size_two >= 5000000000){
      echo "You can not upload Photo more than 5 MB";
      die;
    }
    $new_file_name_two = $user_id.'(two)'.'.'.$extention_two;
    $old_photos_location_two = $product_photo_two['tmp_name'];
    $new_photos_location_two = "photos/product_photo/".$new_file_name_two;
    move_uploaded_file($old_photos_location_two, $new_photos_location_two);
    $update_with_photo_two = "UPDATE product_table SET product_photo_two = '$new_file_name_two' WHERE id = $user_id";
    mysqli_query($db_connect, $update_with_photo_two);
  }

  // code for photo no three
  if (!empty($product_photo_three['name'])) {
    $uploading_image_name = $product_photo_three['name'];
    $afertExplode = explode('.', $uploading_image_name);
    $extention = end($afertExplode);
    $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
    if(!in_array($extention, $allowd_format)){
      echo "This format is not Allowed";
      die;
    }
    $uploading_image_size = $product_photo_three['size'];
    if($uploading_image_size >= 5000000000){
      echo "You can not upload Photo more than 5 MB";
      die;
    }
    $new_file_name = $user_id.'(three)'.'.'.$extention;
    $old_photos_location = $product_photo_three['tmp_name'];
    $new_photos_location = "photos/product_photo/".$new_file_name;
    move_uploaded_file($old_photos_location, $new_photos_location);
    $update_with_photo = "UPDATE product_table SET product_photo_three = '$new_file_name' WHERE id = $user_id";
    mysqli_query($db_connect, $update_with_photo);
  }

  // code for photo no four
  if (!empty($product_photo_four['name'])) {
    $uploading_image_name = $product_photo_four['name'];
    $afertExplode = explode('.', $uploading_image_name);
    $extention = end($afertExplode);
    $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
    if(!in_array($extention, $allowd_format)){
      echo "This format is not Allowed";
      die;
    }
    $uploading_image_size = $product_photo_four['size'];
    if($uploading_image_size >= 5000000000){
      echo "You can not upload Photo more than 5 MB";
      die;
    }
    $new_file_name = $user_id.'(four)'.'.'.$extention;
    $old_photos_location = $product_photo_four['tmp_name'];
    $new_photos_location = "photos/product_photo/".$new_file_name;
    move_uploaded_file($old_photos_location, $new_photos_location);
    $update_with_photo = "UPDATE product_table SET product_photo_four = '$new_file_name' WHERE id = $user_id";
    mysqli_query($db_connect, $update_with_photo);
  }

header('location: all_product_list.php');

?>
