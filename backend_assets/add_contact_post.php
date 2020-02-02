<?php
require_once('db.php');

$location = $_POST['location'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$web = $_POST['web'];
$details = $_POST['details'];

$insert_contact_into_db = "INSERT INTO contact_table (location, phone, email, web, details) VALUES ('$location', '$phone', '$email', '$web', '$details')";
mysqli_query($db_connect, $insert_contact_into_db);

header('location: all_contact_list.php');



?>
