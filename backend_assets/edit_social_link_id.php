<?php
session_start();
require('db.php');
require_once('header.php');

if(empty($_GET['id'])){
  header('location: all_social_link_list.php');
}

$user_id = $_GET['id'];
$select_data_from_db = "SELECT * FROM social_link_table WHERE id= '$user_id'";
$query = mysqli_query($db_connect, $select_data_from_db);
$after_assoc = mysqli_fetch_assoc($query);

?>

       <div class="col-md-12">
         <form action="edit_social_link_id_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
           <h2>Update of<span style="color: green"> Social Link</span></h2><hr>
           <div class="form-group">
             <label>Social Link</label>
             <input type="hidden" value="<?php echo $after_assoc['id']; ?>" name="id">
             <input type="text" value="<?php echo $after_assoc['social_link']; ?>" name="social_link" class="form-control">
           </div>
           <div class="form-group">
             <label>Social Fontawesome Code</label>
             <textarea type="text" value="" name="social_fa_class" class="form-control"><?php echo $after_assoc['social_fa_class']; ?></textarea>
           </div>
           <button type="submit" class="btn btn-info btn-sm">Update</button>
         </form>
       </div>


<?php
  require_once('footer.php');
?>
