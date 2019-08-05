<!DOCTYPE html>
<?php
include './class/include.php';
 
$id = '';
$id = $_GET['id'];
$TOUR_PACKAGE = new TourPackage($id);
$TOUR_TYPES = new TourType($TOUR_PACKAGE->tour_type);
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="creativelayers">

    <title><?php echo $TOUR_PACKAGE->title ?> - Apple Vacation</title>
    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="css/line-awesome.min.css" type="text/css" /><!-- Icons -->

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors/colors.css" type="text/css" /><!-- color -->		

    <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
    <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        .tab-sec > .nav-tabs > li a {
            border-bottom: 1px solid transparent;
            border-bottom-color: transparent;
            color: #8d99ae;
            cursor: pointer;
            float: left;
            font-family: Roboto;
            font-size: 20px;
            padding: 20px 82px 20px;
            width: 105%;
            background: #eaeaea;
            margin-right: -1px !important;
            font-family: Oswald;
        }
    </style>
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
            <div class="block-in-pages banner-image ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner-header">
                                <h2><?php echo $TOUR_PACKAGE->title ?> </h2>
                                <ul class="breadcrumbs">
                                    <li><a href="#" title="">Home</a></li>
                                    <li><a href="tour-package.php?id=<?php echo $TOUR_TYPES->id ?>" title=""><?php echo $TOUR_TYPES->name ?></a></li>  
                                    <li><a href="#" title=""><?php echo $TOUR_PACKAGE->title ?> </a></li>  
                                </ul>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block gray ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 column">
                            <div class="shoping-detail-sec">
                                <div class="row">
                                    <!--                                    <div class="col-md-4">
                                                                            <div class="single-product-info">
                                                                                <h3>Tour Package Name</h3>
                                                                                <div class="rated-list">
                                                                                    <b class="la la-star"></b>
                                                                                    <b class="la la-star"></b>
                                                                                    <b class="la la-star"></b>
                                                                                    <b class="la la-star-o"></b>
                                                                                    <b class="la la-star-o"></b>
                                                                                    <span>03 customer review</span>
                                                                                </div>
                                                                                <span>$112.00</span>
                                                                                <p>Mauris in enim sit amet erat consequat vulputate. Donec ut justo nec est congue cursus sit amet aliquet lorem. In at eros id nisi sollicitudin consectetur Ut quis congue dui. Quisque finibus rhoncus nulla, nec consectetur nibh finibus sit amet. Duis eget</p>
                                                                                <div class="c-input-number">
                                                                                    <span><input id="box1" type="text" class="manual-adjust" value="0"/></span>
                                                                                </div>
                                                                                <a href="#" title=""><i class="la la-opencart"></i> Add to cart</a>
                                                                                <div class="shop-category">
                                                                                    <span>Categories</span>
                                                                                    <a href="#" title="">Food</a>
                                                                                    <a href="#" title="">Wine</a>
                                                                                    <a href="#" title="">Drink</a>
                                                                                </div>
                                                                                <div class="shop-share">
                                                                                    <span>Share</span>
                                                                                    <a href="#" title=""><i class="la la-twitter"></i></a>
                                                                                    <a href="#" title=""><i class="la la-google-plus"></i></a>
                                                                                    <a href="#" title=""><i class="la la-linkedin"></i></a>
                                                                                    <a href="#" title=""><i class="la la-behance"></i></a>
                                                                                    <a href="#" title=""><i class="la la-pinterest"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
                                    <div class="col-md-12">
                                        <div id="custom-tabs" class="custom-tabs">
                                            <div class="tab-sec">
                                                <ul class="nav nav-tabs">
                                                    <li><a class="current" data-tab="overview">Overview</a></li>
                                                    <li><a data-tab="itinerary">Tour Itinerary</a></li>
                                                    <li><a data-tab="inclusion">Inclusion and Exclusion</a></li>
                                                    <li><a data-tab="booking-form">Booking Form</a></li>
                                                </ul>
                                                <div id="overview" class="tab-content current">
                                                    <div class="mb">
                                                        <ul id="places-carousel" class="slider-pl">
                                                            <li><img src="images/destinations/v-1.jpg" alt="" /> </li>
                                                            <li><img src="images/destinations/v-1.jpg" alt="" /> </li>
                                                            <li><img src="images/destinations/v-1.jpg" alt="" /> </li>
                                                            <li><img src="images/destinations/v-1.jpg" alt="" /> </li>
                                                            <li><img src="images/destinations/v-1.jpg" alt="" /> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="">
                                                        <p>Rounding up inland Sri Lanka’s sights from Colombo by yourself means self-driving or hopping between trains, buses, and cabs. 
                                                            This private 3-day tour takes away the transport hassles: providing a private chauffeured vehicle to ferry you from sight to sight. 
                                                            Visit Pinnawala Elephant Orphanage, discover Kandy’s must-sees, and explore a tea plantation, Nuwara Eliya, and Sigiriya, all in one tour, with two nights' 3-star accommodation and breakfasts and dinners included.
                                                        </p>
                                                        <ul class="vcs-highlights">
                                                            <li>Check off four Sri Lankan highlights in one private 3-day trip from Colombo</li>
                                                            <li>Avoid public transport stresses and go in comfort by chauffeured private car</li>
                                                            <li>Explore Kandy, Sigiriya, Pinnawela, and the tea country of Nuwara Eliya</li>
                                                            <li>3-star Kandy hotel, breakfasts, dinners, and return hotel transfers included</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div id="itinerary" class="tab-content">
                                                    <div class="faqs-box">
                                                        <h3><span class="day-color">DAY 01</span> - Arrival And Overnight Stay At Golden Star Beach Hotel, Negombo </h3>
                                                        <div class="content-faq">
                                                            <p>Upon Arrival to the Sri Lankan International Airport be greeted by your chauffer guide who shall take you by air conditioned vehicle to Negombo. This trip will take you only 20 minutes. </p>
                                                        </div>
                                                    </div><!-- FAQ'S Box -->
                                                    <div class="faqs-box">
                                                        <h3><span class="day-color">DAY 02</span> - Anuradhapura And Overnight Stay At Sorowwa Resort & Spa, Habarana</h3>
                                                        <div class="content-faq">
                                                            <p>
                                                                Anuradhapura is one of the holiest cities in Sri Lanka. The holiest item is the Bodhi Tree. This Bodhi tree is a sampling of the original Tree at which the Buddha sat as he attained enlightenment.
                                                                Afterwards proceed to Habarana, the hub of the cultural triangle.
                                                            </p>
                                                        </div>
                                                    </div><!-- FAQ'S Box -->
                                                    <div class="faqs-box">
                                                        <h3><span class="day-color">DAY 03</span> - Sigiriya & Polonaruwa And Overnight Stay At Sorowwa Resort & Spa, Habarana</h3>
                                                        <div class="content-faq">
                                                            <p>After breakfast head to the ancient city of Polonaruwa. This medieval city, a UNESCO World Heritage Site, rose to fame as the capital (10th – 12th century AD) after the decline of Anuradhapura. In the afternoon head to Sigiriya.</p>
                                                        </div>
                                                    </div><!-- FAQ'S Box -->
                                                    <div class="faqs-box">
                                                        <h3><span class="day-color">DAY 04</span> - Kandy And Overnight Stay At Hotel Suisse, Kandy</h3>
                                                        <div class="content-faq">
                                                            <p>After breakfast you have the choice of embarking on the Hirawaduna Trek, a nature trail that gives you an insight into Sri Lankan village life. Visit an elephant watch tree house and enjoy a catamaran ride and a bullock cart ride
                                                                Thereafter proceed onwards to Kandy, enroute visit the Spice Garden in Mattale, and visit the Temple of the Tooth Relic before retiring for the night
                                                            </p>
                                                        </div>
                                                    </div><!-- FAQ'S Box -->
                                                    <div class="faqs-box">
                                                        <h3><span class="day-color">DAY 05</span> - Departure</h3>
                                                        <div class="content-faq">
                                                            <p>After breakfast proceed to the Airport in time for the connecting flight.</p>
                                                        </div>
                                                    </div><!-- FAQ'S Box -->
                                                </div>
                                                <div id="inclusion" class="tab-content">
                                                    <div class="">
                                                        <div class="col-md-6">
                                                            <h5>Inclusion</h5>
                                                            <ul>
                                                                <li>02 Nights 3*** Hotel Accommodation</li>
                                                                <li>Transport by air-conditioned (Bus/ Van/ Car)</li>
                                                                <li>Hotel pickup and drop-off</li>
                                                                <li>English Speaking Chauffeur</li>
                                                                <li>Bottle Water</li>
                                                                <li>Complimentary WiFi Excess During the Travel (Subjected To Availability)</li>
                                                                <li>DINNER (2)</li>
                                                                <li>Breakfast (2)</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h5>Exclusion</h5>
                                                            <ul>
                                                                <li>Food and drinks, unless specified</li>
                                                                <li>Lunch</li>
                                                                <li>Gratuities</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="booking-form" class="tab-content">
                                                    <?php
                                                    include 'booking-form.php';
                                                    ?>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="col-md-12">
                                        <div class="related-products">
                                            <h3 class="mini-title">Related Tour Packages</h3>
                                            <div class="row" id="related-carousel">
                                                <div class="col-md-3">
                                                    <div class="product-box">
                                                        <div class="product-thumb">
                                                            <img src="images/tour/1-1.jpg" alt="" />
                                                            <a href="#" title="">VIEW PACKAGE</a>
                                                        </div>
                                                        <h3><a href="#" title="">Tour Package Name</a></h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="product-box">
                                                        <div class="product-thumb">
                                                            <img src="images/tour/1-2.jpg" alt="" />
                                                            <a href="#" title="">VIEW PACKAGE</a>
                                                        </div>
                                                        <h3><a href="#" title="">Tour Package Name</a></h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="product-box">
                                                        <div class="product-thumb">
                                                            <img src="images/tour/1-3.jpg" alt="" />
                                                            <a href="#" title="">VIEW PACKAGE</a>
                                                        </div>
                                                        <h3><a href="#" title="">Tour Package Name</a></h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="product-box">
                                                        <div class="product-thumb">
                                                            <img src="images/tour/1-4.jpg" alt="" />
                                                            <a href="#" title="">VIEW PACKAGE</a>
                                                        </div>
                                                        <h3><a href="#" title="">Tour Package Name</a></h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="product-box">
                                                        <div class="product-thumb">
                                                            <img src="images/tour/1-1.jpg" alt="" />
                                                            <a href="#" title="">VIVE PACKAGE</a>
                                                        </div>
                                                        <h3><a href="#" title="">Tour Package Name</a></h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="product-box">
                                                        <div class="product-thumb">
                                                            <img src="images/tour/1-2.jpg" alt="" />
                                                            <a href="#" title="">VIEW PACKAGE</a>
                                                        </div>
                                                        <h3><a href="#" title="">Tour Package Name</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Shoping Detail Sec -->
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
    <script type="text/javascript" src="js/userincr.js"></script><!-- Slick -->

    <script src="booking-form/scripts.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function () {
            $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
        });
    </script> 
</body>
</html>