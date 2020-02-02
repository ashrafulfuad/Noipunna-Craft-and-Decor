<?php
session_start();
require('db.php');
require_once('header.php');
?>

<div class="col-md-12">
  <form action="add_product_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
    <h2>Add Product</h2><hr>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Product Name</label>
          <input type="text" name="product_name" class="form-control" placeholder="Enter Product Name" required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Product Price</label>
          <input type="number" name="product_price" class="form-control" placeholder="Enter Product Price" required>
        </div>
      </div>
    </div>

    <?php
    $p_category_list_from_db = "SELECT * FROM p_category_table order by id desc";
    $query = mysqli_query($db_connect, $p_category_list_from_db);
    ?>

    <!--category select-->
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Product Category</label>
          <select name="p_cat_id" class="custom-select" required>
            <option value="">Open this select menu</option>
            <?php
                foreach ($query as $value) {
            ?>
            <option value="<?=$value['id']?>"><?=$value['p_category_name']?></option>
          <?php
              }
          ?>
          </select>
          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div>
      <?php
      $category_list_from_db = "SELECT * FROM category_table order by id desc";
      $query_s = mysqli_query($db_connect, $category_list_from_db);
      ?>
      <div class="col-md-6">
        <div class="form-group">
          <label>Category</label>
          <select name="cat_id" class="custom-select" required>
            <option value="">Open this select menu</option>
            <?php
                  foreach ($query_s as $values) {
             ?>
            <option value="<?=$values['id']?>"><?=$values['category_name']?></option>
            <?php
                }
            ?>
          </select>
          <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label>Product Descritions</label>
      <textarea name="product_desc" rows="2" cols="60" class="form-control"></textarea>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <label>Product Photo Main</label>
          <input type="file" name="product_photo_one" class="form-control">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Product Photo One</label>
          <input type="file" name="product_photo_two" class="form-control">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Product Photo Two</label>
          <input type="file" name="product_photo_three" class="form-control">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label>Product Photo Three</label>
          <input type="file" name="product_photo_four" class="form-control">
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-success btn-sm">Add Product</button>
  </form>
</div>



<?php
  require_once('footer.php');
?>
