<?php
require('db.php');

$user_id = $_GET['id'];

$member_photo_in_db = "SELECT * FROM member_table WHERE id= $user_id ";
$query = mysqli_query($db_connect, $member_photo_in_db);
$after_assoc = mysqli_fetch_assoc($query);
$photo_name = $after_assoc['member_photo'];
$photo_path = "photos/member_photo/".$photo_name;
if ($photo_name != 'member_default_photo.jpg') {
  unlink($photo_path);
}
$delete = "DELETE FROM member_table WHERE id= $user_id";
mysqli_query($db_connect, $delete);
header('location: all_member_list.php');
?>
