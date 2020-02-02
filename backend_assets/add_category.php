<?php
session_start();
require('db.php');
require_once('header.php');
?>

<div class="col-md-12">
  <form action="add_category_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
    <h2>Add Category</h2><hr>
    <div class="form-group">
      <label>Category Name</label>
      <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name" required>
    </div>
    <button type="submit" class="btn btn-info btn-sm">Add Category</button>
  </form>
</div>

<?php
  require_once('footer.php');
?>
