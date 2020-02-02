<?php
session_start();
require('db.php');
require_once('header.php');

if(empty($_GET['id'])){
  header('location: view_member_id.php');
}

$user_id = $_GET['id'];
$select_data_from_db = "SELECT * FROM bg_table WHERE id= '$user_id'";
$query = mysqli_query($db_connect, $select_data_from_db);
$after_assoc = mysqli_fetch_assoc($query);

?>

       <div class="col-md-12">
         <form action="edit_background_id_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
           <h2>Update of<span style="color: green"> Background Images</span></h2><hr>
           <div class="row">
             <div class="col-md-6">
               <div class="">
                 <h4>Background of Heading</h4>
               </div>
               <div class="">
                 <img src="photos/bg_photo/<?=$after_assoc['heading_bg']?>" alt="img" style="height: 150px; width: 100%;">
               </div>
               <br>
               <div class="form-group">
                 <label>Heading Background Image</label>
                 <input type="hidden" value="<?php echo $after_assoc['id']; ?>" name="id">
                 <input type="file" value="<?php echo $after_assoc['about_photo']; ?>" name="heading_bg" class="form-control">
               </div>
             </div>
             <div class="col-md-6">
               <div class="">
                 <h4>Background of Counter & Testimonial</h4>
               </div>
               <div class="">
                 <img src="photos/bg_photo/<?=$after_assoc['counter_bg']?>" alt="img" style="height: 150px; width: 100%;">
               </div>
               <br>
               <div class="form-group">
                 <label>Counter Background Image</label>
                 <input type="file" value="<?php echo $after_assoc['about_photo']; ?>" name="counter_bg" class="form-control">
               </div>
             </div>
           </div>
           <button type="submit" class="btn btn-secondary btn-sm">Update Background Photo</button>
         </form>
       </div>


<?php
  require_once('footer.php');
?>
