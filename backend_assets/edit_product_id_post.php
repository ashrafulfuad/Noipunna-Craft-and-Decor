<?php

require('db.php');

$user_id = $_POST['id'];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];
$product_photo_one = $_FILES['product_photo_one'];
$product_photo_two = $_FILES['product_photo_two'];
$product_photo_three = $_FILES['product_photo_three'];
$product_photo_four = $_FILES['product_photo_four'];

$sql = "UPDATE product_table SET product_name='$product_name', product_price='$product_price', product_desc='$product_desc' WHERE id = $user_id";

if (mysqli_query($db_connect, $sql)) {
  $calling_all_from_db = "SELECT * FROM product_table WHERE id= $user_id ";
  $query = mysqli_query($db_connect, $calling_all_from_db);
  $after_assoc = mysqli_fetch_assoc($query);

// for product photo one
  if ($product_photo_one['name'] != '') {
    if ($after_assoc['product_photo_one'] != 'default_p_photo.jpg') {
      if($product_photo_one['name'] != ''){
        $photo_path = "photos/product_photo/".$after_assoc['product_photo_one'];
        unlink($photo_path);
      }
    }
    $uploading_image_name = $product_photo_one['name'];
    $afertExplode = explode('.', $uploading_image_name);
    $extention = end($afertExplode);
    $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
    if(!in_array($extention, $allowd_format)){
      echo "This format is not Allowed";
      die;
    }
    $uploading_image_size = $product_photo_one['size'];
    if($uploading_image_size >= 500000){
      echo "You can not upload Photo more than 5 MB";
      die;
    }
    $new_file_name = $user_id.'(one)-edited'.'.'.$extention;
    $old_photos_location = $product_photo_one['tmp_name'];
    $new_photos_location = "photos/product_photo/".$new_file_name;
    move_uploaded_file($old_photos_location, $new_photos_location);
    $insert_with_photo = "UPDATE product_table SET product_photo_one = '$new_file_name' WHERE id = $user_id";
    mysqli_query($db_connect, $insert_with_photo);
  }

  // for product photo two
    if ($product_photo_two['name'] != '') {
      if ($after_assoc['product_photo_two'] != 'default_p_photo.jpg') {
        if($product_photo_two['name'] != ''){
          $photo_path = "photos/product_photo/".$after_assoc['product_photo_two'];
          unlink($photo_path);
        }
      }
      $uploading_image_name = $product_photo_two['name'];
      $afertExplode = explode('.', $uploading_image_name);
      $extention = end($afertExplode);
      $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
      if(!in_array($extention, $allowd_format)){
        echo "This format is not Allowed";
        die;
      }
      $uploading_image_size = $product_photo_two['size'];
      if($uploading_image_size >= 500000){
        echo "You can not upload Photo more than 5 MB";
        die;
      }
      $new_file_name = $user_id.'(two)-edited'.'.'.$extention;
      $old_photos_location = $product_photo_two['tmp_name'];
      $new_photos_location = "photos/product_photo/".$new_file_name;
      move_uploaded_file($old_photos_location, $new_photos_location);
      $insert_with_photo = "UPDATE product_table SET product_photo_two = '$new_file_name' WHERE id = $user_id";
      mysqli_query($db_connect, $insert_with_photo);
    }

    // for product photo three
      if ($product_photo_three['name'] != '') {
        if ($after_assoc['product_photo_three'] != 'default_p_photo.jpg') {
          if($product_photo_three['name'] != ''){
            $photo_path = "photos/product_photo/".$after_assoc['product_photo_three'];
            unlink($photo_path);
          }
        }
        $uploading_image_name = $product_photo_three['name'];
        $afertExplode = explode('.', $uploading_image_name);
        $extention = end($afertExplode);
        $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
        if(!in_array($extention, $allowd_format)){
          echo "This format is not Allowed";
          die;
        }
        $uploading_image_size = $product_photo_three['size'];
        if($uploading_image_size >= 500000){
          echo "You can not upload Photo more than 5 MB";
          die;
        }
        $new_file_name = $user_id.'(three)-edited'.'.'.$extention;
        $old_photos_location = $product_photo_three['tmp_name'];
        $new_photos_location = "photos/product_photo/".$new_file_name;
        move_uploaded_file($old_photos_location, $new_photos_location);
        $insert_with_photo = "UPDATE product_table SET product_photo_three = '$new_file_name' WHERE id = $user_id";
        mysqli_query($db_connect, $insert_with_photo);
      }

      // for product photo four
        if ($product_photo_four['name'] != '') {
          if ($after_assoc['product_photo_four'] != 'default_p_photo.jpg') {
            if($product_photo_four['name'] != ''){
              $photo_path = "photos/product_photo/".$after_assoc['product_photo_four'];
              unlink($photo_path);
            }
          }
          $uploading_image_name = $product_photo_four['name'];
          $afertExplode = explode('.', $uploading_image_name);
          $extention = end($afertExplode);
          $allowd_format = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');
          if(!in_array($extention, $allowd_format)){
            echo "This format is not Allowed";
            die;
          }
          $uploading_image_size = $product_photo_four['size'];
          if($uploading_image_size >= 500000){
            echo "You can not upload Photo more than 5 MB";
            die;
          }
          $new_file_name = $user_id.'(four)-edited'.'.'.$extention;
          $old_photos_location = $product_photo_four['tmp_name'];
          $new_photos_location = "photos/product_photo/".$new_file_name;
          move_uploaded_file($old_photos_location, $new_photos_location);
          $insert_with_photo = "UPDATE product_table SET product_photo_four = '$new_file_name' WHERE id = $user_id";
          mysqli_query($db_connect, $insert_with_photo);
        }

  header("location: all_product_list.php");
}else {
  echo "Not Updated";
}

?>
