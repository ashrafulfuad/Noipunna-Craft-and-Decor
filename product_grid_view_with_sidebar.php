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
                   <!-- <div class="single category brand-name">
                    <h3 class="side-title">Brand Name</h3>
                        <ul>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">Nokia</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">Samsung</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">Apple</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox5" type="checkbox">
                                    <label for="checkbox5">Blackberry</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">HTC</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7">Symphony</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8">Walton</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox9" type="checkbox">
                                    <label for="checkbox9">Micromax</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox10" type="checkbox">
                                    <label for="checkbox10">Maximus</label>
                                </div>
                            </li>
                        </ul>
                   </div>
                   <div class="single category price-range">
                        <h3 class="side-title price-title">Filter By Price</h3>
                        <div id="slider"></div>
                   </div>
                   <div class="single category brand-name">
                    <h3 class="side-title">Filter By Color</h3>
                        <ul>
                            <li>
                                <div class="checkbox chek2 checkbox-success">
                                    <input id="checkbox11" type="checkbox">
                                    <label for="checkbox11">Orange</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox chek3 checkbox-success">
                                    <input id="checkbox12" type="checkbox">
                                    <label for="checkbox12">Red</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox chek4 checkbox-success">
                                    <input id="checkbox13" type="checkbox">
                                    <label for="checkbox13">Blue</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox chek5 checkbox-success">
                                    <input id="checkbox14" type="checkbox">
                                    <label for="checkbox14">Green</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox chek6 checkbox-success">
                                    <input id="checkbox15" type="checkbox">
                                    <label for="checkbox15">black</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox chek7 checkbox-success">
                                    <input id="checkbox16" type="checkbox">
                                    <label for="checkbox16">Pink</label>
                                </div>
                            </li>
                        </ul>
                   </div>
                   <div class="single category brand-name tahsan12">
                    <h3 class="side-title">filter by size</h3>
                        <ul>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox17" type="checkbox">
                                    <label for="checkbox17">All Sizes</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox18" type="checkbox">
                                    <label for="checkbox18">Extra large</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox19" type="checkbox">
                                    <label for="checkbox19">Large</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox20" type="checkbox">
                                    <label for="checkbox20">medium</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox21" type="checkbox">
                                    <label for="checkbox21">small</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox22" type="checkbox">
                                    <label for="checkbox22">XXL</label>
                                </div>
                            </li>
                        </ul>
                   </div> -->
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




  <!-- <label>Sort by</label>
  <select>
    <option>Name</option>
    <option>Price</option>
    <option>Id</option>
  </select> -->






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

   <!-- Brand Part Start -->
   <section id="brand">
      <i class="fa fa-chevron-left prv-arrow4"></i>
      <i class="fa fa-chevron-right nxt-arrow4"></i>
       <div class="container">
           <div class="row">
               <div class="brand-slider">
                   <div class="col-md-2">
                       <div class="brand-item">
                           <a href="#"><img src="images/brand2.png" alt="brand" class="img-responsive"></a>
                       </div>
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
   require('frontend_assets/product_grid_view_with_sidebar_js.php');
   ?>
