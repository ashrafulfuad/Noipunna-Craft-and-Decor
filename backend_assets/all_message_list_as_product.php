<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$message_list_as_product_from_db = "SELECT * FROM m_as_p order by id desc";
$query = mysqli_query($db_connect, $message_list_as_product_from_db);

?>

              <div class="col-lg-12">
                <table class="table table-bordered" id="member">
                  <h1>All Client Order List as Product</h1><hr>
                  <thead>
                      <tr class="thead-dark">
                      <th scope="col">SL No</th>
                      <th scope="col">Client Name</th>
                      <th scope="col">Client E-mail</th>
                      <th scope="col">Client Phone</th>
                      <th scope="col">Client Location</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      foreach ($query as $key => $value) {
                    ?>

                      <tr class="
                      <?php
                        if ($value['m_as_p_status'] == 1) {
                          ?>table-secondary<?php
                        }
                      ?>
                      ">
                        <th scope="row"><?php echo $key+1 ?></th>
                        <td><?php echo $value['m_as_p_name'] ?></td>
                        <td><?php echo $value['m_as_p_email'] ?></td>
                        <td><?php echo $value['m_as_p_phone'] ?></td>
                        <td><?php echo $value['m_as_p_location'] ?></td>
                        <td>
                          <a href="view_m_as_p_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                          <a href="delete_m_as_p_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a>
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
