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

        <?php include './header.php'; ?>
        <?php include './slider.php'; ?>


        <div class="container tab_row tab-panel-size"  >
            <div class="row gray ">
                <div class="col-md-1 col-lg-1"></div>
                <div class="col-md-8 col-lg-10 col-xs-12 col-sm-12 padd-row-background"  >
                    <div class="tab-sec">
                        <ul class="nav nav-tabs navbar-left right-border" style="width: 20%;">
                            <li class="bottom-border"><a class="current non-border" data-tab="tour">TOP DESTINATIONS</a></li>
                            <li class="bottom-border"><a data-tab="round_tour"  class="non-border">ROUND TOURS</a> </li>
                            <li class="bottom-border"><a data-tab="one_day"  class="non-border">ONE DAY TOURS</a></li>
                            <li class="bottom-border"><a data-tab="airport"  class="non-border">AIRPORT TRANSFER</a></li>
                            <li class="bottom-border"><a data-tab="wild"  class="non-border">WILD LIFE SAFARI</a></li>
                            <li class="bottom-border"><a data-tab="adventure"  class="non-border">ADVENTURE</a></li>
                        </ul>
                        <div id="tour" class="tab-content current search-width horizontal-bar">
                            <div class="description">
                                <?php
                                $CITY = new City(NULL);
                                foreach ($CITY->all() as $key => $city) {
                                    if ($key < 12) {
                                        ?> 
                                     <a href="view-city.php?id=<?php echo $city['id'] ?>" >  
                                         <div class="col-md-3 col-xs-6 col-sm-6">
                                            <img src="upload/cities/gallery/thumb/<?php echo $city['image_name'] ?>" alt="<?php echo $city['name'] ?>" class="img-responsive img-res-p "  />
                                            <div class="carousel-caption padd-top-cap">
                                                <p  class="white-color font-newsize-2"><?php echo $city['name'] ?></p>
                                            </div>
                                        </div>
                                     </a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div id="round_tour" class="tab-content search-width">
                            <div class="col-md-6">
                                <ul class="additional-information"> 
                                    <li><strong>Round Tour</strong> </li>
                                    <li><strong>Round Tour</strong> </li>
                                    <li><strong>Round Tour</strong> </li>
                                    <li><strong>Round Tour</strong> </li>
                                    <li><strong>Round Tour</strong> </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="additional-information"> 
                                    <li><strong>Round Tour</strong> </li>
                                    <li><strong>Round Tour</strong> </li>
                                    <li><strong>Round Tour</strong> </li>
                                    <li><strong>Round Tour</strong> </li>
                                    <li><strong>Round Tour</strong> </li>
                                </ul>
                            </div>
                        </div>
                        <div id="one_day" class="tab-content search-width">
                            <div class="review-list-sec">
                                <div class="col-md-6">
                                    <ul class="additional-information"> 
                                        <li><strong>ONE DAY TOURS</strong> </li>
                                        <li><strong>ONE DAY TOURS</strong> </li>
                                        <li><strong>ONE DAY TOURS</strong> </li>
                                        <li><strong>ONE DAY TOURS</strong> </li>
                                        <li><strong>ONE DAY TOURS</strong> </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="additional-information"> 
                                        <li><strong>ONE DAY TOURS</strong> </li>
                                        <li><strong>ONE DAY TOURS</strong> </li>
                                        <li><strong>ONE DAY TOURS</strong> </li>
                                        <li><strong>ONE DAY TOURS</strong> </li>
                                        <li><strong>ONE DAY TOURS</strong> </li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                        <div id="airport" class="tab-content search-width">
                            <div class="review-list-sec">
                                <div class="col-md-6">
                                    <ul class="additional-information"> 
                                        <li><strong>AIRPORT TRANSFER</strong> </li>
                                        <li><strong>AIRPORT TRANSFER</strong> </li>
                                        <li><strong>AIRPORT TRANSFER</strong> </li>
                                        <li><strong>AIRPORT TRANSFER</strong> </li>
                                        <li><strong>AIRPORT TRANSFER</strong> </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="additional-information"> 
                                        <li><strong>AIRPORT TRANSFER</strong> </li>
                                        <li><strong>AIRPORT TRANSFER</strong> </li>
                                        <li><strong>AIRPORT TRANSFER</strong> </li>
                                        <li><strong>AIRPORT TRANSFER</strong> </li>
                                        <li><strong>AIRPORT TRANSFER</strong> </li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                        <div id="wild" class="tab-content search-width">
                            <div class="review-list-sec">
                                <div class="col-md-6">
                                    <ul class="additional-information"> 
                                        <li><strong>WILD LIFE SAFARI</strong> </li>
                                        <li><strong>WILD LIFE SAFARI</strong> </li>
                                        <li><strong>WILD LIFE SAFARI</strong> </li>
                                        <li><strong>WILD LIFE SAFARI</strong> </li>
                                        <li><strong>WILD LIFE SAFARI</strong> </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="additional-information"> 
                                        <li><strong>WILD LIFE SAFARI</strong> </li>
                                        <li><strong>WILD LIFE SAFARI</strong> </li>
                                        <li><strong>WILD LIFE SAFARI</strong> </li>
                                        <li><strong>WILD LIFE SAFARI</strong> </li>
                                        <li><strong>WILD LIFE SAFARI</strong> </li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                        <div id="adventure" class="tab-content search-width">
                            <div class="review-list-sec">
                                <div class="col-md-6">
                                    <ul class="additional-information"> 
                                        <li><strong>ADVENTURE</strong> </li>
                                        <li><strong>ADVENTURE</strong> </li>
                                        <li><strong>ADVENTURE</strong> </li>
                                        <li><strong>ADVENTURE</strong> </li>
                                        <li><strong>ADVENTURE</strong> </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="additional-information"> 
                                        <li><strong>ADVENTURE</strong> </li>
                                        <li><strong>ADVENTURE</strong> </li>
                                        <li><strong>ADVENTURE</strong> </li>
                                        <li><strong>ADVENTURE</strong> </li>
                                        <li><strong>ADVENTURE</strong> </li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
                <div class="col-md-1 col-lg-1"></div>
            </div> 
        </div>

        <!--top Destination-->
        <section>
            <div class="block gray   tab_row_hide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>TOP DESTINATIONS</h2>                  
                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                            </div>
                            <div class="recent-place-sec" id="places-carousel">
                                <div class="row">
                                    <?php
                                   
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
            <div class="block gray remove-top tab_row_hide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Tour Packages</h2>
                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
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
                                <a href="tour-packages.php?id=1" title="" id="white-color" class="view-all-blog">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end tour Packages-->

        

        <!--INSPIRATION-->
        <section id="scroll-here">
            <div class="block gray tab_row_hide remove-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading  ">
                                <h2>TRAVEL INSPIRATION</h2>
                                <span>Discover & connect with great local businesses in Toronto.</span>
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
        <!--INSPIRATION-->

        <!--comment-->  
        <section>
            <div class="block   gray remove-top" style="padding-top: 20px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>What Our ClIents Say</h2>
                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium    </span>
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

                        <div class="col-md-3 hidden-xs col-sm-4 " style=" margin-top: -113px;"> 
                            <a href="https://www.tripadvisor.com/Attraction_Review-g293962-d13827740-Reviews-Apple_Vacations_Srilanka-Colombo_Western_Province.html">
                                <img  src="images/rec-trip.png" class="img-responsive pull-right" width="90%"/>
                            </a>
                            <div id="TA_selfserveprop837" class="TA_selfserveprop tripadvisor-v pull-right">
                                <ul id="KEWHRuWIMV" class="TA_links JexZnt">
                                    <li id="jgAYPb" class="l6iiPyjaMW">
                                        <a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=837&amp;locationId=13827740&amp;lang=en_US&amp;rating=true&amp;nreviews=0&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk = true"></script>
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
                            <div class="heading">
                                <h2>Our Partners</h2>                  
                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                            </div>
                        </div>
                    </div> 
                    <div class="list-detail-carousel" >
                        <div class="row">
                            <div id="listing-carousel-company"> 
                                <div class="list-detail-box col-md-3">
                                    <img src="images/resource/client1.png" alt=""  class="img-responsive"/>
                                </div>
                                <div class="list-detail-box col-md-3">
                                    <img src="images/resource/client2.png" alt=""  class="img-responsive"/>
                                </div>
                                <div class="list-detail-box col-md-3">
                                    <img src="images/resource/client3.png" alt=""  class="img-responsive"/>
                                </div>
                                <div class="list-detail-box col-md-3">
                                    <img src="images/resource/client4.png" alt="" class="img-responsive" />
                                </div>
                                <div class="list-detail-box col-md-3">
                                    <img src="images/resource/client5.png" alt="" class="img-responsive" />
                                </div>
                                <div class="list-detail-box col-md-3">
                                    <img src="images/resource/client6.png" alt="" class="img-responsive" />
                                </div>
                                <div class="list-detail-box col-md-3">
                                    <img src="images/resource/client7.png" alt="" class="img-responsive" />
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

    <script>
                                $(document).ready(function () {
                                    $('.search').click(function () {
                                        $('.tab_row').show();
                                        $('html, body').animate({
                                            scrollTop: $("#text-scroll").offset().top
                                        }, 1000);
                                    });


                                    $('.tab_row_hide').click(function () {
                                        $('.tab_row').hide();
                                    });

                                });

    </script>
</body>
</html>