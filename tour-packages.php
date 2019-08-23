<!DOCTYPE html>
<?php
include './class/include.php';
 
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=" ">

    <title><?php echo $TOUR_TYPES->name ?> - Apple Vacation</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="css/line-awesome.min.css" type="text/css" /><!-- Icons -->

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors/colors.css" type="text/css" /><!-- color -->		

    <link rel="shortcut icon" type="image/png" href="images/logo.png"/>

</head>
<body>
    <div class="page-loading">
        <div class="loadery"></div>
    </div>
    <div class="theme-layout">

        <!--Mobile Header-->
        <?php include './mobile-header.php'; ?>
        <!--Mobile Header-->

        <?php include './header.php'; ?>

        <section>
            <div class="block-in-pages  banner-image">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner-header">
                                <h2>Tour Packages</h2>
                                <ul class="breadcrumbs">
                                    <li><a href="index.php" title="">Home</a></li>
                                    <li><a href="#" title="">Tour packages</a></li> 
                                </ul>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="block-in-page-section gray   tab_row_hide"> 
                <div class="listing-carousel">
                    <div class="container">
                        <div class="row"  >
                            <?php
                            $TOUR_PACKAGE = new TourPackage(NULL);
                            foreach ($TOUR_PACKAGE->all() as $tour_package) {
                                ?>
                                <div class="col-md-3 col-xs-12 col-sm-6" >
                                    <a href="view-tour-package.php?id=<?php echo $tour_package['id'] ?>" title="<?php echo $tour_package['title'] ?>">  
                                        <div class="listing-box ">
                                            <div class="listing-box-thumb">
                                                <span class="price-list"><?php echo $tour_package['dates'] ?></span> 
                                                <img src="upload/tour-package/<?php echo $tour_package['image_name'] ?>" alt="" /> 
                                                <div class="listing-box-title">
                                                    <h3> 
                                                        <?php echo $tour_package['title'] ?>
                                                    </h3> 
                                                </div>
                                            </div>

                                            <div class="tour-list-bottom text-justify ">
                                                <p class="p-padd" >  
                                                    <?php echo substr($tour_package['short_description'], 0, 150) ?>...
                                                </p>
                                                <div class="col-md-6 col-xs-6 col-sm-6 " id="p-padd-2">
                                                    <h4 class="p--bottom">
                                                        <strong>
                                                            US$: <?php echo $tour_package['price'] ?>.00  
                                                        </strong>
                                                    </h4>
                                                    <span>
                                                        <p>  Starting From</p>
                                                    </span>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-sm-6 tour-btn" >
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
        </section> 

        <?php include './footer.php'; ?>

    </div>

    <!-- Script -->
    <script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizer -->
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script><!-- Jquery -->
    <script type="text/javascript" src="js/script.js"></script><!-- Script -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="js/scrolltopcontrol.js"></script><!-- ScrollTopControl -->
    <script type="text/javascript" src="js/slick.min.js"></script><!-- Slick -->
    <script type="text/javascript" src="js/scrolly.js"></script><!-- Slick -->
    <script type="text/javascript" src="js/sumoselect.js"></script><!-- Nice Select -->
    <script type="text/javascript" src="js/choosen.min.js"></script><!-- Nice Select -->
    <script type="text/javascript" src="js/rangeslider.js"></script><!-- Nice Select -->

</body>
</html>