<!DOCTYPE html>
<?php
include './class/include.php';
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
    <title>Guest Book - Apple vacation</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="css/line-awesome.min.css" type="text/css" /><!-- Icons -->

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors/colors.css" type="text/css" /><!-- color --> 
    <link href="comment/sweetalert.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="page-loading">
        <div class="loadery"></div>
    </div> 

    <!--Mobile Header-->
    <?php include './mobile-header.php'; ?>
    <!--Mobile Header-->

    <?php include './header.php'; ?>

    <section>
        <div class="block-in-pages banner-image ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-header">
                            <h2>Guest Book</h2>
                            <ul class="breadcrumbs">
                                <li><a href="index.php" title="">Home</a></li>
                                <li><a href="#" title="">Guest Book</a></li> 
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
                <div class="display-review-box" id="review">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="mini-title">revıew</h3>
                        </div> 
                    </div> 
                    <?php
                    $COMMENT = new Comments(NULL);
                    foreach ($COMMENT->activeComments() as $key => $comment) {
                        if ($key % 2 == 0) {
                            ?>
                            <div class="row M-row">
                                <div class="col-md-2  "></div>
                                <div class="col-md-10 col-xs-12">
                                    <div class="review-list-sec">  
                                        <div class="review-list">
                                            <div class="review-avatar">
                                                <img src="upload/comments/<?php echo $comment['image_name'] ?>" alt="<?php echo $comment['name'] ?>" width="100%"/>
                                            </div>
                                            <div class="reviewer-info">
                                                <h3><a href="#" title=""><?php echo $comment['name'] ?></a></h3>
                                                <span><?php echo $comment['title'] ?></span>
                                                <?php echo $comment['comment'] ?>                                              
                                            </div> 
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        <?php } else { ?>
                            <div class="row M-row">
                                <div class="col-md-10 col-xs-12">
                                    <div class="review-list-sec">  
                                        <div class="review-list">
                                            <div class="review-avatar">
                                                <img src="upload/comments/<?php echo $comment['image_name'] ?>" alt="<?php echo $comment['name'] ?>" width="100%"/>
                                            </div>
                                            <div class="reviewer-info">
                                                <h3><a href="#" title=""><?php echo $comment['name'] ?></a></h3>
                                                <span><?php echo $comment['title'] ?></span>
                                                <?php echo $comment['comment'] ?>            
                                            </div> 
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-2  "></div>
                            </div> 
                            <?php
                        }
                    }
                    ?>
                </div>  
            </div> 
        </div> 
    </section>

    <section>
        <div class="block gray remove-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 column">
                        <h3 class="mini-title">Add Your Review</h3>
                        <div class="contactus-form"  id="contact"> 
                            <form id="form-data" class="form-type">
                                <div class="row ">
                                    <div class="col-md-6">
                                        <input name="name" type="text" id="name" placeholder="Name" />
                                    </div>
                                    <div class="col-md-6">
                                        <input  name="email" type="text" id="email" placeholder="Email"  />
                                    </div>
                                    <div class="col-md-12">
                                        <input type="file" name="image_name" id="image_name" />
                                    </div>
                                    <div class="col-md-12">
                                        <textarea id="comment" name="comment"  placeholder="Message"></textarea>
                                    </div>                                
                                    <div class="col-lg-6 col-md-4 col-sm-6"  >
                                        <label for="comment">Security Code:</label>
                                        <input  type="text" name="captchacode" id="captchacode"   placeholder="Enter the code " style="color: black">
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-4"  style="margin-top: 20px;">
                                        <?php include("./comment/captchacode-widget.php"); ?>
                                    </div>  
                                    <div class="  col-sm-6 col-md-4">   </div>  

                                    <div class="col-md-12">
                                        <input type="submit"   value="send message" id="create"/>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </section>  
    <?php include './footer.php'; ?> 


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
    <script src="comment/sweetalert.min.js" type="text/javascript"></script>
    <script src="comment/validation.js" type="text/javascript"></script>
</body>
</html>