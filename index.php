<!DOCTYPE html>
<?php
include './class/include.php';
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="creativelayers">

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


        <div class="container tab_row" style="  background-color: white;   width: 80%;  display: none;" >
            <div class="row gray ">
                <div class="col-md-1 col-lg-1"></div>
                <div class="col-md-10 col-lg-10" style="  background-color: white; margin-top: -258px; padding-left: 0px;">
                    <div class="tab-sec  ">
                        <ul class="nav nav-tabs navbar-left right-border" style="width: 20%;">
                            <li class="bottom-border"><a class="current non-border " data-tab="tour"   >BEST TOUR PACKAGES</a></li>
                            <li class="bottom-border"><a data-tab="round_tour"  class="non-border">ROUND TOURS</a> </li>
                            <li class="bottom-border"><a data-tab="one_day"  class="non-border">ONE DAY TOURS</a></li>
                            <li class="bottom-border"><a data-tab="airport"  class="non-border">AIRPORT TRANSFER</a></li>
                            <li class="bottom-border"><a data-tab="wild"  class="non-border">WILD LIFE SAFARI</a></li>
                            <li class="bottom-border"><a data-tab="adventure"  class="non-border">ADVENTURE</a></li>
                        </ul>
                        <div id="tour" class="tab-content current search-width horizontal-bar"  >
                            <div class="description">
                                <?php
                                $ATTRACTION = new Attraction(NULL);
                                foreach ($ATTRACTION->all() as $key => $attraction) {
                                    if ($key < 12) {
                                        ?> 
                                        <div class="col-md-3">
                                            <img src="upload/attraction/thumb/gallery/<?php echo $attraction['image_name'] ?>" alt="<?php echo $attraction['title'] ?>" class="img-responsive img-res-p "  />
                                            <div class="carousel-caption padd-top-cap">
                                                <p  class="white-color font-newsize-2">Kandy</p>
                                            </div>
                                        </div>
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
                                    $ATTRACTION = new Attraction(NULL);
                                    foreach ($ATTRACTION->all() as $key => $attraction) {
                                        if ($key < 8) {
                                            ?>
                                            <div class="col-md-3 col-sm-4 col-xs-12"> 
                                                <?php if ($key % 2 == 0) { ?>
                                                    <div class="category-box">
                                                        <a href="view-destination.php?id=<?php echo $attraction['id'] ?>" title=""><img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt="" /></a>
                                                        <div class="carousel-caption padd-bottom-cap">
                                                            <p  class="white-color font-newsize "><?php echo $attraction['title'] ?></p>
                                                        </div>
                                                    </div> 
                                                <?php } else { ?>
                                                    <div class="category-box">
                                                        <a href="view-destination.php?id=<?php echo $attraction['id'] ?>" title=""><img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt="" /></a>
                                                        <div class="carousel-caption padd-bottom-cap">
                                                            <p  class="white-color font-newsize"><?php echo $attraction['title'] ?></p>
                                                        </div>
                                                    </div> 
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
                                    $ATTRACTION = new Attraction(NULL);
                                    foreach ($ATTRACTION->all() as $key => $attraction) {
                                        if ($key > 8 && $key < 17) {
                                            ?>
                                            <div class="col-md-3 col-sm-4 col-xs-12"> 
                                                <?php if ($key % 2 == 0) { ?>
                                                    <div class="category-box">
                                                        <a href="view-destination.php?id=<?php echo $attraction['id'] ?>" title=""><img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt="" /></a>
                                                        <div class="carousel-caption padd-bottom-cap">
                                                            <p  class="white-color font-newsize"><?php echo $attraction['title'] ?></p>

                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="category-box">
                                                        <a href="view-destination.php?id=<?php echo $attraction['id'] ?>" title=""><img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt="" /></a>
                                                        <div class="carousel-caption padd-bottom-cap">
                                                            <p  class="white-color font-newsize"><?php echo $attraction['title'] ?></p>

                                                        </div>
                                                    </div> 
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
                                    foreach ($TOUR_PACKAGE->getTourPackagesByType(1) as $tour_package) {
                                        ?>
                                        <div class="col-md-3"> 
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
                                                        <div class="col-md-8   " id="p-padd-2">
                                                            <h4 class="p--bottom">
                                                                <strong>
                                                                    US$: <?php echo $tour_package['price'] ?>
                                                                </strong>
                                                            </h4>
                                                            <span>
                                                                <p>Starting From</p>
                                                            </span>
                                                        </div>
                                                        <div class="col-md-4 tour-btn"">
                                                            <p  class="p-tab-b">View</p>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end tour Packages-->

        <!--top Destination-->
        <section>
            <div class="block gray remove-top tab_row_hide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Things to do</h2>
                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</span>
                            </div>
                            <div class="listing-carousel">
                                <div class="row"  id="list-activity">
                                    <?php
                                    $ACTIVITIES = new Activities(NULL);
                                    foreach ($ACTIVITIES->all() as $key => $activity) {
                                        ?>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="blog-post-2 ">
                                                <div class="blog-post-thumb"> 
                                                    <a href="view-things-to-do.php?id=<?php echo $activity['id'] ?>" title=""><img src="images/destinations/des-1.jpg" alt="" /></a></div>
                                                <div class="blog-detail">

                                                    <h3><a href="view-things-to-do.php?id=<?php echo $activity['id'] ?>" title=""><?php echo $activity['title'] ?></a></h3>
                                                    <p class="text-justify">
                                                        <?php echo substr($activity['short_description'], 0, 140) ?>...
                                                    </p>
                                                    <a href="view-things-to-do.php?id=<?php echo $activity['id'] ?>">  
                                                        <div class=" pull-right  des-with" >
                                                            <p  class="p-tab-b">View</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div> 
                                        </div> 
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--end top Destination-->
        <!--INSPIRATION-->
        <section id="scroll-here  " >
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
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dt-box">
                                            <a href="#" title=""><img src="images/1.jpeg" alt="" class="img-responsive"/><span>Wild Life </span></a>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dt-box">
                                            <a href="#" title=""><img src="images/3.jpg" alt="" /><span>Cultural</span></a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dt-box">
                                            <a href="#" title=""><img src="images/2.jpg" alt="" /><span>Ella</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="dt-box">
                                    <a href="#" title=""><img src="images/resource/dt4.jpg" alt="" /><span>Adventure</span></a>
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
                        <div class="col-md-9">

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
                        <div class="col-md-3 hidden-xs col-sm-3 " style=" margin-top: -113px;"> 
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


                    <div class="list-detail-carousel  " >
                        <div class="row">
                            <div   id="listing-carousel-company">


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