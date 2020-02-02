<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$p_category_list_from_db = "SELECT * FROM p_category_table order by id desc";
$query = mysqli_query($db_connect, $p_category_list_from_db);

?>

<div class="col-lg-6">
  <table class="table table-dark table-bordered" id="category">
    <h3>Product Category List</h3><hr>
    <thead>
        <tr>
        <th scope="col">SL No</th>
        <th scope="col">Product Category Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

      <?php
        foreach ($query as $key => $value) {
      ?>

        <tr>
          <th scope="row"><?php echo $key+1 ?></th>
          <td><?php echo $value['p_category_name'] ?></td>
          <td>
            <a href="delete_p_category_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-danger"><i class="fa fi-trash"></i></a>
          </td>
        </tr>

      <?php
          }
      ?>

    </tbody>
  </table>
</div>


<?php
$category_list_from_db = "SELECT * FROM category_table order by id desc";
$query = mysqli_query($db_connect, $category_list_from_db);
?>
              <div class="col-lg-6">
                <table class="table table-dark table-bordered" id="member">
                  <h3>Category List</h3><hr>
                  <thead>
                      <tr>
                      <th scope="col">SL No</th>
                      <th scope="col">Category Name</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      foreach ($query as $key => $value) {
                    ?>

                      <tr>
                        <th scope="row"><?php echo $key+1 ?></th>
                        <td><?php echo $value['category_name'] ?></td>
                        <td>
                          <a href="delete_category_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-danger"><i class="fa fi-trash"></i></a>
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
<script type="text/javascript">
$(document).ready(function() {
  $('#category').DataTable();
} );
</script>
