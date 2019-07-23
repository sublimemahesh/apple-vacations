<!DOCTYPE html>
<?php
include './class/include.php';
$id = '';
$id = $_GET['id'];
$ATTRACTION = new Attraction($id);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
        <meta name="author" content="Ansonika">
        <title>Apple Vacations - <?php echo $ATTRACTION->title ?></title>

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

        <!-- Header -->
        <?php include './header.php'; ?>
        <!-- End Header -->

        <section class="parallax-window" data-parallax="scroll" data-image-src="img/tour.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <h1><?php echo $ATTRACTION->title ?></h1>
                            <span>Lorem ipsum dolor sit amet, at omnes deseruisse pri</span>
                        </div> 
                    </div>
                </div>
            </div>
        </section>

        <main>
            <div id="position">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xs-6 ">
                            <ul>
                                <li><a href="index.php">Home<i class="fa fa-angle-right fa-i"></i></a>
                                </li>
                                <li><a href="excursion.php">Excursion<i class="fa fa-angle-right fa-i"></i></a>
                                </li>
                                <li><?php echo $ATTRACTION->title ?></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-6 view-ul-top " >
                            <ul class="ul-style"  >
                                <li>
                                    <a href="#"  class="view-ul">Related Excursion </a>
                                    <ul class="dropdown">
                                        <?php
                                        $ATTRACTIONS = new Attraction(NULL);
                                        foreach ($ATTRACTIONS->all() as $attraction) {
                                            if ($attraction['id'] != $ATTRACTION->id) {
                                                ?>
                                        <li><a href="view-excursion.php?id=<?php echo $attraction['id'] ?>"  class="view-drop"><strong><?php echo $attraction['title'] ?></strong></a>   </li> 
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


            <div class="container margin_60_7">
                <div class="row">
                    <div class="col-md-12" id="single_tour_desc">
                        <p class="visible-sm visible-xs">
                            <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                        </p>

                        <div id="Img_carousel" class="slider-pro">
                            <div class="sp-slides">
                                <?php
                                $ATTRACTION_PHOTO = new AttractionPhoto(NULL);
                                foreach ($ATTRACTION_PHOTO->getAttractionPhotosById($id) as $attraction_photo) {
                                    ?>
                                    <div class="sp-slide">
                                        <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/1_medium.jpg" data-small="img/slider_single_tour/1_small.jpg" data-medium="upload/attraction/gallery/<?php echo $attraction_photo['image_name'] ?>" data-large="img/slider_single_tour/1_large.jpg" data-retina="img/slider_single_tour/1_large.jpg">
                                        <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
                                            <?php echo $attraction_photo['caption'] ?>
                                        </p>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="sp-thumbnails">
                                <?php
                                $ATTRACTION_PHOTO = new AttractionPhoto(NULL);
                                foreach ($ATTRACTION_PHOTO->getAttractionPhotosById($id) as $attraction_photo) {
                                    ?>
                                    <img alt="Image" class="sp-thumbnail" src="upload/attraction/gallery/thumb/<?php echo $attraction_photo['image_name'] ?>">
                                <?php } ?>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-12">
                                <h3>Description</h3>
                                <p class="text-justify">
                                    <?php echo $ATTRACTION->description ?>
                                </p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>

        </main>
        <!-- End main -->

        <?php include './footer.php' ?>

        <div id="toTop"><i class="fa fa-arrow-up"></i></div>
        <!-- Back to top button -->



        <!-- Common scripts -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <!-- Specific scripts -->
        <script src="js/icheck.js"></script>

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

        <script src="js/infobox.js"></script>
    </body>
</html>