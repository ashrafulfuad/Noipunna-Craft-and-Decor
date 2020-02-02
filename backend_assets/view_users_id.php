<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$user_id = $_GET['id'];

$profile_photo_in_db = "SELECT * FROM user_table WHERE id= $user_id ";
$query = mysqli_query($db_connect, $profile_photo_in_db);
$after_assoc = mysqli_fetch_assoc($query);

?>

<div class="col-lg-12 mt-5">
      <h1>View Profile of<span style="color: green"> <?php echo $after_assoc['username'] ?></span></h1><hr>
      <div class="row">
        <div class="col-lg-6">
          <div class="">
            <img src="photos/<?=$after_assoc['profile_photo']?>" alt="img" style="height: 350px; width: 100%;">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="">
            <table class="table">
              <tr>
                <td>Name :</td>
                <td><?=$after_assoc['username']?></td>
              </tr>
              <tr>
                <td>E-mail :</td>
                <td><?=$after_assoc['email']?></td>
              </tr>
            </table>
            <a href="all_admin_list.php" class="btn btn-sm btn-secondary">Admin List</a>
          </div>
        </div>
      </div>
</div>



<?php
 require_once('footer.php');
?>
