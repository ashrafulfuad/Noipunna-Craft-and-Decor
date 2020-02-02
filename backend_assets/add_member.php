<?php
session_start();
require('db.php');
require_once('header.php');
?>

<div class="col-md-12">
  <form action="add_member_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
    <h2>Add Our Member</h2><hr>
    <div class="form-group">
      <label>Member Name</label>
      <input type="text" name="member_name" class="form-control" placeholder="Enter Member Name" required>
    </div>
    <div class="form-group">
      <label>Member Designation</label>
      <input type="text" name="member_designation" class="form-control" placeholder="Enter Member Designation" required>
    </div>
    <div class="form-group">
      <label>Member Facebook Link</label>
      <input type="text" name="member_fb_link" class="form-control" placeholder="Enter Facebook Link" required>
    </div>
    <div class="form-group">
      <label>Member Gmail Link</label>
      <input type="text" name="member_gmail_link" class="form-control" placeholder="Enter Gmail Link" required>
    </div>
    <div class="form-group">
      <label>Member Another Link</label>
      <input type="text" name="member_another_link" class="form-control" placeholder="Enter Another Link" required>
    </div>
    <div class="form-group">
      <label>Member Another Fontawesome Class</label>
      <input type="text" name="member_another_fa_class" class="form-control" placeholder="Enter Another Fontawesome Class" required>
    </div>
    <div class="form-group">
      <label>Member Photo</label>
      <input type="file" name="member_photo" class="form-control">
    </div>
    <button type="submit" class="btn btn-success btn-sm">Add Member</button>
  </form>
</div>

<?php
  require_once('footer.php');
?>
