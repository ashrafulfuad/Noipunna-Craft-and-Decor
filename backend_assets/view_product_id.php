<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>E-BUY</title>
    <link rel="stylesheet" href="../frontend_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../frontend_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../frontend_assets/css/slick.css">
    <link rel="stylesheet" href="../frontend_assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../frontend_assets/css/jQuery.fancybox.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
    <link rel="stylesheet" href="../frontend_assets/css/style.css">
    <link rel="stylesheet" href="../frontend_assets/css/media.css">
</head>
<body>

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


   <!-- Product Details Part start -->
   <section id="details-of-product">
       <div class="container">
         <h1 class="mb-3">View of <span style="color: blue"><?=$after_assoc['product_name']?></span></h1>
           <div class="row">
               <div class="col-md-6 tahsan2">
                   <div class="xzoom-container">
                      <img class="xzoom" id="xzoom-default" style="width: 450px; height: 400px" src="photos/product_photo/<?=$after_assoc['product_photo_one']?>" xoriginal="images/gallery/original/image1.jpg" alt="" />
                        <div class="xzoom-thumbs">
                        <a href="images/gallery/original/image1.jpg"><img class="xzoom-gallery" style="height:100px; width: 100px" src="photos/product_photo/<?=$after_assoc['product_photo_one']?>"  xpreview="" alt=""></a>
                        <a href="images/gallery/original/image1.jpg"><img class="xzoom-gallery" style="height:100px; width: 100px" src="photos/product_photo/<?=$after_assoc['product_photo_two']?>"  xpreview="" alt=""></a>
                        <a href="images/gallery/original/image2.jpg"><img class="xzoom-gallery" style="height:100px; width: 100px" src="photos/product_photo/<?=$after_assoc['product_photo_three']?>" alt=""></a>
                        <a href="images/gallery/original/image3.jpg"><img class="xzoom-gallery" style="height:100px; width: 100px" src="photos/product_photo/<?=$after_assoc['product_photo_four']?>" alt=""></a>
                      </div>
                    </div>
               </div>
               <div class="details-product-item col-md-6">
                   <div class="product-details">
                       <div>
                          <h3><strong>Product Name   :  </strong><?=$after_assoc['product_name']?></h3>
                          <h3><strong>Product Review   :  </strong>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <span>| (124 Reviews)</span>
                          </h3>
                          <h5><strong>Product Price   :  </strong>TK <?=$after_assoc['product_price']?></h5>
                          <p><strong>Product Descritions   :  </strong><?=$after_assoc['product_desc']?></p>
                       </div>
                   </div>
                   <div class="code-cate">
                       <p>Code<a href="#">: SKY-12345678</a></p>
                       <?php
                        $cat_id = $after_assoc['cat_id'];
                        $select_cat_id_from_db = "SELECT * FROM category_table WHERE id ='$cat_id'";
                        $query_as_cat_id = mysqli_query($db_connect, $select_cat_id_from_db);
                        $after_assoc_as_cat_id = mysqli_fetch_assoc($query_as_cat_id);

                        $p_cat_id = $after_assoc['p_cat_id'];
                        $select_p_cat_id_from_db = "SELECT * FROM p_category_table WHERE id ='$p_cat_id'";
                        $query_as_p_cat_id = mysqli_query($db_connect, $select_p_cat_id_from_db);
                        $after_assoc_as_p_cat_id = mysqli_fetch_assoc($query_as_p_cat_id);
                       ?>
                       <p>Category<a href="#" class="tahsan3">: <?=$after_assoc_as_cat_id['category_name']?></a></p>
                       <p>P.Category<a href="#" class="tahsan3">: <?=$after_assoc_as_p_cat_id['p_category_name']?></a></p>
                       <p>Tags<a href="#" class="tahsan5">: T-shirt, Skirt</a></p>
                   </div>
                   <div class="share">
                    <h6>Share:</h6>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-behance"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <a href="#"><i class="fa fa-pinterest-p"></i></a>
                  </div>
                  <div class="mt-3 pl-2">
                    <a href="all_product_list.php" class="btn btn-sm btn-info">Back to Product List</a>
                  </div>
               </div>
           </div>
       </div>
   </section>
  <!-- product details end -->



  <?php
require('footer.php')
  ?>



    <script src="../frontend_assets/js/jquery-1.12.4.min.js"></script>
    <script src="../frontend_assets/js/bootstrap.min.js"></script>
    <script src="../frontend_assets/js/slick.js"></script>
    <script src="../frontend_assets/js/jquery.countdown.min.js"></script>
    <script src="../frontend_assets/js/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="../frontend_assets/js/jquery.elevatezoom.js"></script>
    <script src="../frontend_assets/js/jquery.fancybox.pack.js"></script>
    <script src="../frontend_assets/js/handleCounter.js"></script>
    <script src="../frontend_assets/js/xzoom.min.js"></script>
    <script src="../frontend_assets/js/setup.js"></script>
    <script src="../frontend_assets/js/jquery.meanmenu.min.js"></script>
    <script src="../frontend_assets/js/main.js"></script>
    <script>
     $(function ($) {
            var options = {
                minimum: 1,
                maximize: 100,
                onChange: valChanged,
                onMinimum: function(e) {
                    console.log('reached minimum: '+e)
                },
                onMaximize: function(e) {
                    console.log('reached maximize'+e)
                }
            }
            $('#handleCounter').handleCounter(options)
            $('#handleCounter2').handleCounter(options)
			$('#handleCounter3').handleCounter({maximize: 100})
        })
        function valChanged(d) {
//            console.log(d)
        }
    </script>
</body>
</html>
