<!DOCTYPE html>
<?php
include './class/include.php';
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=" ">

    <title>Contact - Apple vacation</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="css/line-awesome.min.css" type="text/css" /><!-- Icons -->

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors/colors.css" type="text/css" /><!-- color -->		

    <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
    <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="css/countrySelect.min.css" rel="stylesheet" type="text/css"/>
    
    <style> 


        div[class*='col-'] {
            padding: 0 30px;
        }

        .wrap {
            box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
            border-radius: 4px;
        }



        .panel {
            border-width: 0 0 1px 0;
            border-style: solid;
            border-color: #fff;
            background: none;
            box-shadow: none;
        }

        .panel:last-child {
            border-bottom: none;
        }

        .panel-group > .panel:first-child .panel-heading {
            border-radius: 4px 4px 0 0;
        }

        .panel-group .panel {
            border-radius: 0;
        }

        .panel-group .panel + .panel {
            margin-top: 0;
        }

        .panel-heading {
            background-color: #fff;
            border-radius: 0;
            border: none;
            color: #fff;
            padding: 0;
        }

        .panel-title a {
            display: block;
            color: #fff;
            padding: 15px;
            position: relative;
            font-size: 16px;
            font-weight: 400;
        }

        .panel-body {
            background: #fff;
        }

        .panel:last-child .panel-body {
            border-radius: 0 0 4px 4px;
        }

        .panel:last-child .panel-heading {
            border-radius: 0 0 4px 4px;
            transition: border-radius 0.3s linear 0.2s;
        }

        .panel:last-child .panel-heading.active {
            border-radius: 0;
            transition: border-radius linear 0s;
        }
        /* #bs-collapse icon scale option */

        .panel-heading a:before {
            content: '\e146';
            position: absolute;
            font-family: 'Material Icons';
            right: 5px;
            top: 10px;
            font-size: 24px;
            transition: all 0.5s;
            transform: scale(1);
        }

        .panel-heading.active a:before {
            content: ' ';
            transition: all 0.5s;
            transform: scale(0);
        }

        #bs-collapse .panel-heading a:after {
            content: ' ';
            font-size: 24px;
            position: absolute;
            font-family: 'Material Icons';
            right: 5px;
            top: 10px;
            transform: scale(0);
            transition: all 0.5s;
        }

        #bs-collapse .panel-heading.active a:after {
            content: '\e909';
            transform: scale(1);
            transition: all 0.5s;
        }
        /* #accordion rotate icon option */

        #accordion .panel-heading a:before {
            content: '\e316';
            font-size: 24px;
            position: absolute;
            font-family: 'Material Icons';
            right: 5px;
            top: 10px;
            transform: rotate(180deg);
            transition: all 0.5s;
            color: black;
        }

        #accordion .panel-heading.active a:before {
            transform: rotate(0deg);
            transition: all 0.5s;
        }
        .h-s{
            margin-top: 1px; 
            margin-bottom: 1px;
            padding-bottom:5px;
            margin-left: 26px;
            text-align: left;
            color: white
        }
        .color-black{
            color: black;
        }
        .bor-d{
            border: 1px solid;


            border-color: #0d0d0d;
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
            <div class="block-in-pages banner-image " >
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner-header">
                                <h2>Contact</h2>
                                <ul class="breadcrumbs">
                                    <li><a href="index.php" title="">Home</a></li>
                                    <li><a href="#" title="">Contact Us</a></li> 
                                </ul>	
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
                        <!-- end of container -->
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8 column">     
                            <h3 class="text-left" style="color: black;font-weight:500;margin-bottom: 20px ; padding-bottom: 10px"> How can we help?</h3>
                            <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">

                                <!-- end of panel -->

                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed bor-d" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="padding-bottom: 8px;">

                                                <span  class="color-black">
                                                    <i class="material-icons "  >email</i>
                                                </span> 
                                                <span class="color-black">
                                                    Send an email<br>
                                                    <h4 class="h-s color-black">
                                                        Get in touch with our customer service team
                                                    </h4>
                                                </span> 
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <h3 style="color: black; font-weight: 500;text-align:center">Do you have a booking? </h3>
                                            <div class="col-md-12" style="margin-bottom: 13px;">
                                                <center>
                                                    <button class="btn btn-lg btn-info" id="yes" type="submit" style="margin-right: 10px">Yes</button> 
                                                    <button class="btn btn-lg btn-info" id="no" type="submit">No</button>
                                                </center>  
                                            </div>
                                            <div class="contactus-form"  id="contact" style="display: none" >
                                                <div class="row form-type">
                                                    <div class="col-md-6">
                                                        <input  type="text" name="txtFullName" id="txtFullName" placeholder="Name" />
                                                        <div class="col-lg-12">
                                                            <span id="spanFullName"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input  type="text" name="txtFullName" id="txtFullName" class="datepicker" placeholder="Travel Date" />
                                                        <div class="col-lg-12">
                                                            <span id="spanFullName"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input  type="text" name="txtFullName" id="txtFullName" class="datepicker" placeholder="Booking Reference" />
                                                        <div class="col-lg-12">
                                                            <span id="spanFullName"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input   type="text" name="txtEmail" id="txtEmail" placeholder="Email"  />
                                                        <div class="col-lg-12">
                                                            <span id="spanEmail"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" placeholder="Phone Number" name="txtSubject" id="txtSubject"  />
                                                        <div class="col-lg-12">
                                                            <span id="spanSubject"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea id="txtMessage" name="txtMessage" placeholder="Message"></textarea>
                                                        <div class="col-lg-12">
                                                            <span id="spanMessage"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4"   > 
                                                        <label for="comment">Security Code:</label>
                                                        <input  type="text" name="captchacode" id="captchacode"  placeholder="Enter the code " style="color: black">
                                                        <div class="col-lg-12">
                                                            <span id="capspan" ></span>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4" > 
                                                        <?php include("./contact-form/captchacode-widget.php"); ?> 
                                                    </div>

                                                    <div class="col-md-12">
                                                        <input type="submit" id="btnSubmit" value="send message" /> 
                                                    </div>
                                                </div> 

                                            </div>
                                            <div class="contactus-form"  id="contact-form" style="display: none">

                                                <div class="row form-type">
                                                    <div class="col-md-6">
                                                        <input  type="text" name="txtFullName" id="txtFullName" placeholder="Name" />
                                                        <div class="col-lg-12">
                                                            <span id="spanFullName"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input  type="text" name="txtFullName" id="txtFullName" class="datepicker" placeholder="Travel Date" />
                                                        <div class="col-lg-12">
                                                            <span id="spanFullName"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input  type="number" name="txtFullName" id="txtFullName"   min="0"  placeholder="Number of Adults" />
                                                        <div class="col-lg-12">
                                                            <span id="spanFullName"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input  type="number" name="txtFullName" id="txtFullName"  min="0" placeholder="Number of Children" />
                                                        <div class="col-lg-12">
                                                            <span id="spanFullName"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="country"  name="country"  placeholder="City"  > 
                                                         
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input   type="text" name="txtEmail" id="txtEmail" placeholder="Email"  />
                                                        <div class="col-lg-12">
                                                            <span id="spanEmail"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <input type="text" placeholder="Phone Number "name="txtSubject" id="txtSubject" />
                                                        <div class="col-lg-12">
                                                            <span id="spanSubject"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea id="txtMessage" name="txtMessage" placeholder="Your Requirements"></textarea>
                                                        <div class="col-lg-12">
                                                            <span id="spanMessage"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4"   > 
                                                        <label for="comment">Security Code:</label>
                                                        <input  type="text" name="captchacode" id="captchacode"  placeholder="Enter the code " style="color: black">
                                                        <div class="col-lg-12">
                                                            <span id="capspan" ></span>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4" > 
                                                        <?php include("./contact-form/captchacode-widget.php"); ?> 
                                                    </div>

                                                    <div class="col-md-12">
                                                        <input type="submit" id="btnSubmit" value="send message" /> 
                                                    </div>
                                                </div> 

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end of panel -->

                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed bor-d" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="padding-bottom: 8px;">
                                                <span class="color-black ">
                                                    <i class="material-icons "  >local_phone</i>
                                                </span> 
                                                <span class="color-black">
                                                    Call customer service<br>
                                                    <h4 class="h-s color-black">
                                                        Talk to us over the phone 24/7 
                                                    </h4>
                                                </span> 
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-2">Hotline:-</div>
                                                <div class="col-md-10 pull-left">+94 (11) 4338831</div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">Hotline:-</div>
                                                <div class="col-md-10 pull-left">+94 (76) 805 0501</div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">Hotline:-</div>
                                                <div class="col-md-10 pull-left">+94 (76) 281 6641</div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end of panel -->

                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed bor-d" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="padding-bottom: 8px;">
                                                <span class="color-black">
                                                    <i class="fa fa-whatsapp"  > </i>
                                                </span> 
                                                <span class="color-black">
                                                    Message / Call us using WhatsApp <br>
                                                    <h4 class="h-s color-black">
                                                        We currently support chat only 
                                                    </h4>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-3">Whats app:-</div>
                                                <div class="col-md-9 pull-left">+94 (76) 281 6641</div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">Whats app:-</div>
                                                <div class="col-md-9 pull-left">+94 (76) 805 0501</div>

                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                        <div class="col-md-2"> </div>
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
    <script src="contact-form/scripts.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/countrySelect.min.js" type="text/javascript"></script>
    <script>

        $("#country").countrySelect({
            defaultCountry: "lk",
            responsiveDropdown: true
        });
        $("#accept").addClass("disabled");
    </script>
    <script>
        $(document).ready(function () {
            $('.collapse.in').prev('.panel-heading').addClass('active');
            $('#accordion, #bs-collapse')
                    .on('show.bs.collapse', function (a) {
                        $(a.target).prev('.panel-heading').addClass('active');
                    })
                    .on('hide.bs.collapse', function (a) {
                        $(a.target).prev('.panel-heading').removeClass('active');
                    });

            $('#yes').click(function () {
                $('#contact').show();
                $('#contact-form').hide();
            });
            $('#no').click(function () {
                $('#contact-form').show();
                $('#contact').hide();
            });
        });

        $(function () {
            $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});

        });


    </script>
</body>
</html>