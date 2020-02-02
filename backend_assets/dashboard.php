<?php
session_start();
if(!isset($_SESSION['login_ok'])){
    header('location: login.php');
}
require('header.php');
?>

<div class="col-12">
    <h1>You are in your Dashboard</h1>
</div>

<?php
  require('footer.php');
?>
