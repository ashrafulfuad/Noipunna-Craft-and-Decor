<?php
session_start();
if(empty($_GET['id'])){
  header('location: index.php');
}
require('frontend_assets/details_css.php');
require('frontend_assets/header.php');
require_once('backend_assets/db.php');


?>


   <!-- About Banner Start -->
   <?php
   $take_data_from_database = "SELECT * FROM bg_table order by id desc limit 1";
   $query = mysqli_query($db_connect, $take_data_from_database);
   foreach ($query as $value) {
   ?>
   <section id="about"  style="background: url('backend_assets/photos/bg_photo/<?=$value['heading_bg']?>'); background-position: center; background-size: cover; background-repeat: no-repeat;">
     <?php
   }
     ?>
       <div class="container">
           <div class="row">
               <div class="about-heading text-center">
                   <h2>Product Details</h2>
                   <p><a href="index.php">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Product Details</span></p>
               </div>
           </div>
       </div>
   </section>
   <!-- About Banner End -->

    <?php
        $user_id = $_GET['id'];
        $select_data_from_db = "SELECT * FROM product_table WHERE id= '$user_id'";
        $query = mysqli_query($db_connect, $select_data_from_db);
        $after_assoc = mysqli_fetch_assoc($query);

        $ip_address = get_client_ip();
        if (isset($_POST['liked'])) {
            $postid = $_POST['postid'];
            $product = "SELECT * FROM product_table WHERE id='$postid'";
            $result = mysqli_query($db_connect, $product);
            $row = mysqli_fetch_array($result);
            $n = $row['likes'];
            $likes_check = "SELECT * FROM likes WHERE ip_address='$ip_address' AND product_id='$postid'";
            $likes_check = mysqli_query($db_connect, $likes_check);
            if(mysqli_num_rows($likes_check) > 0) {
                $n = $n - 1;
                mysqli_query($db_connect, "DELETE FROM likes WHERE product_id='$postid' AND ip_address='$ip_address'");
                mysqli_query($db_connect, "UPDATE product_table SET likes='$n' WHERE id=$postid");
            } else {
                $n = $n + 1;
                $likes_query = "INSERT INTO likes (ip_address, product_id) VALUES ('$ip_address', '$postid')";
                mysqli_query($db_connect, $likes_query);
                mysqli_query($db_connect, "UPDATE product_table SET likes='$n' WHERE id='$postid'");
            }
            exit();
        }
        if (isset($_POST['unliked'])) {
            $postid = $_POST['postid'];
            $product = "SELECT * FROM product_table WHERE id='$postid'";
            $result = mysqli_query($db_connect, $product);
            $row = mysqli_fetch_array($result);
            $n = $row['likes'];

            $likes_check = "SELECT * FROM likes WHERE ip_address='$ip_address' AND product_id='$postid'";
            $likes_check = mysqli_query($db_connect, $likes_check);
            if(mysqli_num_rows($likes_check) > 0) {
                $n = $n - 1;
                mysqli_query($db_connect, "DELETE FROM likes WHERE product_id='$postid' AND ip_address='$ip_address'");
                mysqli_query($db_connect, "UPDATE product_table SET likes='$n' WHERE id=$postid");
            } else {
                $n = $n + 1;
                $likes_query = "INSERT INTO likes (ip_address, product_id) VALUES ('$ip_address', '$postid')";
                mysqli_query($db_connect, $likes_query);
                mysqli_query($db_connect, "UPDATE product_table SET likes='$n' WHERE id='$postid'");
            }
            exit();
        }

    ?>
   <!-- Product Details Part start -->
   <section id="details-of-product">
       <div class="container">
           <div class="row">
               <div class="col-md-6 tahsan2">
                 <div class="xzoom-container">
                    <img class="xzoom" id="xzoom-default" style="width: 450px; height: 400px" src="backend_assets/photos/product_photo/<?=$after_assoc['product_photo_one']?>" xoriginal="images/gallery/original/image1.jpg" alt="" />
                      <div class="xzoom-thumbs">
                      <a href="images/gallery/original/image1.jpg"><img class="xzoom-gallery" style="height:100px; width: 100px" src="backend_assets/photos/product_photo/<?=$after_assoc['product_photo_one']?>"  xpreview="" alt=""></a>
                      <a href="images/gallery/original/image1.jpg"><img class="xzoom-gallery" style="height:100px; width: 100px" src="backend_assets/photos/product_photo/<?=$after_assoc['product_photo_two']?>"  xpreview="" alt=""></a>
                      <a href="images/gallery/original/image2.jpg"><img class="xzoom-gallery" style="height:100px; width: 100px" src="backend_assets/photos/product_photo/<?=$after_assoc['product_photo_three']?>" alt=""></a>
                      <a href="images/gallery/original/image3.jpg"><img class="xzoom-gallery" style="height:100px; width: 100px" src="backend_assets/photos/product_photo/<?=$after_assoc['product_photo_four']?>" alt=""></a>
                    </div>
                  </div>
               </div>
               <div class="details-product-item col-md-6">
                   <div class="product-details">
                       <div>
                          <h3><?=$after_assoc['product_name']?></h3>
                          <!-- //fuad -->
                          <h4>
                              <i class="fa fa-heart"  style="color: red"></i>
                              | (<span id="auto_load" value="<?=$_GET['id']?>"><?= $after_assoc['likes']?></span> People's Reacted)
                          </h4>
                          <h5>TK <?=$after_assoc['product_price']?></h5>
                          <p><?=substr($after_assoc['product_desc'], 0, 300)?></p>
                       </div>
                   </div>
                   <div class="quantity">

                       <div class="handle-counter" id="handleCounter">
                       <div class="quan-head">
                          <h3>Quantity :</h3>
                      </div>
                        <div class="input">
                            <input type="text" value="1">
                        </div>
                        <div class="click">
                            <button class="counter-plus btn btn-primary">+</button>
                            <button class="counter-minus btn btn-primary">-</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                   </div>
                   <div class="add-wishlist">
                     <?php
                     $likes = "SELECT * FROM likes WHERE ip_address = '$ip_address' AND product_id='" . $after_assoc['id'] . "'";
                     $results = mysqli_query($db_connect, $likes);

                     if (mysqli_num_rows($results) == 1):
                     ?>
                         <!-- user already liked -->
                         <i class="like fa fa-heart sss" data-id="<?= $after_assoc['id'] ?>" style="color: blue"></i>
                         <i class="unlike hide fa fa-heart-o" data-id="<?= $after_assoc['id'] ?>"></i>
                     <?php
                     else :
                     ?>
                         <!-- user not liked yet -->
                         <i class="like fa fa-heart-o" data-id="<?= $after_assoc['id'] ?>"></i>
                         <i class="unlike hide fa fa-heart" data-id="<?= $after_assoc['id'] ?>" style="color: blue"></i>
                     <?php
                     endif;
                     ?>

                       <a href="#"><i class="fa fa-random"></i></a>
                       <a href="#"><i class="fa fa-shopping-basket"></i></a>
                   </div>
                   <div class="code-cate">
                       <?php
                       $p_cat_id = $after_assoc['p_cat_id'];
                       $select_p_cat_id_from_db = "SELECT * FROM p_category_table WHERE id ='$p_cat_id'";
                       $query_as_p_cat_id = mysqli_query($db_connect, $select_p_cat_id_from_db);
                       $after_assoc_as_p_cat_id = mysqli_fetch_assoc($query_as_p_cat_id);
                       ?>
                       <p>Category<a href="#" class="tahsan3">: <?=$after_assoc_as_p_cat_id['p_category_name']?></a></p>
                   </div>
               </div>
           </div>
       </div>
   </section>
  <!-- product details end -->

<!-- Product Discription Part start -->
   <section id="discription">
       <div class="container">
           <div class="">
               <div class="">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                     <li><a href="#">|</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <p><?=$after_assoc['product_desc']?></p>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile"><?=$after_assoc['product_desc']?></div>
                </div>
               </div>
           </div>
       </div>
   </section>
   <!-- product discription end -->

   <!-- form as products start -->
   <section id="m_as_p">
     <div class="container ">
       <div class="row" style="border: 1px solid #222; padding-bottom: 30px; margin-top:20px">
         <div class="col-md-12 mt-5">
           <form action="backend_assets/m_as_p_post.php" method="post" enctype="multipart/form-data">
             <h3>Order as Product</h3><hr>
             <?php
                 if(isset($_SESSION['message_as_p_sent'])){
                   ?>
                   <div class="alert alert-success" role="alert">
                     Your ORDER has sent Successfully!
                   </div>
                   <?php
                 }
                   unset($_SESSION['message_as_p_sent']);
             ?>
             <?php
             $m_as_p_id = $_GET['id'];
             $select_data_from_db = "SELECT * FROM product_table WHERE id= '$m_as_p_id'";
             $query = mysqli_query($db_connect, $select_data_from_db);
             $after_assoc_as_p = mysqli_fetch_assoc($query);
             ?>
             <div class="col-md-6 pl0 col-sm-12">
               <label>Your Name</label>
                 <div class="form-group">
                     <input value="<?php echo $after_assoc_as_p['id'] ?>" name="m_as_p_id" type="hidden" class="form-control">
                     <input type="text" class="form-control" name="m_as_p_name" placeholder="Name" style="color:#222" required>
                 </div>
             </div>
             <div class="col-md-6 col-sm-12">
               <label>Your E-mail</label>
                 <div class="form-group">
                     <input type="email" class="form-control" name="m_as_p_email" placeholder="Email" style="color:#222" required>
                 </div>
             </div>
             <div class="col-md-6 pl0 col-sm-12">
               <label>Your Phone</label>
                 <div class="form-group">
                     <input type="number" class="form-control" name="m_as_p_phone" placeholder="Phone" style="color:#222" >
                 </div>
             </div>
             <div class="col-md-6 col-sm-12">
               <label>Your Location</label>
                 <div class="form-group">
                     <input type="text" class="form-control" name="m_as_p_location" placeholder="Location" style="color:#222" required>
                 </div>
             </div>
             <div class="col-md-12 col-sm-12">
               <label>Your Photo as Order</label>
                 <div class="form-group">
                     <input type="file" class="form-control" name="m_as_p_photo" style="color:#222" required>
                 </div>
             </div>
             <div class="col-md-12 pl0">
               <label>Your Message</label>
               <div class="form-group mb-1">
                   <textarea class="form-control" name="m_as_p_message" placeholder="Message as Your Order Descriptions" rows="7" style="color:#222" ></textarea>
               </div>
               <button type="submit" class="btn btn-block btn-lg btn-info"><i class="fa fa-paper-plane"></i> </button>
             </div>
           </form>
         </div>
       </div>
     </div>
   </section>
   <!-- form as products end -->

   <!-- Latest Part Start -->
   <section id="latest">
      <i class="fa fa-chevron-left prv-arrow2"></i>
      <i class="fa fa-chevron-right nxt-arrow2"></i>
       <div class="container">
           <div class="row">
               <div class="latest-main">
                    <div class="heading2 text-center">
                       <h2>latest Products</h2>
                   </div>
                   <div class="latest-item">

                     <?php
                     $product_list_from_db = "SELECT * FROM product_table";
                     $query = mysqli_query($db_connect, $product_list_from_db);

                     foreach ($query as $value) {
                       ?>
                       <div class="gallery_product col-md-3">
                            <div class="featured-product">
                                <a href="product_details.php?id=<?=$value['id']?>">
                                    <img src="backend_assets/photos/product_photo/<?=$value['product_photo_one']?>" alt="featured-product-img" class="img-responsive" style="height:280px; width:100%">
                                </a>
                                <div class="overlay2 text-center">
                                    <?php
                                    $likes = "SELECT * FROM likes WHERE ip_address = '$ip_address' AND product_id='" . $value['id'] . "'";

                                    $results = mysqli_query($db_connect, $likes);

                                    //fuad
                                    if (mysqli_num_rows($results) == 1) :


                                    ?>
                                        <!-- user already liked -->
                                        <i class="like fa fa-heart sss" data-id="<?= $value['id'] ?>" style="color: blue"></i>
                                        <i class="unlike hide fa fa-heart-o" data-id="<?= $value['id'] ?>"></i>
                                    <?php
                                    else :
                                    ?>
                                        <!-- user not liked yet -->
                                        <i class="like fa fa-heart-o" data-id="<?= $value['id'] ?>"></i>
                                        <i class="unlike hide fa fa-heart" data-id="<?= $value['id'] ?>" style="color: blue"></i>
                                    <?php
                                    endif;
                                    ?>
                                    <a href="#"><i class="fa fa-random"></i></a>
                                    <a href="#"><i class="fa fa-shopping-basket"></i></a>
                                </div>
                            </div>
                            <div class="feat-details">
                                <p><?=$value['product_name']?></p><span>TK <?=$value['product_price']?></span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ratings">
                              <i class="fa fa-heart"  style="color: red"></i>
                              <span>| (<?= $value['likes']?> People's Reacted)</span>
                            </div>
                        </div>
                        <?php
                            }
                         ?>

                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Latest Part End -->

   <!-- Brand Part Start -->
   <section id="brand">
      <i class="fa fa-chevron-left prv-arrow4"></i>
      <i class="fa fa-chevron-right nxt-arrow4"></i>
       <div class="container">
           <div class="row">
               <div class="brand-slider">
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand2.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand1.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand3.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand4.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand5.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="images/brand3.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- Brand End -->



   <?php
   require('frontend_assets/footer.php');
   function get_client_ip()
   {
       $ipaddress = '';
       if (getenv('HTTP_CLIENT_IP'))
           $ipaddress = getenv('HTTP_CLIENT_IP');
       else if (getenv('HTTP_X_FORWARDED_FOR'))
           $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
       else if (getenv('HTTP_X_FORWARDED'))
           $ipaddress = getenv('HTTP_X_FORWARDED');
       else if (getenv('HTTP_FORWARDED_FOR'))
           $ipaddress = getenv('HTTP_FORWARDED_FOR');
       else if (getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
       else if (getenv('REMOTE_ADDR'))
           $ipaddress = getenv('REMOTE_ADDR');
       else
           $ipaddress = 'UNKNOWN';
       return $ipaddress;
   }
   ?>






   <?php
   require('frontend_assets/details_js.php');
   ?>


   <script type="text/javascript">
       (function($) {
           "use strict";

           $('.like').on('click', function() {
               var postid = $(this).data('id');
               var This = $(this);


               $.ajax({
                   url: 'product_details.php',
                   type: 'post',
                   data: {
                       'liked': 1,
                       'postid': postid
                   },
                   success: function(response) {
                       // console.log(response);
                       This.addClass('hide').addClass('s_like');
                       This.siblings().removeClass('hide');
                   }
               });
           });

           // when the user clicks on unlike
           $('.unlike').on('click', function() {
               var postid = $(this).data('id');
               var This = $(this);

               $.ajax({
                   url: 'product_details.php',
                   type: 'post',
                   data: {
                       'unliked': 1,
                       'postid': postid
                   },
                   success: function(response) {
                       // console.log(response);
                       This.addClass('hide');
                       This.siblings().removeClass('hide');
                   }
               });
           });






        setInterval(function () {
          var id = $('#auto_load span').innerHTML;

          alert(id);
          // console.log(id);

 				// $('#auto_load').load('demo.php?id='+ )


 			}, 3000);


       })(jQuery);

   </script>



 </body>
 </html>
