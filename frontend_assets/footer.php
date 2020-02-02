<!-- Footer Part Start -->
<section id="footer">
    <div class="footer-bg">
        <div class="container">
            <div class="row">
                <div class="footer-main">

                  <?php
                  $contact_list_from_db = "SELECT * FROM contact_table";
                    $query = mysqli_query($db_connect, $contact_list_from_db);

                      foreach ($query as $value) {
                 ?>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-logo">
                          <?php
                          $logo_photo_list_from_db = "SELECT * FROM about_table";
                            $query = mysqli_query($db_connect, $logo_photo_list_from_db);

                              foreach ($query as $values) {
                         ?>
                            <a href="index.php"><img src="backend_assets/photos/about_photo/<?=$values['logo_photo']?>" style="height:50px; width:50px" alt="footer-logo" class="img-responsive"></a>
                          <?php } ?>
                            <p><?=$value['details']?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="contact">
                         <h2>Contact us</h2>
                            <p><i class="fa fa-map-marker"></i> <a href="#"><?=$value['location']?></a> </p>
                            <p><i class="fa fa-phone"></i> <a href="tel:+12345678900">+88<?=$value['phone']?></a></p>
                            <p><i class="fa fa-envelope"></i> <a href="mailto:info@e-feri.com"><?=$value['email']?></a></p>
                            <p><i class="fa fa-globe"></i> <a href="www.e-feri.com"><?=$value['web']?></a></p>
                        </div>
                    </div>

                    <?php
                        }
                    ?>

                    <div class="col-md-2 col-sm-6">
                        <div class="account">
                           <h2>my account</h2>
                            <a href="my-account.html">my account</a>
                            <a href="shopping-cart.html">wishlist</a>
                            <a href="shopping-cart.html">shopping cart</a>
                            <a href="#">compare</a>
                            <a href="checkout.html">checkout</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="newsletter">
                            <h2>Sign Up For Newsletter</h2>
                                <form>
                                    <div class="input-group">
                                         <input id="1" class="form-control" type="text" name="search" placeholder="Your Mail" required/>
                                         <span class="input-group-btn">
                                         <button class="btn btn-success" type="submit">Submit</button>
                                         </span>
                                    </div>
                                </form>
                            <div class="footer-social">
                                <h3>follow us on</h3>
                                <?php
                                $social_list_from_db = "SELECT * FROM social_link_table order by id desc limit 5";
                                $query = mysqli_query($db_connect, $social_list_from_db);

                                foreach ($query as $value) {
                                  ?>
                                <a href="<?=$value['social_link']?>"><?=$value['social_fa_class']?></a>
                              <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Part End -->

<!-- Footer Bottom Start -->
<section id="footer-btm">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
               <div class="copywright">
                    <p>Copyright &copy; 2017. All right reserved by <a href="index.html">E-BUY</a></p>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="payment text-right">
                    <img src="images/card1.png" alt="card" class="img-responsive">
                    <img src="images/card2.png" alt="card" class="img-responsive">
                    <img src="images/card3.png" alt="card" class="img-responsive">
                    <img src="images/card4.png" alt="card" class="img-responsive">
                    <img src="images/card5.png" alt="card" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Bottom End -->
