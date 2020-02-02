<?php
session_start();
require('db.php');
require_once('header.php');
?>

<div class="col-md-12">
  <form action="add_p_category_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
    <h2>Add Product Category</h2><hr>
    <div class="form-group">
      <label>Category Product Name</label>
      <input type="text" name="p_category_name" class="form-control" placeholder="Enter Product Category Name" required>
    </div>
    <button type="submit" class="btn btn-info btn-sm">Add Category</button>
  </form>
</div>

<?php
  require_once('footer.php');
?>
