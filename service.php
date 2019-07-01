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
        <title>Apple Vacations - Services</title>

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
        <link href="service-form/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body> 

        <div class="layer"></div>
        <!-- Mobile menu overlay mask -->
        <!-- Header  -->
        <?php include './header.php'; ?>
        <!-- End Header -->

        <section class="parallax-window" data-parallax="scroll" data-image-src="img/service.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-1">
                <div class="animated fadeInDown">
                    <h1>Services</h1>
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
                        <li><a href="#">Services</a>
                        </li> 
                    </ul>
                </div>
            </div>
            <!-- Position -->


            <div class="container  margin_60_8 " > 
                <div class="row" > 
                    <?php
                    $SERVICE = new Service(NULL);
                    foreach ($SERVICE->all() as $service) {
                        ?>
                        <div class="col-md-6 col-xs-6 service-btm">
                            <div class="  wow zoomIn" data-wow-delay="0.1s">
                                <div class="img_container">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="img/family-fun.jpg" alt="">
                                        <div class="overlay">
                                            <h2><?php echo $service['title'] ?></h2>
                                            <a   href="#" class="btn_map add_bottom_30 info" data-toggle="modal" data-target="#service">  <button type="submit" class="btn btn-warning btn-sm">INQUIRE NOW</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="boarder-style"> 
                                    <p>
                                        <?php echo $service['short_description'] ?>   
                                    </p>

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

        <div class="modal fade" id="service" tabindex="-1" role="dialog" aria-labelledby="serviceLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h3 class="modal-title text-center" id="serviceLabel">Fill Your Details.</h3>
                    </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input name="txtFirstName" id="txtFirstName" type="text" placeholder="Your name" class="form-control">
                                    <div class="col-lg-12">
                                        <span id="spanFirstName"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="txtLastName" id="txtLastName" type="text" placeholder="Your last name" class="form-control">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="txtEmails" id="txtEmails" type="email" placeholder="Your email" class="form-control">
                                    <div class="col-lg-12">
                                        <span id="spanEmails"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone </label>
                                    <input name="txtPhone" id="txtPhone" type="text" placeholder="Your phone" class="form-control">
                                    <div class="col-lg-12">
                                        <span id="spanPhone"></span>
                                    </div>
                                </div>
                            </div>
                        </div>                         


                        <!-- End row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input name="txtSubjects" id="txtSubjects" type="text" placeholder="Your Subject" class="form-control">
                                    <div class="col-lg-12">
                                        <span id="spanSubjects"></span>
                                    </div>
                                </div>
                            </div> 
                        </div>  

                        <!-- End row -->
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="txtMessages" id="txtMessages" class="form-control"  rows="8" placeholder="Write your review"></textarea>
                            <div class="col-lg-12">
                                <span id="spanMessages"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xs-6"  >
                                <div class="form-group">
                                    <label for="comment">Security Code:</label>
                                    <input  type="text" name="captchacodes" id="captchacodes" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                    <span id="capspans" ></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-6"  >
                                <div class="form-group">
                                    <?php include("./service-form/captchacode-widget.php"); ?>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Submit" class="btn_1" id="Submit">

                    </div>
                </div>
            </div>
        </div>
        <!-- Common scripts -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>

        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <!-- Specific scripts -->
        <!-- Cat nav mobile -->
        <script src="js/cat_nav_mobile.js"></script>
        <script src="service-form/service-scripts.js" type="text/javascript"></script>

    </body>
</html>