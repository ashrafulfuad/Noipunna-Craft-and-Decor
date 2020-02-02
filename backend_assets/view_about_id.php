<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}



$take_data_from_database = "SELECT * FROM about_table";
$query = mysqli_query($db_connect, $take_data_from_database);
$after_assoc = mysqli_fetch_assoc($query);
$user_id = $after_assoc['id'];

?>

<div class="col-lg-12 mb-3">
      <h1>View of<span style="color: blue"> About Part</span></h1><hr>
      <div class="row">
        <div class="col-lg-6">
          <div class="">
            <img src="photos/about_photo/<?=$after_assoc['about_photo']?>" alt="img" style="height: 350px; width: 100%;">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="">
            <table class="table table-bordered table-success">
              <tr>
                <td><strong>Logo Photo :</strong>  <img src="photos/about_photo/<?=$after_assoc['logo_photo']?>" height="50" width="50"></td>
              </tr>
              <tr>
              </tr>
              <tr>
                <td><strong>About Details :</strong>  <?=$after_assoc['about_details']?></td>
              </tr>
            </table>
            <a href="edit_about_id.php?id=<?=$user_id?>" class="btn btn-sm btn-secondary">Update About Part</a>
            <a href="dashboard.php" class="btn btn-sm btn-light">Go To Dashboard</a>
          </div>
        </div>
      </div>
</div>



<?php
 require_once('footer.php');
?>
