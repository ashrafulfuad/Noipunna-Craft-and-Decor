<?php
session_start();
require('db.php');
require_once('header.php');
?>

<div class="col-md-12 ">
  <form action="add_testimonial_post.php" method="POST" enctype="multipart/form-data" style="padding: 30px;">
    <h2>Add Testimonial Section</h2><hr>
    <div class="form-group">
      <label>Clients Name</label>
      <input name="testimonial_name" class="form-control"  required>
    </div>
    <div class="form-group">
      <label>Clients Designation</label>
      <input name="testimonial_designation" class="form-control"  required>
    </div>
    <div class="form-group">
      <label>Clients Signature</label>
      <input name="testimonial_signature" class="form-control"  required>
    </div>
    <div class="form-group">
      <label>Clients Comment</label>
      <textarea name="testimonial_comment" class="form-control"  required></textarea>
    </div>
    <div class="form-group">
      <label>Clients Photo</label>
      <input type="file" name="testimonial_photo" class="form-control">
    </div>
    <button type="submit" class="btn btn-success btn-sm">Add</button>
  </form>
</div>

<?php
  require_once('footer.php');
?>
