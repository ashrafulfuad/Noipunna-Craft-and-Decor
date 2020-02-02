<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$social_link_list_from_db = "SELECT * FROM social_link_table order by id desc";
$query = mysqli_query($db_connect, $social_link_list_from_db);

?>

              <div class="col-lg-12 ">
                <table class="table table-dark table-bordered" id="member">
                  <h1>All Social Link List</h1><hr>
                  <thead>
                      <tr>
                      <th scope="col">SL No</th>
                      <th scope="col">Social Links</th>
                      <th scope="col">Fontawesome</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      foreach ($query as $key => $value) {
                    ?>

                      <tr>
                        <th scope="row"><?php echo $key+1 ?></th>
                        <td><a href="<?php echo $value['social_link'] ?>"><?=substr($value['social_link'], 0, 20)?></a></td>
                        <td style="font-size: 20px"><?php echo $value['social_fa_class'] ?></td>
                        <td>
                          <a href="edit_social_link_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                          <a href="delete_social_link_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
