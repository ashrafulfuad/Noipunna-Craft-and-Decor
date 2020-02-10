<?php
session_start();
require('db.php');
require_once('header.php');

if(empty($_GET['id'])){
  header('location: view_upcoming_product.php');
}

$user_id = $_GET['id'];
$select_data_from_db = "SELECT * FROM upcoming_table WHERE id= '$user_id'";
$query = mysqli_query($db_connect, $select_data_from_db);
$after_assoc = mysqli_fetch_assoc($query);

?>

       <div class="col-md-12">
         <form action="edit_upcoming_id_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
           <h2>Update of Upcoming Product Called <span style="color: green"> <?php echo $after_assoc['upcoming_title']; ?></span></h2><hr>
           <div class="form-group">
             <label>Title</label>
             <input type="hidden" value="<?php echo $after_assoc['id']; ?>" name="id">
             <input type="text" value="<?php echo $after_assoc['upcoming_title']; ?>" name="upcoming_title" class="form-control">
           </div>
           <div class="form-group">
             <label>Descriptions</label>
             <textarea name="upcoming_desc" class="form-control"><?=$after_assoc['upcoming_desc']?></textarea>
           </div>
           <div class="form-group">
             <label>Upcomig Date</label>
             <input type="date" value="<?php echo $after_assoc['upcoming_date']; ?>" name="upcoming_date" class="form-control">
           </div>
           <div class="form-group">
             <label>Member Photo</label>
             <input type="file" value="<?php echo $after_assoc['upcoming_photo']; ?>" name="upcoming_photo" class="form-control">
           </div>
           <button type="submit" class="btn btn-info btn-sm">Update</button>
         </form>
       </div>


<?php
  require_once('footer.php');
?>
