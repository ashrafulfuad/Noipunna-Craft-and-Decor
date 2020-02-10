<?php
session_start();
require('db.php');
require_once('header.php');

if(empty($_GET['id'])){
  header('location: view_member_id.php');
}

$user_id = $_GET['id'];
$select_data_from_db = "SELECT * FROM product_table WHERE id= '$user_id'";
$query = mysqli_query($db_connect, $select_data_from_db);
$after_assoc = mysqli_fetch_assoc($query);

?>

       <div class="col-md-12">
         <form action="edit_product_id_post.php" method="POST" enctype="multipart/form-data" style="padding: 20px;">
           <h2>Update of<span style="color: green"> <?php echo $after_assoc['product_name']; ?></span></h2><hr>
           <div class="form-group">
             <label>Product Name</label>
             <input type="hidden" value="<?php echo $after_assoc['id']; ?>" name="id">
             <input type="text" value="<?php echo $after_assoc['product_name']; ?>" name="product_name" class="form-control">
           </div>
           <div class="form-group">
             <label>Product Price</label>
             <input type="number" value="<?php echo $after_assoc['product_price']; ?>" name="product_price" class="form-control">
           </div>
           <div class="form-group">
             <label>Product Descritions</label>
             <textarea name="product_desc" class="form-control" rows="8" cols="80"><?=$after_assoc['product_desc']?></textarea>
           </div>
           <div class="row">
             <div class="col-md-6">
               <div class="form-group">
                 <label>Product Main Photo</label>
                 <img src="photos/product_photo/<?=$after_assoc['product_photo_one']?>" style="height: 30px; width: 30px" alt="">
                 <input type="file" value="<?php echo $after_assoc['product_photo_one']; ?>" name="product_photo_one" class="form-control">
               </div>
               <div class="form-group">
                 <label>Product Photo Two</label>
                 <img src="photos/product_photo/<?=$after_assoc['product_photo_two']?>" style="height: 30px; width: 30px" alt="">
                 <input type="file" value="<?php echo $after_assoc['product_photo_two']; ?>" name="product_photo_two" class="form-control">
               </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <label>Product Photo Three</label>
                 <img src="photos/product_photo/<?=$after_assoc['product_photo_three']?>" style="height: 30px; width: 30px" alt="">
                 <input type="file" value="<?php echo $after_assoc['product_photo_three']; ?>" name="product_photo_three" class="form-control">
               </div>
               <div class="form-group">
                 <label>Product Photo Four</label>
                 <img src="photos/product_photo/<?=$after_assoc['product_photo_four']?>" style="height: 30px; width: 30px" alt="">
                 <input type="file" value="<?php echo $after_assoc['product_photo_four']; ?>" name="product_photo_four" class="form-control">
               </div>
             </div>
           </div>
          <button type="submit" class="btn btn-purple btn-big btn">Update</button>
          <a href="all_product_list.php" class="btn btn" style="background: #fd7e14; color: #fff">Back to Product List</a>
         </form>
       </div>


<?php
  require_once('footer.php');
?>
