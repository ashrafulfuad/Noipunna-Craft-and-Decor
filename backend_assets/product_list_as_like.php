<?php
session_start();
require_once('db.php');
require_once('header.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}

$product_list_from_db = "SELECT * FROM product_table order by id desc";
$query = mysqli_query($db_connect, $product_list_from_db);

?>

              <div class="col-lg-12 ">
                <table class="table table-dark table-bordered" id="member">
                  <h1>Product List as Reacted</h1><hr>
                  <thead>
                      <tr>
                      <th scope="col">SL No</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Product Price</th>
                      <th scope="col">Product Photo</th>
                      <th scope="col">Total React's</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      foreach ($query as $key => $value) {
                        if ($value['likes'] > 0) {
                    ?>

                      <tr>
                        <th scope="row"><?php echo $key+1 ?></th>
                        <td><?php echo $value['product_name'] ?></td>
                        <td><?php echo $value['product_price'] ?>/=</td>
                        <td><img src="photos/product_photo/<?php echo $value['product_photo_one'] ?>" height="30" width="40"></td>
                        <td><?php echo $value['likes'] ?>   <i class="fa fa-heart" style="color:#de4644;"></i></td>
                        <td><a href="view_product_id.php?id=<?= $value['id']?>" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a></td>
                      </tr>

                    <?php
                        }
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
