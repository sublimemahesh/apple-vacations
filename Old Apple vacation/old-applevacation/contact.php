<!DOCTYPE html>
<?php
include './class/include.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content=" ">
        <meta name="author" content=" ">
        <title>Apple Vacations -Contact us</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/logo_fvg.jpg" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Pavanam' rel='stylesheet'>
        <!-- CSS -->
        <link href="css/base.css" rel="stylesheet">

        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
    </head>

    <body> 

        <!-- Header -->
        <?php include './header.php'; ?>
        <!-- End Header -->
        <!-- end map-->
        <section class="parallax-window" data-parallax="scroll" data-image-src="img/contact.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-1">
                <div class="animated fadeInDown">
                    <h1>Contact Us</h1>
                    <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
                </div>
            </div>
        </section>

        <main> 
            <div id="position">
                <div class="container">
                    <ul>
                        <li><a href="index.php">Home<i class="fa fa-angle-right fa-i"></i></a>
                        </li>
                        <li><a href="#">Contact Us</a>
                        </li> 
                    </ul>
                </div>
            </div>
            <!-- End Position -->

            <div class="container margin_60_7">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="step"> 
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="txtFullName" id="txtFullName" placeholder="Enter Name">
                                        <div class="col-lg-12">
                                            <span id="spanFullName"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Enter Email">
                                        <div class="col-lg-12">
                                            <span id="spanEmail"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End row -->
                            <div class="row">                                    
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="txtSubject" id="txtSubject" class="form-control" placeholder="Enter Subject">
                                        <div class="col-lg-12">
                                            <span id="spanSubject"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea rows="5"  id="txtMessage" name="txtMessage" class="form-control" placeholder="Write your Message" style="height:200px;"></textarea>
                                        <div class="col-lg-12">
                                            <span id="spanMessage"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-xs-12"  >
                                    <label for="comment">Security Code:</label>
                                    <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                    <span id="capspan" ></span>
                                </div>
                                <div class="col-lg-6 col-xs-12"  >
                                    <?php include("./contact-form/captchacode-widget.php"); ?>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-xs-12 col-sm-12"  >
                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="btn_1" id="btnSubmit">
                                    </div>

                                </div> 
                            </div>
                            <div id="dismessage" align="center"></div>  
                        </div>
                    </div>
                    <!-- End col-md-8 -->

                    <div class="col-md-4 col-sm-4">
                        <div class="box_style_1">
                            <span class="tape"></span>
                            <h4>Address  </h4>
                            <p>
                                Apple vacations(PVT) Ltd.<br>
                                162 1/1 Vystwyke Road,<br>
                                Colombo 15. 
                            </p>
                            <hr>
                            <h4>Quick Contact  </h4>
                            <p>
                                If you have any questions simply use the following contact details.
                            </p>
                            <ul id="contact-info"> 
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=">
                                        <h3><img src="img/socia/001-whatsapp.png" alt="" class="f-marging">(+94) 11 433 8831 </h3>
                                    </a>
                                </li>
                                <li>
                                    <a href="viber://chat?number= ">
                                        <h3>
                                            <img src="img/socia/002-viber.png" alt="" class="f-marging"/> (+94) 76 281 6641  
                                        </h3> 
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="box_style_4">
                            <i class="icon_set_1_icon-57"></i>
                            <h4>Need <span>Help?</span></h4>
                            <a href="tel://004542344599" class="phone"> (+94) 77 256 58965 </a>
                            <small>Monday to Friday 9.00am - 7.30pm</small>
                        </div>
                    </div> 
                </div> 
            </div>
            <!-- End container -->
            <div id="" style="position: relative;overflow: hidden;width: 100%;height: 450px;background-color: #1e1a1aed;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3027715516478!2d79.87227641477318!3d6.973560894962106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25887f8019063%3A0x26e34665bca049a0!2sAPPLE+VACATIONS+(PVT)+Ltd!5e0!3m2!1sen!2slk!4v1520781827115" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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

        <!-- Specific scripts -->
        <script src="assets/validate.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAUQKuq-IHkzCt4VoGq2z4XYJ_ip7ZRkws"></script>

        <script src="js/map_contact.js"></script>
        <script src="js/infobox.js"></script> 
        <script src="contact-form/scripts.js" type="text/javascript"></script>

    </body>
</html>