<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$contact_list_from_db = "SELECT * FROM contact_table order by id desc";
$query = mysqli_query($db_connect, $contact_list_from_db);

?>

              <div class="col-lg-12">
                <?php
                  foreach ($query as $k => $value) {
                ?>
                <table class="table table-bordered">
                  <h1>Contact View</h1><hr>
                      <tr scope="col">
                        <td width="150"><strong>Contact Location</strong></td>
                        <td><?php echo $value['location'] ?></td>
                      </tr>
                      <tr scope="col">
                        <td><strong>Contact Phone</strong></td>
                        <td>+88<?php echo $value['phone'] ?></td>
                      </tr>
                      <tr scope="col">
                        <td><strong>Contact E-mail</strong></td>
                        <td><?php echo $value['email'] ?></td>
                      </tr>
                      <tr scope="col">
                        <td><strong>Contact Website</strong></td>
                        <td><?php echo $value['web'] ?></td>
                      </tr>
                      <tr scope="col">
                        <td><strong>Contact Details</strong></td>
                        <td><?php echo $value['details'] ?></td>
                      </tr>
                </table>
                <a href="edit_contact_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-warning">Update of Your Address</a>
                <a href="dashboard.php" class="btn btn-sm btn-info">Go to Dashboard</a>
                <?php
                    }
                ?>
              </div>

<?php
 require_once('footer.php');
?>
