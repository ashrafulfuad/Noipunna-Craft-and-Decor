<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}


$user_id = $_GET['id'];
$take_data_from_database = "SELECT * FROM banner_table where id=$user_id";
$query = mysqli_query($db_connect, $take_data_from_database);
$after_assoc = mysqli_fetch_assoc($query);

?>

<div class="col-lg-12 mb-3">
      <h1>View of<span style="color: aqua"> Banner Part</span></h1><hr>
      <div class="row">
        <div class="col-lg-6">
          <div class="">
            <img src="photos/banner_photo/<?=$after_assoc['banner_photo']?>" alt="img" style="height: 350px; width: 100%;">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="">
            <table class="table table-bordered table-primary">
              <tr>
                <td><strong>Banner Title :</strong>  <?=$after_assoc['banner_title']?></td>
              </tr>
              <tr>
                <td><strong>Banner Name :</strong>  <?=$after_assoc['banner_name']?></td>
              </tr>
              <tr>
                <td><strong>Banner Details :</strong>  <?=$after_assoc['banner_details']?></td>
              </tr>
            </table>
            <a href="edit_banner_id.php?id=<?=$user_id?>" class="btn btn-sm btn-secondary">Update Banner Part</a>
            <a href="all_banner_list.php" class="btn btn-sm btn-light">Go To Banner List</a>
          </div>
        </div>
      </div>
</div>



<?php
 require_once('footer.php');
?>
