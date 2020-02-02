<?php
session_start();
require('db.php');
require_once('header.php');
?>

<div class="col-md-12">
  <form action="add_social_link_post.php" method="POST" style="padding: 20px;">
    <h2>Add Social One</h2><hr>
    <div class="form-group">
      <label>Social Link</label>
      <input type="text" name="social_link" class="form-control" placeholder="Enter Social Link" required>
    </div>
    <div class="form-group">
      <label>Social Fontawesome Code</label>
      <input type="text" name="social_fa_class" class="form-control" placeholder="Enter Social Fontawesome Class" required>
    </div>
    <button type="submit" class="btn btn-success btn-sm">Add Social Link</button>
  </form>
</div>

<?php
  require_once('footer.php');
?>
