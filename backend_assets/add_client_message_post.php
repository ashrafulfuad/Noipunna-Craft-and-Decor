<?php
session_start();
echo "<pre>";
print_r($_POST);
echo "</pre>";


require_once('db.php');

$client_name = $_POST['client_name'];
$client_email = $_POST['client_email'];
$client_phone = $_POST['client_phone'];
$client_location = $_POST['client_location'];
$client_message = $_POST['client_message'];

$insert_member = "INSERT INTO client_message_table
(client_name, client_email, client_phone, client_location, client_message)
 VALUES ('$client_name', '$client_email', '$client_phone', '$client_location', '$client_message')";
mysqli_query($db_connect, $insert_member);
$_SESSION['message_sent'] = 'yes';
header('location: ../contact.php#account');

?>
