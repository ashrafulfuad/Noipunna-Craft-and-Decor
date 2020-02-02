<?php
session_start();
require('db.php');
require_once('header.php');
?>

<div class="col-md-12">
  <form action="add_banner_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
    <h2>Add Banner</h2><hr>
    <div class="form-group">
      <label>Banner Title</label>
      <input type="text" name="banner_title" class="form-control" placeholder="Enter Banner Title" required>
    </div>
    <div class="form-group">
      <label>Banner Name</label>
      <input type="text" name="banner_name" class="form-control" placeholder="Enter Banner Name" required>
    </div>
    <div class="form-group">
      <label>Banner Details</label>
      <textarea name="banner_details" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label>Banner Photo</label>
      <input type="file" name="banner_photo" class="form-control">
    </div>
    <button type="submit" class="btn btn-success btn-sm">Add Banner</button>
  </form>
</div>

<?php
  require_once('footer.php');
?>
