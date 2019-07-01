<!DOCTYPE html>
<?php
include './class/include.php';
$id = '';
$id = $_GET['id'];
$type = $_GET['type'];
$TOUR_TYPES = new TourType($type);
$TOUR_PACKAGE = new TourPackage($id);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
        <meta name="author" content="Ansonika">
        <title>Apple Vacations - Tour Package Name</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/logo_fvg.jpg" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png"> 
        <!-- Google web fonts -->
        <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS -->
        <link href="css/base.css" rel="stylesheet">

        <!-- CSS -->
        <link href="css/slider-pro.min.css" rel="stylesheet">
        <link href="css/date_time_picker.css" rel="stylesheet">


    </head>

    <body> 

        <div class="layer"></div>
        <!-- Mobile menu overlay mask -->

        <!-- Header -->
        <?php include './header.php'; ?>
        <!-- End Header -->

        <section class="parallax-window" data-parallax="scroll" data-image-src="img/tour.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h1><?php echo $TOUR_PACKAGE->title ?></h1>
                            <span>Lorem ipsum dolor sit amet, at omnes deseruisse pri</span>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- End section -->

        <main>
            <div id="position">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 ">
                            <ul>
                                <li><a href="index.php">Home<i class="fa fa-angle-right fa-i"></i></a>
                                </li>
                                <li><a href="tourpackages.php?id=<?php echo $TOUR_TYPES->id?>"><?php echo $TOUR_TYPES->name ?><i class="fa fa-angle-right fa-i"></i></a>
                                </li>
                                <li><?php echo $TOUR_PACKAGE->title ?></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-6 view-ul-top " >
                            <ul class="ul-style"  > 
                                <li>
                                    <a href="#"  class="view-ul"> Related Tour Packages </a>
                                    <ul class="dropdown">
                                        <?php
                                        $TOUR_PACKAGES = new TourPackage(NULL);
                                        foreach ($TOUR_PACKAGES->getTourPackagesByType($type) as $tour) {
                                            if ($tour['id'] != $TOUR_PACKAGE->id) {
                                                ?>
                                                <li><a href="view-tourpackage.php?id=<?php echo $tour['id'] ?>&type=<?php echo $type ?>"  class="view-drop"><?php echo $tour['title'] ?></a>   </li> 
                                                <?php
                                            }
                                        }
                                        ?>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Position -->


            <div class="collapse" id="collapseMap">
                <div id="map" class="map"></div>
            </div>
            <!-- End Map -->

            <div class="container margin_60">
                <div class="row">
                    <div class="col-md-8" id="single_tour_desc">

                        <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                        </p>
                        <!-- Map button for tablets/mobiles -->

                        <div id="Img_carousel" class="slider-pro">
                            <div class="sp-slides">
                                <?php
                                $TOUR_DATE = new TourDate(NULL);
                                foreach ($TOUR_DATE->getTourDatesById($id) as $tour_date) {
                                    ?>
                                    <div class="sp-slide">
                                        <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/1_medium.jpg" data-small="img/slider_single_tour/1_small.jpg" data-medium="upload/tour-package/date/<?php echo $tour_date['image_name'] ?>" data-large="upload/tour-package/date/<?php echo $tour_date['image_name'] ?>" data-retina="img/slider_single_tour/1_large.jpg">
                                        <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
                                            <?php echo $tour_date['title'] ?>
                                        </p>
                                    </div>
                                <?php }
                                ?>
                            </div>
                            <div class="sp-thumbnails">
                                <?php
                                $TOUR_DATE = new TourDate(NULL);
                                foreach ($TOUR_DATE->getTourDatesById($id) as $tour_date) {
                                    ?>
                                <img alt="Image" class="sp-thumbnail" src="upload/tour-package/date/<?php echo $tour_date['image_name'] ?>">
                                <?php }
                                ?>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>Description</h3>
                                <p class="text-justify">
                                    <?php echo $TOUR_PACKAGE->description ?>
                                </p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <!--End  single_tour_desc-->

                    <aside class="col-md-4">
                        <p class="hidden-sm hidden-xs">
                            <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                        </p>
                        <div class="box_style_1 expose">
                            <h3 class="inner">- Booking -</h3>
                            <form action="inquire.php" method="POST" > 
                                <div class="row">
                                    <div class="col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="fa fa-user"></i> Name</label>
                                            <input class="form-control"  name="txtFullName" type="text" placeholder="Name *" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-mail"></i> Email</label>
                                            <input class=" form-control"  name="txtEmail" type="email" placeholder="Email* " required="">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-calendar-7"></i>Check In </label>
                                            <input class="date-pick form-control" name="txtCheckIn" data-date-format="M d, D" type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-calendar-7"></i> Check Out</label>
                                            <input class="date-pick form-control" data-date-format="M d, D" type="text" name="txtCheckOut">
                                        </div>
                                    </div>                                
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <label><i class="icon-mobile"></i>Mobile Number </label>
                                            <input class="form-control"  name="txtContact" type="text" placeholder="mobile *" required="">
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Adults</label>
                                            <div class="numbers-row">
                                                <input type="text" value="1" id="adults" class="qty2 form-control" name="txtNumAduts">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="form-group">
                                            <label>Children</label>
                                            <div class="numbers-row">
                                                <input type="text" value="0" id="children" class="qty2 form-control" name="txtNumChilds">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>  
                                <input type="hidden" name="id" value="<?php echo $id ?>"/>
                                <button class="  btn_full_outline" type="submit"><i class=" icon-calendar-7"></i> Book now   </button>
                            </form>
                        </div>  
                    </aside>
                </div>
                <!--End row -->
                <?php
                $TOUR_DATE = new TourDate(NULL);
                foreach ($TOUR_DATE->getTourDatesById($id) as $tour_date) {
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="margin-top: 0px;"> <?php echo $tour_date['title'] ?></h3>
                            <p class="text-justify">
                                <?php echo $tour_date['description'] ?>
                            </p>
                        </div> 
                    </div>

                    <div class="row magnific-gallery   "> 
                        <?php
                        $TOUR_DATE_PHOTO = new TourDatePhoto(NULL);

                        foreach ($TOUR_DATE_PHOTO->getTourDatePhotosById($tour_date['id']) as $tour_date_photo) {
                            ?>
                            <div class="col-md-3 col-sm-4">
                                <div class="img_wrapper_gallery">
                                    <div class="img_container_gallery">
                                        <a href="upload/tour-package/date/gallery/<?php echo $tour_date_photo['image_name'] ?>" title="<?php echo $tour_date_photo['caption'] ?>"><img src="upload/tour-package/date/gallery/thumb/<?php echo $tour_date_photo['image_name'] ?>" alt="Image" class="img-responsive">
                                            <i class="icon-resize-full-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div> 
                    <hr>
                <?php } ?>
                <!--End container -->

                <div id="overlay"></div>
                <!-- Mask on input focus -->

        </main>
        <!-- End main -->

        <?php include './footer.php' ?>

        <div id="toTop"></div><!-- Back to top button -->


        <!-- Common scripts -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <!-- Specific scripts -->
        <script src="js/icheck.js"></script>
        <script>
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-grey',
                radioClass: 'iradio_square-grey'
            });
        </script>
        <!-- Date and time pickers -->
        <script src="js/jquery.sliderPro.min.js"></script>

        <!-- Date and time pickers -->
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script>
            $('input.date-pick').datepicker('setDate', 'today');
            $('input.time-pick').timepicker({
                minuteStep: 15,
                showInpunts: false
            });

            $('#Img_carousel').sliderPro({
                width: 960,
                height: 500,
                fade: true,
                arrows: true,
                buttons: false,
                fullScreen: false,
                smallSize: 500,
                startSlide: 0,
                mediumSize: 1000,
                largeSize: 3000,
                thumbnailArrows: true,
                autoplay: false
            });
        </script>

        <!--Review modal validation -->
        <script src="assets/validate.js"></script> 
        <!-- Map -->
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAUQKuq-IHkzCt4VoGq2z4XYJ_ip7ZRkws"></script>

        <script src="js/map.js"></script>
        <script src="js/infobox.js"></script>
    </body>
</html>