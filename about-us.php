<!DOCTYPE html>
<?php
include './class/include.php';
$ABOUT_US = new Page(1);
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=" ">

    <title>About us - Apple vacation</title>

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
            <div class="block-in-pages banner-image " >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner-header">
                                <h2>About Us</h2>
                                <ul class="breadcrumbs">
                                    <li><a href="index.php" title="">Home</a></li>
                                    <li><a href="#" title="">About Us</a></li> 
                                </ul>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block gray  ">
                <div class="container">
                    <div class="row" > 
                        <div class="col-md-8 col-sm-12 col-xs-12 about-row">
                            <div class="about-padd">
                                <span>Sri Lanka Tour with us</span>
                                <h1 class="about-f"><span  class="about-f-color">Get started</span> your Tours</h1>
                                <div class="text-justify"  >
                                    <?php echo $ABOUT_US->description ?>       
                                </div> 
                            </div> 
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-xs "  style="  padding-left:  0px;">                         
                            <img src="images/about.jpg" class="img-responsive">                         
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="block gray  ">
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-12">
                            <div class="services-sec">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="services">
                                            <i class="la la-rocket"></i>
                                            <h3>Our Mission</h3>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="services">
                                            <i class="la la-eye"></i>
                                            <h3>Our Vision</h3>
                                            <p class="text-justify">Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                        </div>
                                    </div>							 
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
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizer -->
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script><!-- Jquery -->
    <script type="text/javascript" src="js/script.js"></script><!-- Script -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="js/scrolltopcontrol.js"></script><!-- ScrollTopControl -->
    <script type="text/javascript" src="js/slick.min.js"></script><!-- Slick -->
    <script type="text/javascript" src="js/scrolly.js"></script><!-- Slick -->
    <script type="text/javascript" src="js/sumoselect.js"></script><!-- Nice Select -->
    <script type="text/javascript" src="js/choosen.min.js"></script><!-- Nice Select -->
    <script type="text/javascript" src="js/rangeslider.js"></script><!-- Nice Select -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap"type="text/javascript"></script>

    <script type="text/javascript" src="js/maps3.js"></script><!-- Nice Select -->
    <script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- Form -->

</body>
</html>