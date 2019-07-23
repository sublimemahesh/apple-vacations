<!DOCTYPE html>
<?php
include './class/include.php';
$ABOUT_US = new Page(1);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
        <meta name="author" content="Ansonika">
        <title>Apple Vacations - Home</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/logo_fvg.jpg" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
        <link href="js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <!-- Google web fonts -->
         
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Pavanam' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- BASE CSS -->
        <link href="css/base.css" rel="stylesheet">

        <!-- REVOLUTION SLIDER CSS -->
        <link href="rs-plugin/css/settings.css" rel="stylesheet">
        <link href="css/extralayers.css" rel="stylesheet">
        <link href="css/finaltilesgallery.css" rel="stylesheet">
        <link href="css/lightbox2.css" rel="stylesheet"> 
        <link href="css/comment.css" rel="stylesheet" type="text/css"/>

        <!-- REVOLUTION SLIDER CSS -->
        <link href="layerslider/css/layerslider.css" rel="stylesheet">
        <link href="layerslider/skins/v5/skin.css" rel="stylesheet" type="text/css"/>
       
    </head>

    <body>  
        <div class="layer"></div>
        <!-- Mobile menu overlay mask -->

        <!-- Header-->
        <?php include './header.php'; ?>
        <!-- End Header -->

        <main>
            <?php include './slider.php' ?>
            <!-- END REVOLUTION SLIDER -->

            <!--search-->
            <section id="search_container"  >
                <div id="search"> 
                    <div class="tab-content">
                        <div class="tab-pane active" id="tours"> 
                            <div class="row hidden-xs">
                                <div class="col-md-2  search-bar-top-padd"  >                                   
                                    <span class="search-bar-padd text-center" ><p >My Dream Holiday</p></span>
                                </div>
                                <div class="col-md-2  "> 
                                    <input type="text" class="form-control" id="firstname_booking" name="firstname_booking" placeholder="Type your search terms">
                                </div>
                                <div class="col-md-3  ">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="firstname_booking" name="firstname_booking" placeholder="Type your search terms">
                                    </div>
                                </div>
                                <div class="col-md-3  ">
                                    <div class="form-group"> 
                                        <select class="ddslick" name="category">
                                            <option value="0" data-imagesrc="img/icons_search/sightseeing.png" selected>All tours</option>
                                            <option value="1" data-imagesrc="img/icons_search/sightseeing.png">City sightseeing</option>
                                            <option value="2"  data-imagesrc="img/icons_search/museums.png">Museum tours</option>
                                            <option value="3" data-imagesrc="img/icons_search/historic.png">Historic Buildings</option>
                                            <option value="4" data-imagesrc="img/icons_search/walking.png">Walking tours</option>
                                            <option value="5" data-imagesrc="img/icons_search/eat.png">Eat & Drink</option>
                                            <option value="6" data-imagesrc="img/icons_search/churches.png">Churces</option>
                                            <option value="7" data-imagesrc="img/icons_search/skyline.png">Skyline tours</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2  col-xs-4">
                                    <button class="btn_1 green"><i class="icon-search"></i>Search now</button>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>
            </section>

            <!--About us -->
            <div class="container margin_60">
                <div class="main_title">
                    <h2>Discover <span>Sri Lanka With </span> Apple Vacation</h2>
                    <p>
                        Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                    </p>
                </div> 
                <div class="row"   >
                    <div class="col-md-6 col-sm-6  about-back"  >
                        <span>Sri Lanka Tour with us</span>
                        <h1 class="about-f"><span  class="about-f-color">Get started</span> your Tours</h1>
                        <div class="text-justify">
                            <?php echo $ABOUT_US->description ?>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="btn_1 about-f-btn">About Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 hidden-xs about-f-img">                         
                        <img src="img/aboutus-optimized.jpg" class="img-responsive">                         
                    </div>
                    <div class="col-md-2 col-sm-6 hidden-xs  about-back-color" >
                        <h3 class="text-center about-f-w"  ><span>Why Book</span>  With Us?.</h3>
                        <ul  class="about-back-color-padd">
                            <li  class="about-li">Lorem ipsum dolor</li>
                            <li  class="about-li">Lorem ipsum dolor</li>
                            <li class="about-li">Lorem ipsum dolor</li>
                            <li class="about-li">Lorem ipsum dolor</li>
                            <li class="about-li">Lorem ipsum dolor</li>
                            <li class="about-li">Lorem ipsum dolor</li>
                            <li class="about-li">Lorem ipsum dolor</li>
                            <li class="about-li">Lorem ipsum dolor</li>  
                        </ul>   
                    </div>
                </div>
                <hr> 
                <div class="row">
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="feature">
                            <i class="icon_set_1_icon-30"></i>
                            <h3><span>Vision</span> Apple Vacations </h3>
                            <p>
                                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, 
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="feature">
                            <i class="icon_set_1_icon-41"></i>
                            <h3><span>Mission</span> Apple Vacations </h3>
                            <p>
                                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                            </p>
                        </div>
                    </div>
                </div>  
            </div>

            <!--Tour Packages-->
            <div class="container-fluid margin_60_2 img-paralax">
                <div class="row">
                    <div class="main_title " >
                        <h2 class="color-white">Popular <span>Top</span> Tour Packages </h2>
                        <p  class="color-white">  Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.</p>
                    </div>

                    <div class="owl-carousel tour">
                        <?php
                        $TOUR_PACKAGE = new TourPackage(NULL);
                        foreach ($TOUR_PACKAGE->all() as $tour_package) {
                            ?>
                            <div class="  wow zoomIn" data-wow-delay="0.1s">
                                <div class="tour_container"> 
                                    <div class="img_container">
                                        <a href="#">
                                            <img src="upload/tour-package/<?php echo $tour_package['image_name'] ?>" width="800" height="533" class="img-responsive" alt="image">
                                        </a>
                                    </div>

                                    <div class="tour_title">
                                        <a href="#">
                                            <h3 class="tour-padd"><strong> <?php echo $tour_package['title'] ?></strong> </h3>
                                        </a>
                                        <p>
                                            <?php echo substr($tour_package['short_description'], 0, 120) ?>...
                                        </p>
                                        <a href="#">
                                            <div class="pull-right" style="margin-top: -20px;">
                                                <b> Read More</b> 
                                            </div> 
                                        </a>
                                    </div> 
                                </div>
                            </div> 
                        <?php } ?>
                    </div>
                </div>
            </div> 

            <!--Gallery-->
            <div class="container margin_60_9 "> 
                <div class="  wow fadeIn" data-wow-delay="0.1s">
                    <div class="row "> 
                        <div class="container margin_60">
                            <div class="main_title"> 

                                <h2>Some <span>Images</span> From Travellers</h2>
                                <p>
                                    Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                                </p>
                            </div> 
                            <div id="gallery" class="final-tiles-gallery  effect-dezoom effect-fade-out caption-top social-icons-right">
                                <div class="ftg-filters text-center">
                                    <a href="#ftg-set-ftgall"  class="selected tour-new"  >All</a>
                                    <a href="#ftg-set-rome"  class="  tour-new" >Cultural </a> 
                                    <a href="#ftg-set-milan"  class="  tour-new" >Adventure </a> 
                                </div>
                                <div class="ftg-items">
                                    <div class="tile ftg-set-rome ftg-set-milan">
                                        <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="img/gallery/1.jpg">
                                            <img class="item" src="img/gallery/1.jpg" data-src="img/gallery/1.jpg" alt="Image">
                                            <span class='title'>Tour Title 1</span> 
                                        </a> 
                                    </div> 

                                    <div class="tile ftg-set-rome">
                                        <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="img/gallery/2.jpg">
                                            <img class="item" src="img/gallery/2.jpg" data-src="img/gallery/2.jpg" alt="Image">
                                            <span class='title'>Tour Title 2</span> 
                                        </a> 
                                    </div> 

                                    <div class="tile   ftg-set-rome">
                                        <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="img/gallery/3.jpg">
                                            <img class="item" src="img/gallery/3.jpg" data-src="img/gallery/3.jpg" alt="Image">
                                            <span class='title'>Tour Title 3</span> 
                                        </a> 
                                    </div> 

                                    <div class="tile   ftg-set-milan">
                                        <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="img/gallery/4.jpg">
                                            <img class="item" src="img/gallery/4.jpg" data-src="img/gallery/4.jpg" alt="Image">
                                            <span class='title'>Tour Title 4</span> 
                                        </a> 
                                    </div> 

                                    <div class="tile ftg-set-florence  ">
                                        <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="img/gallery/5.jpg">
                                            <img class="item" src="img/gallery/5.jpg" data-src="img/gallery/5.jpg" alt="Image">
                                            <span class='title'>Tour Title 5</span> 
                                        </a> 
                                    </div> 

                                    <div class="tile ftg-set-rome ftg-set-florence">
                                        <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="img/gallery/6.jpg">
                                            <img class="item" src="img/gallery/6.jpg" data-src="img/gallery/6.jpg" alt="Image">
                                            <span class='title'>Tour Title 6</span> 
                                        </a> 
                                    </div> 

                                    <div class="tile  ftg-set-florence">
                                        <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="img/gallery/7.jpg">
                                            <img class="item" src="img/gallery/7.jpg" data-src="img/gallery/7.jpg" alt="Image">
                                            <span class='title'>Tour Title 7</span> 
                                        </a>                                         
                                    </div> 
                                    <div class="tile  ftg-set-milan">
                                        <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="img/gallery/8.jpg">
                                            <img class="item" src="img/gallery/8.jpg" data-src="img/gallery/8.jpg" alt="Image">
                                            <span class='title'>Adventure</span> 
                                        </a>                                         
                                    </div> 
                                    <div class="tile  ftg-set-milan">
                                        <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="img/gallery/9.jpg">
                                            <img class="item" src="img/gallery/9.jpg" data-src="img/gallery/9.jpg" alt="Image">
                                            <span class='title'>Adventure</span> 
                                        </a>                                         
                                    </div> 
                                    <div class="tile  ftg-set-milan">
                                        <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="img/gallery/10.jpg">
                                            <img class="item" src="img/gallery/10.jpg" data-src="img/gallery/10.jpg" alt="Image">
                                            <span class='title'>Adventure</span> 
                                        </a>                                         
                                    </div> 
                                    <div class="tile  ftg-set-milan">
                                        <a class="tile-inner" data-title="Lorem ipsum" data-lightbox="gallery" href="img/gallery/11.jpg">
                                            <img class="item" src="img/gallery/11.jpg" data-src="img/gallery/11.jpg" alt="Image">
                                            <span class='title'>Adventure</span> 
                                        </a>                                         
                                    </div>  
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div> 

            <!--Excursion-->
            <div class="container-fluid  margin_60_4 img-paralax-comment ">
                <div class="row"> 
                    <div class="container margin_60">
                        <div class="main_title"> 
                            <h2 class="color-white">Popular <span>Top</span> Excursion </h2>
                            <p  class="color-white">  Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.</p>
                        </div> 
                    </div>  
                    <div class="owl-carousel excursion">
                        <?php
                        $ATTRACTION = new Attraction(NULL);
                        foreach ($ATTRACTION->all() as $attraction) {
                            ?> 
                            <div class="  wow zoomIn" data-wow-delay="0.2s">
                                <div class="tour_container2">
                                    <div class="img_container">
                                        <a href="#">
                                            <img src="upload/attraction/<?php echo $attraction['image_name'] ?>"  class="img-responsive" alt="image">
                                        </a>
                                    </div>
                                    <a href="#">
                                        <div class="tour_title">
                                            <h3><strong><?php echo $attraction['title'] ?> </strong> </h3>
                                            <div class="pull-right m-top" >
                                                <b> View More</b> 
                                            </div> 
                                        </div>
                                    </a>
                                </div> 
                            </div>  
                        <?php } ?>
                    </div> 
                </div> 
            </div>  

            <!--Comment-->
            <div class="container-fluid  margin_60  "> 
                <div class="  wow fadeIn" data-wow-delay="0.1s">
                    <div class="container margin_60">
                        <div class="main_title">
                            <h2>What do our <span>clients</span> have to say about us?</h2>
                            <p>
                                Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                            </p>
                        </div> 
                    </div> 

                    <div class="row">
                        <div class="col-md-2"> 
                        </div>
                        <div class="col-md-8"> 
                            <div class="  col-center m-auto">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                                    <div class="carousel-inner">
                                        <?php
                                        $COMMENT = new Comments(NULL);
                                        foreach ($COMMENT->activeComments() as $key => $comments) {
                                            if ($key == 0) {
                                                ?>
                                                <div class="item carousel-item active">
                                                    <div class="img-box"><img src="upload/comments/<?php echo $comments['image_name'] ?>" alt=""></div>
                                                    <span class="testimonial"> <?php echo $comments['comment'] ?></span> 
                                                    <p class="overview"><b><?php echo $comments['name'] ?></b>, <?php echo $comments['country'] ?></p>
                                                </div>
                                            <?php } else { ?>
                                                <div class="item carousel-item">
                                                    <div class="img-box"><img src="upload/comments/<?php echo $comments['image_name'] ?>" alt=""></div>
                                                    <span class="testimonial text-center"> <?php echo $comments['comment'] ?></span>
                                                    <p class="overview"><b><?php echo $comments['name'] ?></b>, <?php echo $comments['country'] ?></p>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>

                                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>

                            </div>                                 		                            
                        </div>
                        <div class="col-md-2"> 
                        </div>
                    </div>
                </div> 
            </div>  
        </main>
        <!-- End main -->

        <?php include './footer.php' ?>

        <div id="toTop"><i class="fa fa-arrow-up"></i></div>
        <!-- Back to top button --> 
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>         
        <!-- Specific scripts -->

        <script src="js/icheck.js"></script>
        <script src="js/jquery.sliderPro.min.js"></script> 
        <script src="js/infobox.js"></script>        
        <script src="js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js" type="text/javascript"></script>
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="js/revolution_func.js"></script>
        <script src="js/notify_func.js"></script>
        <script src="js/custom.js" type="text/javascript"></script>

        <!-- SLIDER REVOLUTION SCRIPTS  --> 
        <script src="layerslider/js/greensock.js"></script>
        <script src="layerslider/js/layerslider.transitions.js"></script>
        <script src="layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                'use strict';
                $('#layerslider').layerSlider({
                    autoStart: true,
                    responsive: true,
                    responsiveUnder: 1280,
                    layersContainer: 1170,
                    skinsPath: 'layerslider/skins/',
                      
                });
            });
        </script>

        <script type="text/javascript" src="js/pop_up.min.js"></script> 
        <script src="js/jquery.finaltilesgallery.js"></script>
        <script src="js/lightbox2.js"></script>
        <script>
            $(function () {
                'use strict';

                $(".final-tiles-gallery").finalTilesGallery();
            });
        </script> 
        <script src="js/jquery.ddslick.js"></script>
        <script>
            $("select.ddslick").each(function () {
                $(this).ddslick({
                    showSelectedHTML: true
                });
            });
        </script>



      


</html>