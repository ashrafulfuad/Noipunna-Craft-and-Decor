<?php
session_start();
require('db.php');
require_once('header.php');

if(empty($_GET['id'])){
  header('location: all_contact_list.php');
}

$user_id = $_GET['id'];
$select_data_from_db = "SELECT * FROM contact_table WHERE id= '$user_id'";
$query = mysqli_query($db_connect, $select_data_from_db);
$after_assoc = mysqli_fetch_assoc($query);

?>

       <div class="col-md-12 ">
         <form action="edit_contact_id_post.php" method="POST" enctype="multipart/form-data" style="padding: 30px;">
           <h2>Update of Your Contact Form</h2><hr>
           <div class="form-group">
             <label>Contact Location</label>
             <input type="hidden" value="<?php echo $after_assoc['id']; ?>" name="id">
             <input type="text" value="<?php echo $after_assoc['location']; ?>" name="location" class="form-control">
           </div>
           <div class="form-group">
             <label>Contact Phone</label>
             <input type="text" value="<?php echo $after_assoc['phone']; ?>" name="phone" class="form-control">
           </div>
           <div class="form-group">
             <label>Contact E-mail</label>
             <input type="text" value="<?php echo $after_assoc['email']; ?>" name="email" class="form-control">
           </div>
           <div class="form-group">
             <label>Contact Website</label>
             <input type="text" value="<?php echo $after_assoc['web']; ?>" name="web" class="form-control">
           </div>
           <div class="form-group">
             <label>Contact Details</label>
             <textarea name="details" class="form-control"><?php echo $after_assoc['details']; ?></textarea>
           </div>
           <button type="submit" class="btn btn-info btn-sm">Update</button>
         </form>
       </div>


<?php
  require_once('footer.php');
?>
