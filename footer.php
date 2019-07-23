 
<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-4">
                <h3>Contact Us</h3>
                <p> Apple vacations(PVT) Ltd.<br>
                    162 1/1 Vystwyke Road, <br>
                    Colombo 15. </p>
                <ul>
                   
                    <li>Tel : <a href="tel: ">(+94) 77 256 58965 </a>
                    </li>
                    <li>Fax :<a href="tel: ">(+94) 77 256 58965 </a>
                    </li>
                    <li>Email :  <a href="mailto:" >info@applevacations.com</a>
                    </li> 
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 ml-md-auto col-xs-4">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">- Home</a>
                    </li>
                    <li><a href="#">- Who are we?</a>
                    </li> 
                    <li><a href="#">- Excursion</a>
                    </li>
                    <li><a href="#">- Service</a>
                    <li><a href="#">- Gallery</a>
                    </li>
                    <li><a href="#">- Gest Book</a>
                    </li>
                    <li><a href="#">- Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-4" id="newsletter">
                <h3>Services</h3>
                <p>Join our newsletter to keep be informed about offers and news.</p>
                <ul>
                    <li><a href="#">- Airport Transfer</a>
                    </li>
                    <li><a href="#">- Taxi</a>
                    </li>
                </ul>
            </div>



            <div class="col-lg-3 col-md-3 ml-lg-auto hidden-xs">
                <h3>About us</h3>
                <div class="text-justify">
                    <p>Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in.   octus civibus efficiantur in.Lorem ipsum dolor sit amet, </p>
                </div>
                <div class="footer-social-media hidden-xs">
                    <div class="social-footer-title">
                        <h3>Follow Us</h3>
                    </div>
                    <ul class="footer-social-link"  >
                        <li class="social-icon" style="">
                            <a href="https://api.whatsapp.com/send?phone=">
                                <img src="img/socia/001-whatsapp.png" alt=""/>
                            </a>
                        </li>
                        <li class="social-icon">
                            <a href="viber://chat?number= ">
                                <img src="img/socia/002-viber.png" alt=""/>
                            </a>
                        </li>
                        <li class="social-icon"><a href="" target="_blank">
                                <img src="img/socia/003-facebook.png" alt=""/>
                            </a>
                        </li>
                        <li class="social-icon"><a href=" ">
                                <img src="img/socia/twitter.png" alt=""/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End row -->
        <div class="row">
            <hr>
            <div class="col-lg-4 col-xs-6">
                <p class="pull-left  "><?php echo date('Y') ?> Apple Vacations Travels All right reserved</p>
            </div>
            <div class="col-lg-4 text-center hidden-xs">

                <div id="google_translate_element"></div>
            </div>
            <div class="col-lg-4 col-xs-6">
                <p class="pull-right  ">Design By <i class="fa fa-hand-o-right text-primary heart"></i> <a href="https://www.sublime.lk/" >Sublime Holdings </a></p>

            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</footer>
<div class="feed-main">
    <div class="feed-main-sub"> 

        <a href="#" class=" btn_feed  feed-main-sub-2" data-toggle="modal" data-target="#myReview" style="color:white;">  contact</a>

    </div>

</div>
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h3 class="modal-title text-center" id="myReviewLabel">Contact With Us</h3>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input  name="txtFullName" id="txtFullName" type="text" placeholder="Name" class="form-control">
                            <div class="col-lg-12">
                                <span id="spanFullName"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input name="txtEmail" id="txtEmail" type="email" placeholder="Title" class="form-control">
                            <div class="col-lg-12">
                                <span id="spanEmail"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Subject</label>
                            <input name="txtSubject" id="txtSubject" type="text" placeholder="Subject" class="form-control">
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
                            <textarea id="txtMessage" name="txtMessage" class="form-control"  rows="5" placeholder="Write your review"></textarea>
                            <div class="col-lg-12">
                                <span id="spanMessage"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-xs-6"  >
                        <label for="comment">Security Code:</label>
                        <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                        <span id="capspan" ></span>
                    </div>
                    <div class="col-lg-6 col-xs-6"  >
                        <?php include("./contact-form/captchacode-widget.php"); ?>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn_1" id="btnSubmit">
                        </div>
                    </div>
                    <div id="dismessage" align="center"></div>  
                </div>


            </div>
        </div>
    </div>
</div>

<link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="contact-form/scripts.js" type="text/javascript"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
    }
</script>        
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

<script type="text/javascript">
    $('.translation-links a').click(function () {
        var lang = $(this).data('lang');
        var $frame = $('.goog-te-menu-frame:first');
        if (!$frame.size()) {
            alert("Error: Could not find Google translate frame.");
            return false;
        }
        $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
        return false;
    });
</script>
<script src="comment/validation.js" type="text/javascript"></script>