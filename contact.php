<?php
session_start();
require('frontend_assets/contact_css.php');
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
                   <h2>Contact</h2>
                   <p><a href="index.php">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>contact</span></p>
               </div>
           </div>
       </div>
   </section>
<!-- About Banner End -->

<!-- Contact part Start -->
<section id="account">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="contact">
                   <form action="backend_assets/add_client_message_post.php" method="POST">
                    <h3>Send us a Message</h3>
                    <?php
                        if(isset($_SESSION['message_sent'])){
                          ?>
                          <div class="alert alert-success" role="alert">
                            Your message has sent Successfully!
                          </div>
                          <?php
                        }
                          unset($_SESSION['message_sent']);
                    ?>
                    <div class="col-md-6 pl0 col-sm-6">
                        <div class="form-group" >
                            <input type="text" class="form-control" id="name" name="client_name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 email">
                        <div class="form-group">
                            <input type="email" class="form-control" name="client_email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="col-md-6 pl0 col-sm-6">
                        <div class="form-group">
                            <input type="number" class="form-control" name="client_phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 location">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name223" name="client_location" placeholder="Location" required>
                        </div>
                    </div>
                    <div class="col-md-12 pl0">
                      <div class="form-group mb-1">
                          <textarea class="form-control" id="message" name="client_message" placeholder="Message"  rows="7"></textarea>
                      </div>
                      <button type="submit" class="btn btn-block btn-lg btn-info"><i class="fa fa-paper-plane"></i> </button>
                    </div>
                    </form>
                </div>
            </div>
            <?php
            $contact_list_from_db = "SELECT * FROM contact_table";
              $query = mysqli_query($db_connect, $contact_list_from_db);

                foreach ($query as $value) {
           ?>
            <div class="col-md-4">
                <div class="contact-us">
                    <h3>Contact with us</h3>
                    <p><?php echo $value['details']; ?></p>
                    <p><i class="fa fa-map-marker"></i> <a href="#"><?php echo $value['location']; ?></a></p>
                    <p><i class="fa fa-phone"></i><a href="">+88<?php echo $value['phone']; ?></a></p>
                    <p><i class="fa fa-envelope"></i><a href=""><?php echo $value['email']; ?></a></p>
                    <p><i class="fa fa-globe"></i> <a href="" target="_blank"><?php echo $value['web']; ?></a> </p>
                </div>
            </div>
          <?php
            }
          ?>
        </div>
    </div>
</section>
<!-- contact part End -->

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
require('frontend_assets/contact_js.php');
?>
