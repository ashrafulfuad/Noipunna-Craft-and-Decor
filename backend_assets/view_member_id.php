<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$user_id = $_GET['id'];

$take_data_from_database = "SELECT * FROM member_table WHERE id= $user_id ";
$query = mysqli_query($db_connect, $take_data_from_database);
$after_assoc = mysqli_fetch_assoc($query);

?>

<div class="col-lg-12 mt-5">
      <h1>View Member of<span style="color: green"> <?php echo $after_assoc['member_name'] ?></span></h1><hr>
      <div class="row">
        <div class="col-lg-6">
          <div class="">
            <img src="photos/member_photo/<?=$after_assoc['member_photo']?>" alt="img" style="height: 350px; width: 100%;">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="">
            <table class="table table-bordered table-dark">
              <tr>
                <td>Member Name :</td>
                <td><?=$after_assoc['member_name']?></td>
              </tr>
              <tr>
                <td>Member Designation :</td>
                <td><?=$after_assoc['member_designation']?></td>
              </tr>
              <tr>
                <td>Facebook Link :</td>
                <td><?=$after_assoc['member_fb_link']?></td>
              </tr>
              <tr>
                <td>Gmail Link :</td>
                <td><?=$after_assoc['member_gmail_link']?></td>
              </tr>
              <tr>
                <td>Another Link :</td>
                <td><?=$after_assoc['member_another_link']?></td>
              </tr>
              <tr>
                <td>Fontawesome Class :</td>
                <td><?=$after_assoc['member_another_fa_class']?><br><i class="<?=$after_assoc['member_another_fa_class']?>"></i></td>
              </tr>
            </table>
            <a href="edit_member_id.php?id=<?=$user_id?>" class="btn btn-sm btn-success">Update Member</a>
            <a href="all_member_list.php" class="btn btn-sm btn-info">Go To List</a>
          </div>
        </div>
      </div>
</div>



<?php
 require_once('footer.php');
?>
