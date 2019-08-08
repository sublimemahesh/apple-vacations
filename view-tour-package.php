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
                                    <li><a href=" " title=""><?php echo $TOUR_TYPES->name ?></a></li>  
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
                                                            <?php
                                                            $TOUR_DATE = new TourDate(NULL);
                                                            foreach ($TOUR_DATE->getTourDatesById($id) as $key => $tour_date) {
                                                                ?>
                                                            <li><img src="upload/tour-package/date/<?php echo $tour_date['image_name'] ?>" alt="" /> </li> 
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                    <?php echo $TOUR_PACKAGE->description ?>  
                                                </div>
                                                <div id="itinerary" class="tab-content">
                                                    <?php
                                                    foreach ($TOUR_DATE->getTourDatesById($id) as $key => $tour_date) {
                                                        $key++;
                                                        ?>
                                                        <div class="faqs-box">
                                                            <h3><span class="day-color">DAY <?php echo $key ?></span> - <?php echo $tour_date['title'] ?></h3>
                                                            <div class="content-faq">
                                                                <p>Upon Arrival to the Sri Lankan International Airport be greeted by your chauffer guide who shall take you by air conditioned vehicle to Negombo. This trip will take you only 20 minutes. </p>
                                                            </div>
                                                        </div> 
                                                    <?php } ?> 
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
                                                    <div class="add-review-box">
                                                        <div class="add-review-form">
                                                            <div class="form-type">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >Your Name <span class="red">*</span></label>
                                                                        <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater" placeholder="">
                                                                        <span id="spanFullName"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >Your Email <span>*</span> </label>
                                                                        <input type="email" name="txtEmail" id="txtEmail" class="form-control input-validater"  placeholder="">
                                                                        <span id="spanEmail"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >Contact Number <span class="red">*</span></label>
                                                                        <input type="tel" class="form-control input-validater" id="txtPhone" name="txtPhone" placeholder="">
                                                                        <span id="spanPhone"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >Country <span class="red">*</span></label>
                                                                        <input type="text" class="form-control input-validater" id="txtCountry" name="txtCountry" placeholder="">
                                                                        <span id="spanCountry"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >Tour Package <span class="red">*</span></label>
                                                                        <input type="text" class="form-control input-validater" id="txtTour" name="txtTour" value="<?php echo $TOUR_PACKAGE->title ?>">
                                                                        <span id="spanTour"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >Airport Pickup <span class="red">*</span></label>
                                                                        <select class="form-control h-booking input-validater" id="txtAirport" name="txtAirport">
                                                                            <option value="">
                                                                                -- Please Select one --
                                                                            </option>
                                                                            <option> Yes </option>
                                                                            <option> No </option>
                                                                        </select>
                                                                        <span id="spanAirport"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >Check In <span class="red">*</span></label>
                                                                        <input type="date" class="form-control input-validater datepicker hasDatepicker" id="txtCheckIn" name="txtCheckIn" placeholder="dd-mm-yy">
                                                                        <span id="spanCheckIn"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >Check Out <span class="red">*</span></label>
                                                                        <input type="date" class="form-control input-validater datepicker hasDatepicker" id="txtCheckOut" name="txtCheckOut" placeholder="dd-mm-yy">
                                                                        <span id="spanCheckOut"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >No of Adults <span class="red">*</span></label>
                                                                        <input type="number" class="form-control input-validater" id="txtAdult" name="txtAdult" min="0">
                                                                        <span id="spanAdult"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label >No of Children <span class="red">*</span></label>
                                                                        <input type="number" class="form-control input-validater" id="txtChild" name="txtChild" min="0">
                                                                        <span id="spanChild"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="comment" id="form-label">Security Code:<span class="red">*</span></label>
                                                                    <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Security code >> ">
                                                                    <span id="capspan" ></span>
                                                                </div>
                                                                <div class="col-md-3"> 
                                                                    <label></label>
                                                                    <span><?php include("./booking-form/captchacode-widget.php"); ?></span>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="div-check" >
                                                                        <img src="./booking-form/img/checking.gif" id="checking"/>
                                                                    </div> 
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <button type="submit" id="btnSubmit" class="btn submit-booking">Enquiry Now</button>
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
    <script>
        $(function () {
            $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
        });
    </script> 
</body>
</html>