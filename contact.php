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
                                                        <input  type="text" name="txtTravelDate" id="txtTravelDate" class="datepicker" placeholder="Travel Date" />
                                                        <div class="col-lg-12">
                                                            <span id="spanTravelDate"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input  type="text" name="txtBooking" id="txtBooking"   placeholder="Booking Reference" />
                                                        <div class="col-lg-12">
                                                            <span id="spanBooking"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input   type="text" name="txtEmail" id="txtEmail" placeholder="Email"  />
                                                        <div class="col-lg-12">
                                                            <span id="spanEmail"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input type="text" placeholder="Phone Number" name="txtMobile" id="txtMobile"  />
                                                        <div class="col-lg-12">
                                                            <span id="spanMobile"></span>
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
                                                    <div class="col-md-12" style="margin-top: 20px;">
                                                        <div id="dismessage" align="center"></div>
                                                    </div>

                                                </div> 

                                            </div>
                                            <div class="contactus-form"  id="contact-form" style="display: none">

                                                <div class="row form-type">
                                                    <div class="col-md-6">
                                                        <input  type="text" name="txtfullName" id="txtfullName" placeholder="Name" />
                                                        <div class="col-lg-12">
                                                            <span id="spanfullName"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input  type="text" name="txttravelDate" id="txttravelDate" class="datepicker" placeholder="Travel Date" />
                                                        <div class="col-lg-12">
                                                            <span id="spantravelDate"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input  type="number" name="txtnumAdults" id="txtnumAdults"   min="0"  placeholder="Number of Adults" />

                                                    </div>
                                                    <div class="col-md-6">
                                                        <input  type="number" name="txtnumChild" id="txtnumChild"  min="0" placeholder="Number of Children" />
                                                        <div class="col-lg-12">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" id="country"  name="country"  placeholder="City"  > 

                                                    </div>
                                                    <div class="col-md-6">
                                                        <input   type="text" name="txtemail" id="txtemail" placeholder="Email"  />
                                                        <div class="col-lg-12">
                                                            <span id="spanemail"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <input type="text" placeholder="Phone Number "name="txtmobile" id="txtmobile" />
                                                        <div class="col-lg-12">
                                                            <span id="spanmobile"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea id="txtmessage" name="txtmessage" placeholder="Your Requirements"></textarea>
                                                        <div class="col-lg-12">
                                                            <span id="spanmessage"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4"   > 
                                                        <label for="comment">Security Code:</label>
                                                        <input  type="text" name="captChacode" id="captChacode"  placeholder="Enter the code " style="color: black">
                                                        <div class="col-lg-12">
                                                            <span id="capSpan" ></span>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-4" > 
                                                        <?php include("./contact-form/captchacode-widget.php"); ?> 
                                                    </div>

                                                    <div class="col-md-12">
                                                        <input type="submit" id="btnSubmit_2" value="send message" /> 
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
                                                <div class="col-md-12 pull-left">
                                                    <a href="tel:+9476 805 0501">
                                                        +94 (76) 805 0501
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-12 pull-left">
                                                    <a href="tel:+9411 4338831">
                                                        +94 (11) 433 8831
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 pull-left">
                                                    <a href="tel:+9476 281 6641">
                                                        +94 (76) 281 6641
                                                    </a>
                                                </div>
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
                                                        We currently support Chat / Call us only 
                                                    </h4>
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <div class="row">                                               
                                                <div class="col-md-12 pull-left">
                                                    <a href="tel:+9476 805 0501">
                                                        +94 (76) 805 0501
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 pull-left">
                                                    <a href="tel:+9476 281 6641">
                                                        +94 (76) 281 6641
                                                    </a>
                                                </div>
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

    <script type="text/javascript" src="js/maps3.js"></script><!-- Nice Select -->
    <script type="text/javascript" src="js/jquery.jigowatt.js"></script><!-- Form -->
    <script src="contact-form/scripts.js" type="text/javascript"></script> 
    <script src="contact-form/contact-form-2/scripts.js" type="text/javascript"></script>
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




    </script>

    <script>
        $(function () {
            $(".datepicker").datepicker({dateFormat: 'yy-mm-dd'});
        });
    </script> 
</body>
</html>