<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$user_id = $_GET['id'];

$profile_photo_in_db = "SELECT * FROM testimonial_table WHERE id= $user_id ";
$query = mysqli_query($db_connect, $profile_photo_in_db);
$after_assoc = mysqli_fetch_assoc($query);

?>

<div class="col-lg-12 mt-5">
      <h1>View Testimonial of<span style="color: green"> <?php echo $after_assoc['testimonial_name'] ?></span></h1><hr>
      <div class="row">
        <div class="col-lg-4">
          <div class="">
            <img src="photos/testimonial_photo/<?=$after_assoc['testimonial_photo']?>" alt="img" style="height: 250px; width: 100%;">
          </div>
        </div>
        <div class="col-lg-8">
          <div class="">
            <table class="table table-bordered">
              <tr>
                <td><strong>Name :</strong></td>
                <td><?=$after_assoc['testimonial_name']?></td>
              </tr>
              <tr>
                <td><strong>Designation :</strong></td>
                <td><?=$after_assoc['testimonial_designation']?></td>
              </tr>
              <tr>
                <td><strong>Signature :</strong></td>
                <td><?=$after_assoc['testimonial_signature']?></td>
              </tr>
              <tr>
                <td><strong>Comment :</strong></td>
                <td><?=$after_assoc['testimonial_comment']?></td>
              </tr>
            </table>
            <a href="edit_testimonial_id.php?id=<?=$user_id?>" class="btn btn-sm btn-info">Update of Testimonial</a>
            <a href="all_testimonial_list.php" class="btn btn-sm btn-success">Go to Testimonial List</a>
          </div>
        </div>
      </div>
</div>



<?php
 require_once('footer.php');
?>
