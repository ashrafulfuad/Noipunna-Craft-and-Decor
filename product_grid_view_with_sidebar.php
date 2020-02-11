<?php
session_start();

require('frontend_assets/product_grid_view_with_sidebar_css.php');
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
                   <h2>Product Grid View With Sidebar</h2>
                   <p><a href="index.html">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Product Grid View With Sidebar</span></p>
               </div>
           </div>
       </div>
   </section>
   <!-- About Banner End -->

   <!-- Product-item start -->
   <section id="product-grid-sidebar">
       <div class="container">
           <div class="row">
               <div class="col-md-3">
                   <div class="single category">
                        <h3 class="side-title">Category</h3>
                        <ul class="list-unstyled">
                            <?php
                                $sql = "SELECT * from p_category_table order by id desc";
                                $query = mysqli_query($db_connect, $sql);
                                foreach ($query as $key => $val) {
                            ?>
                            <li><a href="product_grid_view_with_sidebar.php?id=<?=$val['id']?>" title=""><?=$val['p_category_name']?><span class="pull-right">158</span></a></li>
                            <?php
                                }
                            ?>
                        </ul>
                   </div>
               </div>
               <div class="col-md-9">
                  <div class="pro-grid-sidebar col-md-12">
                       <div class="col-md-2 col-sm-4">
                           <div class="grid-type">
                                <div class="btn-group">
                                   <a href="product-grid-view.html" id="grid" class="btn btn-default btn-sm"><span
                                    class="glyphicon glyphicon-th"></span></a>
                                    <a href="product-list-view-with-sidebar.html" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                                    </span></a>
                                </div>
                            </div>
                       </div>
                       <div class="col-md-4 col-sm-8">
                           <div class="sort text-right">
                               <label>Showing</label>
                               <select>
                                   <option value="Name">12</option>
                                   <option value="brand">18</option>
                                   <option value="price">24</option>
                               </select>
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-12">
                           <div class="pages text-right">
                               <ul class="pagination">
                                  <li class=""><a href="#">Pages:</a></li>
                                  <li class="active"><a href="#">01 <span class="sr-only">(current)</span></a></li>
                                  <li><a href="#">02</a></li>
                                  <li><a href="#">03</a></li>
                                  <li><a href="#">04</a></li>
                                  <li class="of"><a href="#">of</a></li>
                                  <li><a href="#">50</a></li>
                                  <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                           </div>
                       </div>
                   </div>
                   <div class="latest-main">
                       <div class="product-grid-item">
                         <?php
                         if (!empty($_GET['id'])) {
                           die;
                         $p_category_id = $_GET['id'];
                         $product_list_from_db = "SELECT * FROM product_table order by id desc";
                         $query = mysqli_query($db_connect, $product_list_from_db);
                         foreach ($query as $value) {
                           if ($p_category_id == $value['p_cat_id']) {
                           ?>
                            <div class="gallery_product col-md-4 col-sm-4">
                                <div class="featured-product">
                                    <a href="product_details.php?id=<?=$value['id']?>"><img src="backend_assets/photos/product_photo/<?=$value['product_photo_one']?>" alt="featured-product-img" class="img-responsive"style="height:260px; width: 100%"></a>
                                    <div class="overlay2 text-center">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                        <a href="#"><i class="fa fa-random"></i></a>
                                        <a href="#"><i class="fa fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="feat-details feat-details2">
                                    <p><?=$value['product_name']?></p><span>TK <?=$value['product_price']?></span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                </div>
                            </div>
                            <?php
                                  }
                                }
                              }else{
                              $product_list_from_db = "SELECT * FROM product_table order by id desc";
                              $query = mysqli_query($db_connect, $product_list_from_db);
                              foreach ($query as $value) {
                             ?>
                             <div class="gallery_product col-md-4 col-sm-4">
                                 <div class="featured-product">
                                     <a href="product_details.php?id=<?=$value['id']?>"><img src="backend_assets/photos/product_photo/<?=$value['product_photo_one']?>" alt="featured-product-img" class="img-responsive"style="height:260px; width: 100%"></a>
                                     <div class="overlay2 text-center">
                                         <a href="#"><i class="fa fa-heart"></i></a>
                                         <a href="#"><i class="fa fa-random"></i></a>
                                         <a href="#"><i class="fa fa-shopping-basket"></i></a>
                                     </div>
                                 </div>
                                 <div class="feat-details feat-details2">
                                     <p><?=$value['product_name']?></p><span>TK <?=$value['product_price']?></span>
                                     <div class="clearfix"></div>
                                 </div>
                                 <div class="ratings">
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star-half"></i>
                                 </div>
                             </div>
                            <?php
                                }
                              }
                            ?>
                       </div>
                   </div>
                   <div class="clearfix"></div>
                   <div class="pages-bottom">
                       <div class="pages pages2 text-center">
                           <ul class="pagination">
                              <li class=""><a href="#">Pages:</a></li>
                              <li class="active"><a href="#">01 <span class="sr-only">(current)</span></a></li>
                              <li><a href="#">02</a></li>
                              <li><a href="#">03</a></li>
                              <li><a href="#">04</a></li>
                              <li class="of"><a href="#">of</a></li>
                              <li><a href="#">50</a></li>
                              <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                            </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
  <!-- Product-item end -->




   <?php
   require('frontend_assets/footer.php');
   require('frontend_assets/product_grid_view_with_sidebar_js.php');
   ?>
