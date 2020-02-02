<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$member_list_from_db = "SELECT * FROM member_table order by id desc";
$query = mysqli_query($db_connect, $member_list_from_db);

?>

              <div class="col-lg-12 ">
                <table class="table table-dark table-bordered" id="member">
                  <h1>All Member List</h1><hr>
                  <thead>
                      <tr>
                      <th scope="col">SL No</th>
                      <th scope="col">Member Name</th>
                      <th scope="col">Member Designation</th>
                      <th scope="col">Member Photo</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      foreach ($query as $key => $value) {
                    ?>

                      <tr>
                        <th scope="row"><?php echo $key+1 ?></th>
                        <td><?php echo $value['member_name'] ?></td>
                        <td><?php echo $value['member_designation'] ?></td>
                        <td><img src="photos/member_photo/<?php echo $value['member_photo'] ?>" height="30" width="40"></td>
                        <td>
                          <a href="view_member_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-info">View</a>
                          <a href="delete_member_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                      </tr>

                    <?php
                        }
                    ?>

                  </tbody>
                </table>
              </div>

<?php
 require_once('footer.php');
?>

<script type="text/javascript">
$(document).ready(function() {
  $('#member').DataTable();
} );
</script>
