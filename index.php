<!DOCTYPE html>
<?php
include './class/include.php';
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>Apple Vacation - Home </title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="css/line-awesome.min.css" type="text/css" /><!-- Icons -->

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors/colors.css" type="text/css" /><!-- color -->		
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
    <link href="../apple-vacations/css/comment.css" rel="stylesheet" type="text/css"/> 
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>
<body  class="gray">
    <div class="page-loading">
        <div class="loadery"></div>
    </div>
    <div class="theme-layout gray tab_hidden">

        <!--Mobile Header-->
        <?php include './mobile-header.php'; ?>
        <!--Mobile Header-->
 
        <?php include './slider.php'; ?>
 
            <!--top Destination-->
            <section>
                <div class="block gray   tab_row_hide">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading  padd-top">
                                    <h2>Things To Know</h2>                  
                                    <span>Learn About Your Top Sri Lanka Destinations</span>
                                </div>
                                <div class="recent-place-sec" id="places-carousel">
                                    <div class="row">
                                        <?php
                                        $CITY = new City(NULL);
                                        foreach ($CITY->all() as $key => $city) {
                                            if ($key < 8) {
                                                ?>
                                                <div class="col-md-3 col-sm-6 col-xs-6"> 
                                                    <?php if ($key % 2 == 0) { ?>
                                                        <a href="view-city.php?id=<?php echo $city['id'] ?>" title="<?php echo $city['name'] ?>"> 
                                                            <div class="category-box">
                                                                <img src="upload/cities/gallery/<?php echo $city['image_name'] ?>" alt="<?php echo $city['name'] ?>" />
                                                                <div class="carousel-caption padd-bottom-cap">
                                                                    <p  class="white-color font-newsize "><?php echo $city['name'] ?></p>
                                                                </div>
                                                            </div> 
                                                        </a>
                                                    <?php } else { ?>
                                                        <a href="view-city.php?id=<?php echo $city['id'] ?>" title="<?php echo $city['name'] ?>"> 
                                                            <div class="category-box">
                                                                <img src="upload/cities/gallery/<?php echo $city['image_name'] ?>" alt="<?php echo $city['name'] ?>" />
                                                                <div class="carousel-caption padd-bottom-cap">
                                                                    <p  class="white-color font-newsize"><?php echo $city['name'] ?></p>
                                                                </div>
                                                            </div> 
                                                        </a>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>

                                    <div class="row">
                                        <?php
                                        foreach ($CITY->all() as $key => $city) {
                                            if ($key >= 8 && $key < 16) {
                                                ?>
                                                <div class="col-md-3 col-sm-6 col-xs-6"> 
                                                    <?php if ($key % 2 == 0) { ?>
                                                        <a href="view-city.php?id=<?php echo $city['id'] ?>" title="<?php echo $city['name'] ?>"> 
                                                            <div class="category-box">
                                                                <img src="upload/cities/gallery/<?php echo $city['image_name'] ?>" alt="<?php echo $city['name'] ?>" />
                                                                <div class="carousel-caption padd-bottom-cap">
                                                                    <p  class="white-color font-newsize"><?php echo $city['name'] ?></p>

                                                                </div>
                                                            </div>
                                                        </a>
                                                    <?php } else { ?>
                                                        <a href="view-city.php?id=<?php echo $city['id'] ?>" title="<?php echo $city['name'] ?>">
                                                            <div class="category-box">                                                   
                                                                <img src="upload/cities/gallery/<?php echo $city['image_name'] ?>" alt="<?php echo $city['name'] ?>" />
                                                                <div class="carousel-caption padd-bottom-cap">
                                                                    <p  class="white-color font-newsize"><?php echo $city['name'] ?></p>

                                                                </div>
                                                            </div> 
                                                        </a>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div> 
                                </div>
                                <a href="destination.php" title="" id="white-color" class="view-all-blog"> <i class="la la-map-marker"></i> View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <!--end top Destination-->

            <!--tour Packages-->
            <section>
                <div class="block   remove-top tab_row_hide gray-sec">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading padd-top">
                                    <h2>Tour Packages</h2>
                                    <span>Explore a range of exciting tour packages from Sri Lanka </span>
                                </div>
                                <div class="listing-carousel">
                                    <div class="row" id="listing-carousel">
                                        <?php
                                        $TOUR_PACKAGE = new TourPackage(NULL);
                                        foreach ($TOUR_PACKAGE->all() as $tour_package) {
                                            ?>
                                            <div class="col-md-3 col-xs-12 col-sm-6"> 
                                                <a href="view-tour-package.php?id=<?php echo $tour_package['id'] ?>" title="<?php echo $tour_package['title'] ?>">
                                                    <div class="listing-box">
                                                        <div class="listing-box-thumb">
                                                            <span class="price-list"><?php echo $tour_package['dates'] ?></span>
                                                            <img src="upload/tour-package/<?php echo $tour_package['image_name'] ?>" alt="<?php echo $tour_package['title'] ?>" />
                                                            <div class="listing-box-title">
                                                                <h3> <?php echo $tour_package['title'] ?> </h3>
                                                            </div>
                                                        </div>
                                                        <div class="listing-rate-share text-justify ">
                                                            <p class="p-padd" > 
                                                                <?php echo substr($tour_package['short_description'], 0, 140) ?>...
                                                            </p>
                                                            <div class="col-md-8 col-xs-8  col-sm-8 " id="p-padd-2">
                                                                <h4 class="p--bottom">
                                                                    <strong>
                                                                        US$: <?php echo $tour_package['price'] ?>.00
                                                                    </strong>
                                                                </h4>
                                                                <span>
                                                                    <p>Starting From</p>
                                                                </span>
                                                            </div>
                                                            <div class="col-md-4 col-xs-4 col-sm-4 tour-btn"">
                                                                <p  class="p-tab-b">View</p>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </a>
                                            </div>
                                        <?php } ?> 
                                    </div>
                                    <a href="tour-packages.php" title="" id="white-color" class="view-all-blog m-padd"  >View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--end tour Packages-->



            <!--            INSPIRATION
                        <section id="scroll-here">
                            <div class="block gray tab_row_hide remove-top">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="heading  ">
                                                <h2>TRAVEL INSPIRATION</h2>
                                                <span>See more ideas about Sri lanka, Things to do and Things to make.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="do-tonight-sec">
                                        <div class="row">
                                            <div class="col-md-8 col-xs-8">
                                                <div class="row">
                                                    <div class="col-md-12 col-xs-12">
                                                        <div class="dt-box">
                                                            <a href="#" title=""><img src="images/1.jpeg" alt="wild life" class="img-responsive"/><span>Wild Life </span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6">
                                                        <div class="dt-box">
                                                            <a href="#" title=""><img src="images/3.jpg" alt="cultural" /><span>Cultural</span></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6">
                                                        <div class="dt-box">
                                                            <a href="#" title=""><img src="images/2.jpg" alt="ella" /><span>Ella</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-4">
                                                <div class="dt-box">
                                                    <a href="#" title=""><img src="images/resource/dt4.jpg" alt="adventure" /><span>Adventure</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        INSPIRATION-->

            <!--comment-->  
            <section>
                <div class="block   gray remove-top" style="padding-top: 20px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading  padd-top">
                                    <h2>Testimonials</h2>
                                    <span>Behind each review is an experience that matters about our Services</span>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-8">
                                <ul class="testimonial-sec">
                                    <?php
                                    $COMMENT = new Comments(NULL);
                                    foreach ($COMMENT->activeComments() as $comment) {
                                        ?>
                                        <li>
                                            <img src="upload/comments/<?php echo $comment['image_name'] ?>" alt="<?php echo $comment['title'] ?>" />
                                            <?php echo $comment['comment'] ?> 
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>

                            <div class="col-md-3 col-sm-4 " style=" margin-top: 42px;">
                                <a href="https://www.tripadvisor.com/Attraction_Review-g293962-d13827740-Reviews-Apple_Vacations_Srilanka-Colombo_Western_Province.html" target="blank"><img src="images/tripadvisor.png" alt="" style="width: 100%" class="img-thumbnail"/></a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!--comment-->  

            <!--Partners-->
            <section>
                <div class="block remove-top  gray  ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading  padd-top">
                                    <h2>Our Distribution Partners</h2>                  
                                    <span>Trusted Top rated Partner in World Biggest Travel Sites</span>
                                </div>
                            </div>
                        </div> 
                        <div class="list-detail-carousel" >
                            <div class="row">
                                <div id="listing-carousel-company"> 
                                    <div class=" col-md-3">
                                        <a target="_blank"  href="https://www.getyourguide.com/apple-vacations-s51111/" >
                                            <img src="images/partners/get-tour-guide.png" alt=""  class="img-responsive"/>
                                        </a>
                                    </div>
                                    <div class=" col-md-3">
                                        <a target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g293962-d13827740-Reviews-Apple_Vacations_Srilanka-Colombo_Western_Province.html">
                                            <img src="images/partners/tripadvisor.png" alt=""  class="img-responsive"/>
                                        </a>
                                    </div>
                                    <div class=" col-md-3">
                                        <a target="_blank" href="https://www.viator.com/operator/68395 ">
                                            <img src="images/partners/vaitor.png" alt=""  class="img-responsive"/>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="images/partners/booking.png" alt="" class="img-responsive" />
                                    </div>
                                    <div class="col-md-3">
                                        <img src="images/partners/trodur.png" alt="" class="img-responsive" />
                                    </div>
                                    <div class=" col-md-3">
                                        <img src="images/partners/expedia.png" alt="" class="img-responsive" />
                                    </div>

                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Partners-->
            <?php include './footer.php'; ?>
        </div>

        <!-- Script -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizer -->
        <script type="text/javascript" src="js/jquery-2.1.1.js"></script><!-- Jquery -->

        <script type="text/javascript" src="js/script.js"></script><!-- Script -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
        <script type="text/javascript" src="js/scrolltopcontrol.js"></script><!-- ScrollTopControl -->
        <script type="text/javascript" src="js/slick.min.js"></script><!-- Slick -->
        <script type="text/javascript" src="js/scrolly.js"></script><!-- Slick -->
        <script type="text/javascript" src="js/sumoselect.js"></script><!-- Nice Select -->
        <script type="text/javascript" src="js/choosen.min.js"></script><!-- Nice Select -->
        <script type="text/javascript" src="js/waypoints.js"></script><!-- Nice Select -->
        <script type="text/javascript" src="https://widgets.bokun.io/assets/javascripts/apps/build/BokunWidgetsLoader.js?bookingChannelUUID=3fd3d93d-2ab1-4ff9-aec5-c5071443f013" async></script>

         
</body>
</html>