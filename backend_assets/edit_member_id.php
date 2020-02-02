<?php
session_start();
require('db.php');
require_once('header.php');

if(empty($_GET['id'])){
  header('location: view_member_id.php');
}

$user_id = $_GET['id'];
$select_data_from_db = "SELECT * FROM member_table WHERE id= '$user_id'";
$query = mysqli_query($db_connect, $select_data_from_db);
$after_assoc = mysqli_fetch_assoc($query);

?>

       <div class="col-md-12">
         <form action="edit_member_id_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
           <h2>Update of<span style="color: green"> <?php echo $after_assoc['member_name']; ?></span></h2><hr>
           <div class="form-group">
             <label>Member Name</label>
             <input type="hidden" value="<?php echo $after_assoc['id']; ?>" name="id">
             <input type="text" value="<?php echo $after_assoc['member_name']; ?>" name="member_name" class="form-control">
           </div>
           <div class="form-group">
             <label>Member Designation</label>
             <input type="text" value="<?php echo $after_assoc['member_designation']; ?>" name="member_designation" class="form-control">
           </div>
           <div class="form-group">
             <label>Member Facebook Link</label>
             <input type="text" value="<?php echo $after_assoc['member_fb_link']; ?>" name="member_fb_link" class="form-control">
           </div>
           <div class="form-group">
             <label>Member Gmail Link</label>
             <input type="text" value="<?php echo $after_assoc['member_gmail_link']; ?>" name="member_gmail_link" class="form-control">
           </div>
           <div class="form-group">
             <label>Member Another Link</label>
             <input type="text" value="<?php echo $after_assoc['member_another_link']; ?>" name="member_another_link" class="form-control">
           </div>
           <div class="form-group">
             <label>Member Another Fontawesome Class</label>
             <input type="text" value="<?php echo $after_assoc['member_another_fa_class']; ?>" name="member_another_fa_class" class="form-control">
           </div>
           <div class="form-group">
             <label>Member Photo</label>
             <input type="file" value="<?php echo $after_assoc['member_photo']; ?>" name="member_photo" class="form-control">
           </div>
           <button type="submit" class="btn btn-info btn-sm">Update</button>
         </form>
       </div>


<?php
  require_once('footer.php');
?>
