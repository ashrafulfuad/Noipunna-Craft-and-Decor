<?php
require('frontend_assets/index_css.php');
require('frontend_assets/header.php');
require_once('backend_assets/db.php');
?>

<!-- Banner Part Start -->
<section id="banner">
    <i class="fa fa-chevron-left prv-arrow"></i>
    <i class="fa fa-chevron-right nxt-arrow"></i>
    <div class="banner-slider">
        <?php
        $banner_list_from_db = "SELECT * FROM banner_table";
        $query = mysqli_query($db_connect, $banner_list_from_db);

        foreach ($query as $value) {
        ?>
            <div class="banner-img" style="background: url('backend_assets/photos/banner_photo/<?= $value['banner_photo'] ?>') no-repeat center; background-size: cover; height: 530px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="banner-content">
                                <h1 style="font-size:50px"><?= $value['banner_title'] ?></h1>
                                <h2 style="font-size:25px"><?= $value['banner_name'] ?></h2>
                                <p><?= $value['banner_details'] ?></p>
                                <a href="#service">View More</a>
                                <a class="pur" href="#latest">Purchase</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>
<!-- Banner Part End -->

<!-- Service Part Start -->
<!-- <section id="service">
       <div class="container">
           <div class="row">
               <div class="service-main">
                   <div class="col-md-4">
                       <div class="service-item text-center">
                           <h3><i class="fa fa-truck rotat"></i> Free Shipping</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                       </div>
                   </div>
                   <div class="col-md-4 service-mid">
                       <div class="service-item text-center">
                           <h3><i class="fa fa-support"></i> 24/7 Support</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                       </div>
                   </div>
                   <div class="col-md-4">
                       <div class="service-item text-center">
                           <h3><i class="fa fa-money"></i> Cashback</h3>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section> -->
<!-- Service Part End -->

<!-- Newest Part Start -->
<section id="newest">
    <div class="container">
        <div class="row">
            <div class="newest-main">
                <?php
                $select_data_from_db = "SELECT * FROM product_table where cat_id = 3  order by id desc limit 1";
                $query = mysqli_query($db_connect, $select_data_from_db);

                foreach ($query as $men) {

                ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="newest-item">
                            <img src="backend_assets/photos/product_photo/<?= $men['product_photo_one'] ?>" alt="newest1" class="img-responsive" style="height: 300px; width:100%">
                            <div class="overlay1 text-center">
                                <h2>new</h2>
                                <h3><?= $men['product_name'] ?></h3>
                                <a href="product_details.php?id=<?= $men['id'] ?>">shop now</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                $select_data_from_db = "SELECT * FROM product_table where cat_id = 4  order by id desc limit 1";
                $query = mysqli_query($db_connect, $select_data_from_db);

                foreach ($query as $women) {
                ?>

                    <div class="col-md-4 col-sm-4">
                        <div class="newest-item">
                            <img src="backend_assets/photos/product_photo/<?= $women['product_photo_one'] ?>" alt="newest1" class="img-responsive" style="height: 300px; width:100%">
                            <div class="overlay1 text-center">
                                <h2>sell</h2>
                                <h3><?= $women['product_name'] ?></h3>
                                <a href="product_details.php?id=<?= $women['id'] ?>">shop now</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                $select_data_from_db = "SELECT * FROM product_table where cat_id = 6  order by id desc limit 1";
                $query = mysqli_query($db_connect, $select_data_from_db);

                foreach ($query as $acce) {
                ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="newest-item">
                            <img src="backend_assets/photos/product_photo/<?= $acce['product_photo_one'] ?>" alt="newest1" class="img-responsive" style="height: 300px; width:100%">
                            <div class="overlay1 text-center">
                                <h2>best</h2>
                                <h3><?= $acce['product_name'] ?></h3>
                                <a href="product_details.php?id=<?= $acce['id'] ?>">shop now</a>
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
<!-- Newest Part End -->

<!-- Featured Part Start -->
<section id="featured">
    <div class="container">
        <div class="row">
            <div class="featured-main">
                <div class="heading text-center">
                    <h2>featured Products</h2>
                </div>
                <div class="featured-filter">
                    <div class="text-center">
                        <button class="btn btn-default active filter-button" data-filter="all">All</button>
                        <?php
                        $select_data_from_db = "SELECT * FROM category_table";
                        $query = mysqli_query($db_connect, $select_data_from_db);

                        foreach ($query as $val) {
                        ?>
                            <button class="btn btn-default filter-button" data-filter="<?= $val['id'] ?>"><?= $val['category_name'] ?></button>
                        <?php
                        }
                        $for_filter = $val['id'];
                        ?>
                    </div>

                    <?php
                    $product_list_from_db = "SELECT * FROM product_table";
                    $query = mysqli_query($db_connect, $product_list_from_db);

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

                    foreach ($query as $value) {
                        $id = '';
                    ?>
                        <div class="gallery_product col-md-3 col-sm-4 filter <?= $value['cat_id'] ?>">
                            <div class="featured-product">
                                <a href="product_details.php?id=<?= $value['id'] ?>">
                                  <img src="backend_assets/photos/product_photo/<?= $value['product_photo_one'] ?>" alt="featured-product-img" class="img-responsive" style="height:280px; width: 100%">
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
                                <p><?= $value['product_name'] ?></p><span>TK <?= $value['product_price'] ?></span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ratings" id="like_count">
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
<!-- Featured Part End -->

<!-- Upcoming Part Start -->
<section id="upcoming">
    <div class="upcoming-bg">
        <div class="container">
            <div class="row">
                <div class="upcoming-main">
                    <div class="col-md-6">
                        <div class="upcoming-product-img">
                            <img src="images/macbook.png" alt="macbook" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="upcoming-prouct-details">
                            <h3>New Product</h3>
                            <h2>Microsoft Surface Pro</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                              Loremsum has been the industry's standard dummy text ever since the 1500s,
                              when an unknown printer took a galley of type and scrambled it to make a
                               type specimen book. It hasived not only five centuries, with the release of
                                Letraset sheets.</p>
                        </div>
                        <div class="luanch">
                            <h2>launch in</h2>
                            <div class="coundown_res">
                                <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="day"></h2>
                                            <p>days</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="hour"></h2>
                                            <p>hours</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="month"></h2>
                                            <p>mins</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="count-item text-center">
                                    <div class="coun">
                                        <div class="coun_time">
                                            <h2 id="second"></h2>
                                            <p>sec</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Upcoming Part End -->

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

                    foreach ($query as $value) {
                    ?>
                        <div class="gallery_product col-md-3">
                            <div class="featured-product">
                                <a href="product_details.php?id=<?= $value['id'] ?>">
                                    <img src="backend_assets/photos/product_photo/<?= $value['product_photo_one'] ?>" alt="featured-product-img" class="img-responsive" style="height:280px; width:100%">
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
                                <p><?= $value['product_name'] ?></p><span>TK <?= $value['product_price'] ?></span>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ratings" id="review">
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

<!-- Testimonial Part Start -->
<section id="testimonial">
    <div class="heading3 text-center">
        <h2>testimonial</h2>
    </div>
    <?php
    $take_data_from_database = "SELECT * FROM bg_table order by id desc limit 1";
    $query = mysqli_query($db_connect, $take_data_from_database);
    foreach ($query as $value) {
    ?>
        <div class="testimonial-bg" style="background: url('backend_assets/photos/bg_photo/<?= $value['counter_bg'] ?>'); background-position: center; background-size: cover; background-repeat: no-repeat;">
        <?php
    }
        ?>
        <i class="fa fa-chevron-left prv-arrow3"></i>
        <i class="fa fa-chevron-right nxt-arrow3"></i>
        <div class="container">
            <div class="row">
                <div class="testimonial-main">

                    <?php
                    $testimonial_list_from_db = "SELECT * FROM testimonial_table";
                    $query = mysqli_query($db_connect, $testimonial_list_from_db);

                    foreach ($query as $value) {
                    ?>

                        <div class="col-md-6">
                            <div class="testimonial-item">
                                <div class="col-md-3 test-img">
                                    <img style="height:70px; width:70px;" src="backend_assets/photos/testimonial_photo/<?= $value['testimonial_photo'] ?>" alt="testimonial-img" class="img-responsive">
                                </div>
                                <div class="col-md-9 test-details">
                                    <h2><?= $value['testimonial_name'] ?></h2>
                                    <h3><?= $value['testimonial_designation'] ?></h3>
                                    <p><?= $value['testimonial_comment'] ?></p>
                                    <h4><?= $value['testimonial_signature'] ?></h4>
                                </div>
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
<!-- Testimonial Part End -->


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
require('frontend_assets/index_js.php');
?>

<script type="text/javascript">
    (function($) {
        "use strict";

        $('.like').on('click', function() {
            var postid = $(this).data('id');
            var This = $(this);

            $.ajax({
                url: 'index.php',
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
                url: 'index.php',
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
    })(jQuery);

</script>
</body>
</html>
