<?php
session_start();
require('db.php');
require_once('header.php');

if(empty($_GET['id'])){
  header('location: all_testimonial_list.php');
}

$user_id = $_GET['id'];
$select_data_from_db = "SELECT * FROM testimonial_table WHERE id= '$user_id'";
$query = mysqli_query($db_connect, $select_data_from_db);
$after_assoc = mysqli_fetch_assoc($query);

?>

       <div class="col-md-12">
         <form action="edit_testimonial_id_post.php" method="POST" enctype="multipart/form-data" style="padding: 30px;">
           <h2 style="text-aligh: center">Update of<span style="color: green"> <?php echo $after_assoc['testimonial_name']; ?></span></h2><hr>
           <div class="form-group">
             <label>Clients Name</label>
             <input type="hidden" value="<?php echo $after_assoc['id']; ?>" name="id">
             <input type="text" value="<?php echo $after_assoc['testimonial_name']; ?>" name="testimonial_name" class="form-control">
           </div>
           <div class="form-group">
             <label>Clients Designation</label>
             <input type="text" value="<?php echo $after_assoc['testimonial_designation']; ?>" name="testimonial_designation" class="form-control">
           </div>
           <div class="form-group">
             <label>Clients Signature</label>
             <input type="text" value="<?php echo $after_assoc['testimonial_signature']; ?>" name="testimonial_signature" class="form-control">
           </div>
           <div class="form-group">
             <label>Clients Comments</label>
             <textarea name="testimonial_comment" class="form-control"><?php echo $after_assoc['testimonial_comment']; ?></textarea>
           </div>
           <div class="form-group">
             <label>Clients Photo</label>
             <input type="file" value="<?php echo $after_assoc['testimonial_photo']; ?>" name="testimonial_photo" class="form-control">
           </div>
           <button type="submit" class="btn btn-info btn-sm">Edit</button>
         </form>
       </div>


<?php
  require_once('footer.php');
?>
