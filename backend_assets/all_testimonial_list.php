<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$testimonial_list_from_db = "SELECT * FROM testimonial_table order by id desc";
$query = mysqli_query($db_connect, $testimonial_list_from_db);

?>

              <div class="col-lg-12 ">
                <table class="table table-dark table-bordered" id="testimonial">
                  <h1>All Testimonial List</h1><hr>
                  <thead>
                      <tr>
                      <th scope="col">SL No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Designation</th>
                      <th scope="col">Comment</th>
                      <th scope="col">Photo</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      foreach ($query as $key => $value) {
                        $string = $value['testimonial_comment'];
                    ?>

                      <tr>
                        <th scope="row"><?php echo $key+1 ?></th>
                        <td><?php echo $value['testimonial_name'] ?></td>
                        <td><?php echo $value['testimonial_designation'] ?></td>
                        <td><?php echo substr($string, 0, 20) ?></td>
                        <td><img src="photos/testimonial_photo/<?php echo $value['testimonial_photo'] ?>" height="30" width="40"></td>
                        <td>
                          <a href="view_testimonial_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-primary"><i class="fa icon-eye"></i></a>
                          <a href="delete_testimonial_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-danger"><i class="fa fi-trash"></i></a>
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
  $('#testimonial').DataTable();
} );
</script>
