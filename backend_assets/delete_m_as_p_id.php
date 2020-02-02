<?php
require('db.php');

$user_id = $_GET['id'];

$m_as_p_photo_in_db = "SELECT * FROM m_as_p WHERE id= $user_id ";
$query = mysqli_query($db_connect, $m_as_p_photo_in_db);
$after_assoc = mysqli_fetch_assoc($query);
$photo_name = $after_assoc['m_as_p_photo'];
$photo_path = "photos/m_as_p_photo/".$photo_name;
if ($photo_name != 'defaults_m_as_p_photo.jpg') {
  unlink($photo_path);
}
$delete = "DELETE FROM m_as_p WHERE id= $user_id";
mysqli_query($db_connect, $delete);
header('location: all_message_list_as_product.php');
?>
