<?php
session_start();
require('db.php');
require_once('header.php');
?>

<div class="col-md-12 ">
  <form action="add_contact_post.php" method="POST" enctype="multipart/form-data" style="padding: 30px;">
    <h2>Add Contact as Address</h2><hr>
    <div class="form-group">
      <label>Contact Location</label>
      <input type="text" name="location" class="form-control" placeholder="Enter Location" required>
    </div>
    <div class="form-group">
      <label>Contact Phone</label>
      <input type="number" name="phone" class="form-control" required>
    </div>
    <div class="form-group">
      <label>Contact E-mail</label>
      <input type="email" name="email" class="form-control" placeholder="Enter E-mail" required>
    </div>
    <div class="form-group">
      <label>Contact Website</label>
      <input type="text" name="web" class="form-control" placeholder="Enter Another Web Site" required>
    </div>
    <div class="form-group">
      <label>Contact Details</label>
      <textarea name="details" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-info btn-sm">Add Your Address</button>
  </form>
</div>

<?php
  require_once('footer.php');
?>
