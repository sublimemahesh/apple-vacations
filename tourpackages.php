<!DOCTYPE html>
<?php
include './class/include.php';
$id = '';
$id = $_GET['id'];
$TOUR_TYPES = new TourType($id);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
        <meta name="author" content="Ansonika">
        <title>Apple Vacations - <?php echo $TOUR_TYPES->name ?></title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/logo_fvg.jpg" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Fjalla One,Roboto:300,300italic,400,400italic,500,500italic,700,700italic' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Fjalla One' rel='stylesheet'>
        <!-- CSS -->
        <link href="css/base.css" rel="stylesheet">

        <!-- Radio and check inputs -->
        <link href="css/skins/square/grey.css" rel="stylesheet"> 
        <!-- Range slider -->
        <link href="css/ion.rangeSlider.css" rel="stylesheet">
        <link href="css/ion.rangeSlider.skinFlat.css" rel="stylesheet"> 

    </head>

    <body> 

        <div class="layer"></div>
        <!-- Mobile menu overlay mask -->

        <!-- Header -->
        <?php include './header.php'; ?>
        <!-- End Header -->

        <section class="parallax-window" data-parallax="scroll" data-image-src="img/tour.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-1">
                <div class="animated fadeInDown">
                    <h1><?php echo $TOUR_TYPES->name ?></h1>
                    <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
                </div>
            </div>
        </section>
        <!-- End section -->

        <main>
            <div id="position">
                <div class="container">
                    <ul>
                        <li><a href="index.php">Home<i class="fa fa-angle-right fa-i"></i></a>
                        </li>
                        <li><a href="#"><?php echo $TOUR_TYPES->name ?></a> </li>
                    </ul>
                </div>
            </div> 


            <div class="container margin_60_7" > 
                <div class="row">
                    <?php
                    $TOUR_PACKAGE = new TourPackage(NULL);
                    foreach ($TOUR_PACKAGE->getTourPackagesByType($id) as $tour_package) {
                        ?>
                        <div class="col-md-4"  >
                            <div class="  wow zoomIn" data-wow-delay="0.1s">
                                <div class="tour_container"> 
                                    <div class="img_container">
                                        <a href="view-tourpackage.php?id=<?php echo $tour_package['id'] ?>&type=<?php echo $id ?>">
                                            <img src="upload/tour-package/<?php echo $tour_package['image_name'] ?>" width="800" height="533" class="img-responsive" alt="image">
                                            <div class="short_info">
                                                <i class="icon_set_1_icon-30"></i>Working Tours                                    
                                            </div>
                                        </a>
                                    </div>

                                    <div class="tour_title">
                                        <a href="view-tourpackage.php?id=<?php echo $tour_package['id'] ?>&type=<?php echo $id?>">
                                            <h3 class="tour-padd"><strong> <?php echo $tour_package['title'] ?></strong> </h3>
                                        </a>
                                        <p>
                                        <?php echo substr($tour_package['short_description'], 0, 120) ?>...
                                        </p>
                                        <a href="view-tourpackage.php?id=<?php echo $tour_package['id'] ?>&type=<?php echo $id?>">
                                            <div class="pull-right" style="margin-top: -20px;">
                                                <b> Read More</b> 
                                            </div> 
                                        </a>
                                    </div> 
                                </div>
                            </div> 
                        </div>
                    <?php } ?>
                </div> 
            </div>       
        </main>
        <!-- End main -->

        <?php include './footer.php' ?>
        <!-- End footer -->

        <div id="toTop"><i class="fa fa-arrow-up"></i></div>

        <!-- Common scripts -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>  
    </body>
</html>