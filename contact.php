<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="creativelayers">

    <title>Contact - Apple vacation</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="css/line-awesome.min.css" type="text/css" /><!-- Icons -->

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors/colors.css" type="text/css" /><!-- color -->		

    <link rel="shortcut icon" type="image/png" href="images/logo.png"/>

</head>
<body>
    <div class="page-loading">
        <div class="loadery"></div>
    </div>
    <div class="theme-layout">

        <!--Mobile Header-->
        <?php include './mobile-header.php'; ?>
        <!--Mobile Header-->

        <?php include './page-header.php'; ?>

        <section>
            <div class="block-in-pages banner-image " >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner-header">
                                <h2>Contact</h2>
                                <ul class="breadcrumbs">
                                    <li><a href="#" title="">Home</a></li>
                                    <li><a href="#" title="">Contact</a></li> 
                                </ul>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block gray pt0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-map">
                            <div id="map-container">
                                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3027715516478!2d79.87227641477318!3d6.973560894962106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25887f8019063%3A0x26e34665bca049a0!2sAPPLE+VACATIONS+(PVT)+Ltd!5e0!3m2!1sen!2slk!4v1520781827115" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 column">
                            <h3 class="mini-title">Form</h3>
                            <div class="contactus-form"  id="contact">
                                <div id="message"></div>
                                <form method="post" action="https://grandetest.com/theme/prolist-html/contact.php" name="contactform" id="contactform">
                                    <div class="row">
                                        <div class="col-md-6"><input name="name" type="text" id="name" placeholder="Name" /></div>
                                        <div class="col-md-6"><input  name="email" type="text" id="email" placeholder="Email"  /></div>
                                        <div class="col-md-12"><input type="text" placeholder="Subject" /></div>
                                        <div class="col-md-12"><textarea name="comments" id="comments" placeholder="Message"></textarea></div>
                                        <div class="col-md-12"><input type="submit" id="submit" value="send message" /></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 column">
                            <div class="contact-info-box">
                                <h3 class="mini-title">Contact Information</h3>
                                <div class="contact-box">
                                    <ul>
                                        <li>
                                            <i class="la la-map-marker"></i>
                                            <h4>Address</h4>
                                            <span>Apple vacations(PVT) Ltd. </span>
                                            <span>162 1/1 Vystwyke Road,
                                                Colombo 15.</span>
                                        </li>
                                        <li>
                                            <i class="la la-phone"></i>
                                            <h4>Phone Number</h4>
                                            <span>(+94) 11 433 8831 </span>
                                            <span>(+94) 76 281 6641</span>
                                        </li>

                                        <li>
                                            <i class="la la-envelope-o"></i>
                                            <h4>Email</h4>
                                            <span>
                                                <a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e171018113e1a11131f1710501d1113">info@applevacations.com.co
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
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
    <script type="text/javascript" src="js/sumoselect.js"></script><!-- Nice Select -->
    <script type="text/javascript" src="js/choosen.min.js"></script><!-- Nice Select -->
    <script type="text/javascript" src="js/rangeslider.js"></script><!-- Nice Select -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&amp;callback=initMap"type="text/javascript"></script>

    <script type="text/javascript" src="js/maps3.js"></script><!-- Nice Select -->
    <script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- Form -->

</body>
</html>