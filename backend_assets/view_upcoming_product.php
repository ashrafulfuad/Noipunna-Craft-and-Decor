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
      <?php
      date_default_timezone_set('Asia/Dhaka');
      $today = new DateTime();
      $end_date = $after_assoc['upcoming_date']." 23:59:59";
      $current_date = $today->format('Y-m-d H:i:s');
      if ($end_date <= $current_date) {
        $sql = "UPDATE upcoming_table SET status= 2 where id='$user_id'";
        $query = mysqli_query($db_connect, $sql);
      }
      ?>
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
            <a href="dashboard.php" class="btn btn-sm btn-info">Dashboard</a>
            <?php
            if ($after_assoc['status'] == 1) {
              ?>
                <a href="active_deactive.php?id=<?=$after_assoc['id']?>" class="btn btn-sm btn-warning">Make Deactive</a>
              <?php
            }else{
              ?>
                <a href="active_deactive.php?id=<?=$after_assoc['id']?>" class="btn btn-sm btn-success">Make Active</a>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
</div>



<?php
 require_once('footer.php');
?>
