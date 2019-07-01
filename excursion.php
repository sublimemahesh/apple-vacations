<!DOCTYPE html>
<?php
include './class/include.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
        <meta name="author" content="Ansonika">
        <title>Apple Vacations - Excursion</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/logo_fvg.jpg" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

        <link href='https://fonts.googleapis.com/css?family=Fjalla One,Roboto:300,300italic,400,400italic,500,500italic,700,700italic' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Fjalla One' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <!-- Header  -->
        <?php include './header.php'; ?>
        <!-- End Header -->

        <section class="parallax-window" data-parallax="scroll" data-image-src="img/excursion.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-1">
                <div class="animated fadeInDown">
                    <h1>Excursions</h1>
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
                        <li><a href="#">Excursions</a>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- Position -->

            <div class="container margin_60_7" > 
                <div class="row">
                    <?php
                    $ATTRACTION = new Attraction(NULL);
                    foreach ($ATTRACTION->all() as $attraction) {
                        ?>
                        <div class="col-md-4"  >
                            <div class="  wow zoomIn" data-wow-delay="0.2s">
                                <div class="tour_container">
                                    <div class="img_container">
                                        <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>">
                                            <img src="upload/attraction/thumb/<?php echo $attraction['image_name'] ?>"  class="img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <a href="view-excursion.php?id=<?php echo $attraction['id'] ?>">
                                        <div class="tour_title">
                                            <h3><strong><?php echo $attraction['title'] ?> </strong> </h3>
                                            <div class="pull-right m-top" >
                                                <b> View More</b> 
                                            </div> 
                                        </div>
                                    </a>
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
        <!-- Back to top button -->


        <!-- Common scripts -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>

        <!-- Specific scripts -->
        <!-- Cat nav mobile -->
        <script src="js/cat_nav_mobile.js"></script>
        <script>
            $('#cat_nav').mobileMenu();
        </script>
        <!-- Check and radio inputs -->
        <script src="js/icheck.js"></script>
        <script>
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-grey',
                radioClass: 'iradio_square-grey'
            });
        </script>
        <!-- Map --> 
        <script src="js/infobox.js"></script>

    </body>
</html>