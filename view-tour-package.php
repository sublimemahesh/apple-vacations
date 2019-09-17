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
        .tab-content.current {
            margin-top: 100px;
        }
        .tab-sec > .nav-tabs > li a.current{
            background: url(images/tab-bg.jpg) no-repeat 50% 50% ;
        }

        .tab-sec > .nav-tabs > li a:hover {
            background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
            color: white;
            transition: all 0.2s;
            float:left;
            -ms-transition: all 0.8s;
            -webkit-transition: all 0.8s;
            -ms-transition: all 0.2s;
            -webkit-transition: all 0.2s;
            background: url(images/tab-bg.jpg) no-repeat 50% 50% #fff;
        }
        .tab-sec > .nav-tabs > li {
            float: left;
            border: 1px solid #fff;
        }
        .tab-sec > .nav-tabs > li a.current {
            border: 1px solid #fff !important;
            color: #fff;
            background-color: #d90429;
            font-weight: 400;
            font-family: Oswald;
        }
        .iternery{
            background-color: #666666;height: 37px;
        }
        .iternery-padd{
            background-color: white; padding: 6px;
        }
        .iternery-padd-text{
            font-size: 16px; 
            color: white;
            margin-top: 10px;
            margin-right: 10px;
        }
        .itinerary-day {
            padding-left: 0;
            padding-right: 0;
            width: 10%;
            height: 50px;
            font-size: 20px;
            color: #ffffff;
            background: #d90429;
            text-transform: uppercase;
            text-align: center;
            padding: 12px 0;
        }
        .itinerary-title {
            padding-left: 0;
            padding-right: 0;
            width: 90%;
            height: 50px;
            padding: 15px;
            font-size: 15px;
            text-align: right;
            color: #ffffff;
            background: #666666;
        }
        .mt-itenary{
            margin-top: 30px;
        }
        #overview .pd-slide{
            padding-left: 0px;
        }
        .faqs-box {
            background: #f7f7f7 none repeat scroll 0 0;
        }
        .h5, h5 {
            font-size: 18px;
        }
        .content-faq p {
            margin: 10px 0 10px;
        }
        @media (max-width: 768px){
            .itinerary-day {
                width: 100%;
            }
            .itinerary-title {
                width: 100%;
                padding: 5px;
                text-align: center;
            }
            .tab-sec > .nav-tabs {
                margin-bottom: 30px;
            }
            #overview p{
                text-align: justify;
            }
            #overview .pd-slide{
                padding-left: 15px;
            }
        }
        @media (min-width: 900px) and (max-width: 1200px){
            .tab-sec > .nav-tabs > li a {
                padding: 20px 54px 20px;
                width: 118%;
            }             
        }
        @media (min-width: 600px) and (max-width: 900px){
            .tab-sec > .nav-tabs > li a {
                padding: 20px 24px 20px;
                width: 118%;
            }
            .tab-sec > .nav-tabs > li a{
                font-size: 14px;
            }
        }

        @media (min-width: 360px) and (max-width: 600px){
            .tab-sec > .nav-tabs > li a {
                padding: 15px 10px 15px;
                width: 100%;
            }
            .tab-sec > .nav-tabs > li a{
                font-size: 16px;
            }
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
                                    <li><a href="index.php" title="">Home</a></li>
                                    <li><a href="#" title=""><?php echo $TOUR_TYPES->name ?></a></li>  
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
                                    <div class="col-md-12 col-xs-12">
                                        <div id="custom-tabs" class="custom-tabs">
                                            <div class="tab-sec">
                                                <ul class="nav nav-tabs">
                                                    <li><a class="current" data-tab="overview">Overview</a></li>
                                                    <li><a data-tab="itinerary">Tour Itinerary</a></li>
                                                    <li><a data-tab="inclusion">Inclusion and Exclusion</a></li>
                                                    <li><a data-tab="booking-form">Booking Form</a></li>
                                                </ul>
                                                <div id="overview" class="tab-content current">
                                                    <div class="mb col-md-8 col-xs-12 pd-slide">
                                                        <ul id="places-carousel" style="padding: 0px">
                                                            <?php
                                                            $TOUR_DATE = new TourDate(NULL);
                                                            foreach ($TOUR_DATE->getTourDatesById($id) as $key => $tour_date) {
                                                                ?>
                                                                <li><img src="upload/tour-package/date/<?php echo $tour_date['image_name'] ?>" alt="" width="100%"/> </li> 
                                                            <?php }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-4 hidden-xs  check-div ">
                                                        <h3 class="header-color" >Start From $98.00</h3>
                                                        <hr>
                                                        <h2>Select Date and Travelers</h2>
                                                        <hr>
                                                        <div class="form-type">
                                                            <div class="form-group padd-btm"  > 
                                                                <input type="text"  class="form-control input-validater datepicker" id="check-in" placeholder="select date">

                                                            </div> 
                                                            <!--                                                            <div class="form-group"  style="padding-bottom: 5px;"> 
                                                                                                                            <input type="number"  class="form-control input-validater" min="0" placeholder="Number of Adults">
                                                                                                                            <span id="spanFullName"></span>
                                                                                                                        </div>-->
                                                            <div class="form-group padd-btm"  > 
                                                                <select class="form-control" id="price-change"  > 
                                                                    <?php
                                                                    $PRICE_NAME = json_decode($TOUR_PACKAGE->price);
                                                                    foreach ($PRICE_NAME as $price_name) {
                                                                        ?>
                                                                        <option   value="<?php echo $price_name->pax . ' Rs: ' . number_format($price_name->price, 2) ?>" >  <?php echo $price_name->pax ?>    Rs: <?php echo number_format($price_name->price, 2) ?> </option>
                                                                    <?php } ?>
                                                                </select> 
                                                            </div>
                                                            <h5 class="header-color" id="price-range-show" style="display: none;">Check in :- <span id="date-check-in"  class="color-black"></span>  <br>
                                                                Pax and Price:- <span id="pax-price" class="color-black"></span> 
                                                            </h5>

                                                            <div class="btn-check-padd">
                                                                <div class="form-group">
                                                                    <button type="submit"  class="btn submit-booking" id="check">Check Availability</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <?php echo $TOUR_PACKAGE->description ?>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="itinerary" class="tab-content">
                                                    <?php
                                                    foreach ($TOUR_DATE->getTourDatesById($id) as $key => $tour_date) {
                                                        $key++;
                                                        ?>
                                                        <div class="faqs-box">
                                                            <div class="iternery">
                                                                <!--                                                                <h3>
                                                                                                                                    <span class="day-color iternery-padd" >DAY <?php echo $key ?>  </span> 
                                                                                                                                    <span class="pull-right iternery-padd-text"  >  Dinner and overnight stay at Mount lavinia Hotel</span>
                                                                                                                                </h3>-->
                                                                <div class="mt-itenary">
                                                                    <div class="col-xs-1 itinerary-day">DAY <?php echo $key ?></div>
                                                                    <div class="col-xs-11 itinerary-title"><?php echo $tour_date['title']; ?></div>
                                                                </div>
                                                            </div>

                                                            <div class="content-faq">
                                                                <p><?php echo $tour_date['description']; ?></p>
                                                            </div>
                                                        </div> 
                                                    <?php } ?> 
                                                </div>
                                                <div id="inclusion" class="tab-content">
                                                    <div class="">
                                                        <div class="col-md-6">
                                                            <h5>Inclusion</h5>
                                                            <ul>
                                                                <?php echo $TOUR_PACKAGE->includes ?>
                                                            </ul>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <h5>Exclusion</h5>
                                                            <ul>
                                                                <?php echo $TOUR_PACKAGE->excludes ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div id="booking-form" class="tab-content">
                                                    <div class="add-review-box">
                                                        <div class="add-review-form">
                                                            <div class="form-type">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Your Name <span class="red">*</span></label>
                                                                        <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater" placeholder="Enter the name">
                                                                        <span id="spanFullName"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Your Email <span>*</span> </label>
                                                                        <input type="email" name="txtEmail" id="txtEmail" class="form-control input-validater"  placeholder="Enter the email">
                                                                        <span id="spanEmail"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Contact Number <span class="red">*</span></label>
                                                                        <input type="tel" class="form-control input-validater" id="txtPhone" name="txtPhone" placeholder="Enter mobile number">
                                                                        <span id="spanPhone"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Country <span class="red">*</span></label>
                                                                        <input type="text" class="form-control input-validater" id="txtCountry" name="txtCountry" placeholder="Enter the country">
                                                                        <span id="spanCountry"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Tour Package <span class="red">*</span></label>
                                                                        <input type="text" class="form-control input-validater" id="txtTour" name="txtTour" value="<?php echo $TOUR_PACKAGE->title ?>" readonly="">
                                                                        <span id="spanTour"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Airport Pickup <span class="red">*</span></label>
                                                                        <select class="form-control h-booking input-validater" id="txtAirport" name="txtAirport">
                                                                            <option value="" selected="">
                                                                                -- Please Select one --
                                                                            </option>
                                                                            <option value="Yes"> Yes </option>
                                                                            <option value="No"> No </option>
                                                                        </select>
                                                                        <span id="spanAirport"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Check In <span class="red">*</span></label>
                                                                        <input type="text" class="form-control input-validater datepicker  " id="txtCheckIn" name="txtCheckIn" placeholder="yyyy-mm-dd">
                                                                        <span id="spanCheckIn"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Check Out <span class="red">*</span></label>
                                                                        <input type="text" class="form-control input-validater datepicker " id="txtCheckOut" name="txtCheckOut" placeholder="yyyy-mm-dd">
                                                                        <span id="spanCheckOut"></span>
                                                                    </div>
                                                                </div>
                                                                <!--                                                                <div class="col-md-6">
                                                                                                                                    <div class="form-group">
                                                                                                                                        <label>Num of Adults <span class="red">*</span></label>
                                                                                                                                        <input type="number" class="form-control input-validater" id="txtAdult" name="txtAdult" min="0" placeholder="Number of adults">
                                                                                                                                        <span id="spanAdult"></span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="col-md-6">
                                                                                                                                    <div class="form-group">
                                                                                                                                        <label>Num of Children <span class="red">*</span></label>
                                                                                                                                        <input type="number" class="form-control input-validater" id="txtChild" name="txtChild" min="0" placeholder="Number of childs">
                                                                                                                                        <span id="spanChild"></span>
                                                                                                                                    </div>
                                                                                                                                </div>-->
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Num of Pax and Price <span class="red">*</span></label>
                                                                        <input type="text" class="form-control input-validater" id="txtPax" name="txtAdult" min="0"  >
                                                                        <span id="spanAdult"></span>
                                                                    </div>
                                                                </div>
                                                                <!--                                                                <div class="col-md-6">
                                                                                                                                    <div class="form-group">
                                                                                                                                        <label>Price <span class="red">*</span></label>
                                                                                                                                        <input type="text" class="form-control input-validater"   name=" " min="0" >
                                                                                                                                        
                                                                                                                                    </div>
                                                                                                                                </div>-->
                                                                <div class="col-md-3">
                                                                    <label for="comment" id="form-label">Security Code:<span class="red">*</span></label>
                                                                    <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Security code >> ">
                                                                    <span id="capspan" ></span>
                                                                </div>
                                                                <div class="col-md-3"> 
                                                                    <span><?php include("./booking-form/captchacode-widget.php"); ?></span>
                                                                </div> 
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <button type="submit" id="btnSubmit" class="btn submit-booking">Enquiry Now</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="div-check" >
                                                                        <img src="./booking-form/img/checking.gif" id="checking"/>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <div id="dismessage" align="center"></div>
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
                </div>
            </div>
        </section>

        <section>
            <div class=" gray "  style="padding-top: 10px;padding-bottom: 35px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 column">
                            <div class="shoping-detail-sec">
                                <div class="row"> 
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="related-products">
                                                <h3 class="mini-title">Related Tour Packages</h3>
                                                <div class="row" id="related-carousel">
                                                    <?php
                                                    $TOUR_PACKAGE = new TourPackage(NULL);
                                                    foreach ($TOUR_PACKAGE->getTourPackagesByType($TOUR_TYPES->id) as $tour_package) {
                                                        ?>
                                                        <div class="col-md-3"> 
                                                            <div class="product-box">
                                                                <div class="product-thumb">
                                                                    <img src="upload/tour-package/<?php echo $tour_package['image_name'] ?>" alt="" />
                                                                    <a href="view-tour-package.php?id=<?php echo $tour_package['id'] ?>" title="">VIEW PACKAGE</a>
                                                                </div>
                                                                <h3> 
                                                                    <a href="view-tour-package.php?id=<?php echo $tour_package['id'] ?>">  
                                                                        <?php echo $tour_package['title'] ?>
                                                                    </a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
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

    <!--booking form script-->
    <script src="js/tour-package.js" type="text/javascript"></script>

</body>
</html>