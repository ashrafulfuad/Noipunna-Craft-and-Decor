<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$user_id = $_GET['id'];

$update_data_from_database = "UPDATE client_message_table SET message_status= 2 WHERE id= $user_id ";
$query = mysqli_query($db_connect, $update_data_from_database);

$take_data_from_database = "SELECT * FROM client_message_table WHERE id= $user_id ";
$query = mysqli_query($db_connect, $take_data_from_database);
$after_assoc = mysqli_fetch_assoc($query);

?>

<div class="col-lg-12 mt-5">
      <h1>View Message of <span style="color: green"> <?php echo $after_assoc['client_name'] ?></span></h1><hr>
      <div class="row">
        <div class="col-lg-12">
              <table class="table table-bordered">
                <tr>
                  <td width="200"><strong>Client Name :</strong></td>
                  <td><?=$after_assoc['client_name']?></td>
                </tr>
                <tr>
                  <td><strong>Client E-mail :</strong></td>
                  <td><?=$after_assoc['client_email']?></td>
                </tr>
                <tr>
                  <td><strong>Client Phone :</strong></td>
                  <td><?=$after_assoc['client_phone']?></td>
                </tr>
                <tr>
                  <td><strong>Client Location :</strong></td>
                  <td><?=$after_assoc['client_location']?></td>
                </tr>
              </table>
              <br>
              <table class="table table-bordered">
                <tr>
                  <td><strong>Client Message :</strong></td>
                </tr>
                <tr>
                  <td><?=$after_assoc['client_message']?></td>
                </tr>
              </table>
              <a href="all_message_list.php" class="btn btn-sm btn-success">Go do Message List</a>
        </div>
      </div>
</div>



<?php
 require_once('footer.php');
?>
