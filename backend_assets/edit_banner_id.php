<?php
session_start();
require('db.php');
require_once('header.php');

if(empty($_GET['id'])){
  header('location: view_member_id.php');
}

$user_id = $_GET['id'];
$select_data_from_db = "SELECT * FROM banner_table WHERE id= '$user_id'";
$query = mysqli_query($db_connect, $select_data_from_db);
$after_assoc = mysqli_fetch_assoc($query);

?>

       <div class="col-md-12">
         <form action="edit_banner_id_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
           <h2>Update of Banner</h2><hr>
           <div class="form-group">
             <label>Banner Title</label>
             <input type="hidden" value="<?php echo $after_assoc['id']; ?>" name="id">
             <input type="text" value="<?php echo $after_assoc['banner_title']; ?>" name="banner_title" class="form-control">
           </div>
           <div class="form-group">
             <label>Banner Name</label>
             <input type="text" value="<?php echo $after_assoc['banner_name']; ?>" name="banner_name" class="form-control">
           </div>
           <div class="form-group">
             <label>Banner Details</label>
             <textarea name="banner_details" class="form-control" rows="8" cols="80"><?php echo $after_assoc['banner_details']; ?></textarea>
           </div>
           <div class="form-group">
             <label>Banner Photo</label>
             <input type="file" value="<?php echo $after_assoc['banner_photo']; ?>" name="banner_photo" class="form-control">
           </div>
           <button type="submit" class="btn btn-info btn-sm">Update Banner</button>
         </form>
       </div>


<?php
  require_once('footer.php');
?>
