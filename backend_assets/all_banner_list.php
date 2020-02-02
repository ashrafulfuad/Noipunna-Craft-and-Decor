<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$banner_list_from_db = "SELECT * FROM banner_table order by id desc";
$query = mysqli_query($db_connect, $banner_list_from_db);

?>

              <div class="col-lg-12 ">
                <table class="table table-dark table-bordered" id="member">
                  <h1>All Banner List</h1><hr>
                  <thead>
                      <tr>
                      <th scope="col">SL No</th>
                      <th scope="col">Banner Title</th>
                      <th scope="col">Banner Name</th>
                      <th scope="col">Banner Details</th>
                      <th scope="col">Banner Photo</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      foreach ($query as $key => $value) {
                        $string = $value['banner_details'];
                    ?>
                      <tr>
                        <th scope="row"><?php echo $key+1 ?></th>
                        <td><?php echo $value['banner_title'] ?></td>
                        <td><?php echo $value['banner_name'] ?></td>
                        <td><?php echo substr($string, 0, 20) ?></td>
                        <td><img src="photos/banner_photo/<?php echo $value['banner_photo'] ?>" height="30" width="40"></td>
                        <td>
                          <a href="view_banner_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                          <a href="delete_banner_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
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
