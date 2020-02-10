<?php
session_start();
require('db.php');

if(!isset($_SESSION['login_ok'])){
  header('location: login.php');
}
require_once('header.php');
?>

      <div class="container" style="margin-bottom: 200px">
        <div class="row">
          <div class="col-md-12">
          <form action="registerpost.php" method="post"   style="padding: 30px; background: rgba(0,0,0,0.2)" enctype="multipart/form-data">
              <h1 style="text-align: center; color: #222">Registration</h1><hr>
              <div class="form-group">
                <label><strong>User Name</strong></label>
                <input type="text" name="username" class="form-control" placeholder="Enter Name" required>
              </div>
              <div class="form-group">
                <label><strong>E-mail</strong></label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
              </div>
              <div class="form-group">
                <label><strong>Password</strong></label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
              </div>
              <div class="form-group">
                <label><strong>Photo</strong></label>
                <input type="file" name="profile_photo" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>
          </div>
        </div>
      </div>

      <?php
        require_once('footer.php');
      ?>
