<?php
require('frontend_assets/about_css.php');
require('frontend_assets/header.php');
require_once('backend_assets/db.php');
?>


   <!-- About Banner Start -->
   <?php
   $take_data_from_database = "SELECT * FROM bg_table order by id desc limit 1";
   $query = mysqli_query($db_connect, $take_data_from_database);
   foreach ($query as $value) {
   ?>
   <section id="about" style="background: url('backend_assets/photos/bg_photo/<?=$value['heading_bg']?>'); background-position: center; background-size: cover; background-repeat: no-repeat;">
       <div class="container">
           <div class="row">
               <div class="about-heading text-center">
                   <h2>About us</h2>
                   <p><a href="index.php">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>about</span></p>
               </div>
           </div>
       </div>
   </section>
   <?php
      }
   ?>
   <!-- About Banner End -->

   <!-- About Details Start -->
   <section id="about-details">
       <div class="container">
           <div class="row">
             <?php
             $take_data_from_database = "SELECT * FROM about_table order by id desc limit 1";
             $query = mysqli_query($db_connect, $take_data_from_database);
             foreach ($query as $value) {
             ?>
               <div class="about-details-main">
                   <div class="col-md-7">
                       <div class="about-img">
                           <img src="backend_assets/photos/about_photo/<?=$value['about_photo']?>" alt="about-img" class="img-responsive">
                       </div>
                   </div>
                   <div class="col-md-5">
                       <div class="about-detail">
                           <p><?=$value['about_details']?></p>
                       </div>
                   </div>
               </div>
                <?php
              }
                 ?>
           </div>
       </div>
   </section>
   <!-- About Details End -->

   <!-- Counter Part Start -->
   <section id="counter" class="counter">
        <div class="main_counter_area">
          <?php
          $take_data_from_database = "SELECT * FROM bg_table order by id desc limit 1";
          $query = mysqli_query($db_connect, $take_data_from_database);
          foreach ($query as $value) {
          ?>
            <div class="overlay p-y-3" style="background: url('backend_assets/photos/bg_photo/<?=$value['counter_bg']?>'); background-position: center; background-size: cover; background-repeat: no-repeat;">
              <?php
            }
              ?>
                <div class="container">
                    <div class="row">
                        <div class="main_counter_content text-center white-text wow fadeInUp">
                            <div class="col-md-2">
                                <div class="single_counter p-y-2 m-t-1">
                                    <h2 class="statistic-counter">
                                      <?php
                                      $sql = "SELECT count(*) as total from product_table";
                                      $conn = mysqli_fetch_assoc(mysqli_query($db_connect, $sql));
                                      echo $conn['total'];
                                      ?>
                                    </h2>
                                    <p>total product</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_counter p-y-2 m-t-1">
                                    <h2 class="statistic-counter">
                                      <?php
                                      $sql = "SELECT count(*) as total from likes";
                                      $conn = mysqli_fetch_assoc(mysqli_query($db_connect, $sql));
                                      echo $conn['total'];
                                      ?>
                                    </h2>
                                    <p>total reaction</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single_counter p-y-2 m-t-1">
                                    <h2 class="statistic-counter">999</h2>
                                    <p>happy client</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="single_counter p-y-2 m-t-1">
                                    <h2 class="statistic-counter">369</h2>
                                    <p>total outlets</p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="single_counter p-y-2 m-t-1">
                                    <h2 class="statistic-counter">209</h2>
                                    <p>award win</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- Counter End -->

   <!-- Designer Part Start -->
   <section id="designer">
       <div class="container">
           <div class="row">
               <div class="heading6 text-center">
                   <h2>our member</h2>
               </div>
               <div class="designer-main">
                 <?php
                   $member_list_from_db = "SELECT * FROM member_table order by id desc limit 4";
                   $query = mysqli_query($db_connect, $member_list_from_db);

                     foreach ($query as $value) {
                ?>
                   <div class="col-md-3 col-sm-6">
                       <div class="designer-item">
                           <div class="designer-img">
                               <img style="height:250px; width: 250px" src="backend_assets/photos/member_photo/<?=$value['member_photo']?>" alt="designer1" class="img-responsive">
                               <div class="overlay4 text-center">
                                   <p><a href="<?=$value['member_fb_link']?>"><i class="fa fa-facebook"></i></a></p>
                                   <p><a href="<?=$value['member_gmail_link']?>"><i class="fa fa-google-plus"></i></a></p>
                                   <p><a href="<?=$value['member_another_link']?>"><i class="<?=$value['member_another_fa_class']?>"></i></a></p>
                               </div>
                           </div>
                           <div class="designer-details text-center">
                               <h3><?=$value['member_name']?></h3>
                               <p><?=$value['member_designation']?></p>
                           </div>
                       </div>
                   </div>
                   <?php
                      }
                  ?>
               </div>
           </div>
       </div>
   </section>
   <!-- Designer End -->

   <!-- Brand Start -->
   <section id="brand">
      <i class="fa fa-chevron-left prv-arrow4"></i>
      <i class="fa fa-chevron-right nxt-arrow4"></i>
       <div class="container">
           <div class="row">
               <div class="brand-slider">
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="frontend_assets/images/brand2.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                                <img src="frontend_assets/images/brand1.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="frontend_assets/images/brand3.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="frontend_assets/images/brand4.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="frontend_assets/images/brand5.png" alt="brand" class="img-responsive">
                           </div>
                       </a>
                   </div>
                   <div class="col-md-2">
                       <a href="#">
                           <div class="brand-item">
                               <img src="frontend_assets/images/brand3.png" alt="brand" class="img-responsive">
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
require('frontend_assets/about_js.php');
?>
