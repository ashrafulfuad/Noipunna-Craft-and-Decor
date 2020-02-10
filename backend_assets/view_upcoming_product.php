<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}



$take_data_from_database = "SELECT * FROM upcoming_table";
$query = mysqli_query($db_connect, $take_data_from_database);
$after_assoc = mysqli_fetch_assoc($query);
$user_id = $after_assoc['id'];

?>

<div class="col-lg-12 mb-3">
      <h1>View of<span style="color: green"> Upcoming Product</span></h1><hr>
      <div class="row">
        <div class="col-lg-6">
          <div class="">
            <img src="photos/upcoming_photo/<?=$after_assoc['upcoming_photo']?>" alt="img" style="height: 350px; width: 100%;">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="">
            <table class="table table-bordered table-dark">
              <tr>
                <td><strong>Title  :</strong>   <span style="color: yellow"><?=$after_assoc['upcoming_title']?></span></td>
              </tr>
              <tr>
                <td><strong>Description  :</strong>   <?=$after_assoc['upcoming_desc']?></td>
              </tr>
              <tr>
                <td><strong>Date :</strong>  <?=$after_assoc['upcoming_date']?></td>
              </tr>
            </table>
            <a href="edit_upcoming_id.php?id=<?=$user_id?>" class="btn btn-sm btn-secondary">Update Upcoming Product</a>
            <a href="dashboard.php" class="btn btn-sm btn-light">Go To Dashboard</a>
          </div>
        </div>
      </div>
</div>



<?php
 require_once('footer.php');
?>
