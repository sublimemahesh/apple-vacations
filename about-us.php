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
        <title>Apple Vacations -About us</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/logo_fvg.jpg" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
        <!-- Google web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Fjalla One,Roboto:300,300italic,400,400italic,500,500italic,700,700italic' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Fjalla One' rel='stylesheet'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- BASE CSS -->
        <link href="css/base.css" rel="stylesheet">
    </head>

    <body>  
   
        <div class="layer"></div>
        <!-- Mobile menu overlay mask -->

        <!-- Header -->
        <?php include './header.php'; ?>

        <!-- End Header -->

        <section class="parallax-window" data-parallax="scroll" data-image-src="img/about.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-1">
                <div class="animated fadeInDown">
                    <h1>Who are we?</h1>
                    <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
                </div>
            </div>
        </section>
        <!-- End Section -->

        <main>
            <div id="position">
                <div class="container">
                    <ul>
                        <li><a href="index.php">Home<i class="fa fa-angle-right fa-i"></i></a>
                        </li>
                        <li><a href="#">Who are we?</a>
                        </li>                        
                    </ul>
                </div>
            </div>
            <!-- End Position -->

            <div class="container margin_60_7"> 
                <div class="row"   >
                    <div class="col-md-6 col-sm-6   about-back"  >
                        <span>Sri Lanka Tour with us</span>
                        <h1 class="about-f"><span  class="about-f-color">Get started</span> your Tours</h1>
                        <div class="text-justify">
                            <?php echo $ABOUT_US->description ?>
                        </div> 
                    </div>
                    <div class="col-md-4 col-sm-6 about-f-img">                         
                        <img src="img/aboutus-optimized.jpg" class="img-responsive">                         
                    </div>
                    <div class="col-md-2 col-sm-6 about-back-color" >
                        <h3 class="text-center" style="font-weight: 700"><span>Why Book</span>  With Us?.</h3>
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
                            <h3><span>+ 1000</span> Customers</h3>
                            <p>
                                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="feature">
                            <i class="icon_set_1_icon-41"></i>
                            <h3><span>+120</span> Premium city tours</h3>
                            <p>
                                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class="row">
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="feature">
                            <i class="icon_set_1_icon-57"></i>
                            <h3><span>H24</span> Support</h3>
                            <p>
                                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="feature">
                            <i class="icon_set_1_icon-61"></i>
                            <h3><span>10 Languages</span> available</h3>
                            <p>
                                Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor imperdiet deterruisset, doctus volumus explicari qui ex, appareat similique an usu.
                            </p>
                        </div>
                    </div>
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