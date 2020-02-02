<?php
require('db.php');

$user_id = $_POST['id'];
$location = $_POST['location'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$web = $_POST['web'];
$details = $_POST['details'];

$sql = "UPDATE contact_table SET location='$location', phone='$phone', email='$email', web='$web', details='$details' WHERE id = $user_id";
mysqli_query($db_connect, $sql);

header("location: all_contact_list.php");
?>
