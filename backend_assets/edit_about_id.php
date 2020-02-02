<?php
session_start();
require('db.php');
require_once('header.php');

if(empty($_GET['id'])){
  header('location: view_member_id.php');
}

$user_id = $_GET['id'];
$select_data_from_db = "SELECT * FROM about_table WHERE id= '$user_id'";
$query = mysqli_query($db_connect, $select_data_from_db);
$after_assoc = mysqli_fetch_assoc($query);

?>

       <div class="col-md-12">
         <form action="edit_about_id_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
           <h2>Update of<span style="color: green"> About Part</span></h2><hr>
           <div class="form-group">
             <label>About Datails</label>
             <input type="hidden" value="<?php echo $after_assoc['id']; ?>" name="id">
             <textarea class="form-control" rows="10" name="about_details"><?php echo $after_assoc['about_details']; ?></textarea>
           </div>
           <div class="form-group">
             <label>About Photo</label>
             <input type="file" value="<?php echo $after_assoc['about_photo']; ?>" name="about_photo" class="form-control">
           </div>
           <div class="form-group">
             <label>Logo Photo</label>
             <input type="file" value="<?php echo $after_assoc['logo_photo']; ?>" name="logo_photo" class="form-control">
           </div>
           <button type="submit" class="btn btn-secondary btn-sm">Update About Part</button>
         </form>
       </div>


<?php
  require_once('footer.php');
?>
