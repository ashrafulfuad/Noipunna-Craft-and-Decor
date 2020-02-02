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

  $update_data_from_database = "UPDATE m_as_p SET m_as_p_status= 2 WHERE id= $user_id ";
  $query = mysqli_query($db_connect, $update_data_from_database);

  $select_data_from_db = "SELECT * FROM m_as_p WHERE id= '$user_id'";
  $query = mysqli_query($db_connect, $select_data_from_db);
  $after_assoc = mysqli_fetch_assoc($query);

  ?>


   <!-- Product Details Part start -->
   <section id="details-of-product" class="col-md-12" style="padding-top: 0px">
       <div class="container">
         <h1 class="mb-3">View of <span style="color: blue"><?=$after_assoc['m_as_p_name']?>s </span>Order</h1>
           <div class="row">
               <div class="col-md-6 tahsan2 pr-5">
                   <div class="xzoom-container">
                      <img class="xzoom" id="xzoom-default" style="width: 450px; height: 400px" src="photos/m_as_p_photo/<?=$after_assoc['m_as_p_photo']?>" xoriginal="images/gallery/original/image1.jpg" alt="" />
                    </div>
               </div>
               <div class="details-product-item col-md-6 pl-5">
                   <div class="product-details">
                       <div>
                         <table class="table table-bordered">
                           <tr>
                             <td><h3><strong>Client Name   :  </strong></h3></td>
                             <td><h3><?=$after_assoc['m_as_p_name']?></h3></td>
                           </tr>
                           <tr>
                             <td><h3><strong>Client E-mail    :  </strong></h3></td>
                             <td><h3><?=$after_assoc['m_as_p_email']?></h3></td>
                           </tr>
                           <tr>
                             <td><h3><strong>Client Phone    :  </strong></h3></td>
                             <td><h3><?=$after_assoc['m_as_p_phone']?></h3></td>
                           </tr>
                           <tr>
                             <td><h3><strong>Client Location    :  </strong></h3></td>
                             <td><h3><?=$after_assoc['m_as_p_location']?></h3></td>
                           </tr>
                           <?php
                           $product_id = $after_assoc['m_as_p_id'];
                           $select_product_id_from_db = "SELECT * FROM product_table WHERE id ='$product_id'";
                           $query_as_prodcut_id = mysqli_query($db_connect, $select_product_id_from_db);
                           $after_assoc_as_product_id = mysqli_fetch_assoc($query_as_prodcut_id);
                           ?>
                           <tr>
                             <td><h3><strong>Product Name    :  </strong></h3></td>
                             <td><h3><?=$after_assoc_as_product_id['product_name']?></h3></td>
                           </tr>
                           <?php
                           $p_cat_id_in_pro_table = $after_assoc_as_product_id['p_cat_id'];
                           $select_p_cat_id_in_pro_table_from_db = "SELECT * FROM p_category_table WHERE id ='$p_cat_id_in_pro_table'";
                           $query_as_p_cat_table = mysqli_query($db_connect, $select_p_cat_id_in_pro_table_from_db);
                           $after_assoc_as_p_cat_id = mysqli_fetch_assoc($query_as_p_cat_table);
                           ?>
                           <tr>
                             <td><h3><strong>Category Name    :  </strong></h3></td>
                             <td><h3><?=$after_assoc_as_p_cat_id['p_category_name']?></h3></td>
                           </tr>
                           <tr>
                             <td><h3><strong>Product Photo    :  </strong></h3></td>
                             <td><img src="photos/product_photo/<?=$after_assoc_as_product_id['product_photo_one']?>" style="height:50px; width: 50px;" alt=""></td>
                           </tr>
                         </table>
                       </div>
                   </div>
                  <div class="mt-3 pl-2">
                    <a href="all_message_list_as_product.php" class="btn btn-sm btn-info">Back to Order List</a>
                  </div>
               </div>
               <div class="col-md-12 mt-4" style="border: 1px solid #222">
                 <h5 style="font-family: 'Raleway'"><strong>Client Message as Order  : </strong><?=$after_assoc['m_as_p_message']?></h5>
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
