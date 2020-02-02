<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}



$take_data_from_database = "SELECT * FROM bg_table";
$query = mysqli_query($db_connect, $take_data_from_database);
$after_assoc = mysqli_fetch_assoc($query);
$user_id = $after_assoc['id'];

?>

<div class="col-lg-12 mb-3">
      <h1>View of<span style="color: green"> Background Photo Part</span></h1><hr>
      <div class="row">
        <div class="col-lg-6">
          <div class="">
            <h4>Background of Heading</h4>
          </div>
          <div class="">
            <img src="photos/bg_photo/<?=$after_assoc['heading_bg']?>" alt="img" style="height: 250px; width: 100%;">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="">
            <h4>Background of Counter & Testimonial</h4>
          </div>
          <div class="">
            <img src="photos/bg_photo/<?=$after_assoc['counter_bg']?>" alt="img" style="height: 250px; width: 100%;">
          </div>
        </div>
      </div>
      <br>
      <a href="edit_background_id.php?id=<?=$user_id?>" class="btn btn-sm btn-dark">Update About Part</a>
      <a href="dashboard.php" class="btn btn-sm btn-info">Go To Dashboard</a>
</div>



<?php
 require_once('footer.php');
?>
