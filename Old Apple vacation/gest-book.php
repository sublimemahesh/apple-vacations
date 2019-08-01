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
        <title>Apple Vacations - Gest Book</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/logo_fvg.jpg" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

        <!-- Google web fonts -->       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Pavanam' rel='stylesheet'>
        <!-- CSS -->
        <link href="css/base.css" rel="stylesheet"> 
        <link href="comment/sweetalert.css" rel="stylesheet" type="text/css"/>
    </head>

    <body> 

        <!-- Header -->
        <?php include './header.php'; ?>
        <!-- End Header -->

        <section class="parallax-window" data-parallax="scroll" data-image-src="img/gest-book.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-1">
                <div class="animated fadeInDown">
                    <h1>Gest Book</h1>
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
                        <li><a href="#">Gest Book</a>
                        </li>
                    </ul>
                </div>
            </div> 

            <div class="container margin_60_7"> 
                <?php
                $COMMENT = new Comments(NULL);
                foreach ($COMMENT->activeComments() as $key => $comments) {
                    if ($key % 2 == 0) {
                        ?>
                        <div class="row ">
                            <div class="col-md-10">
                                <div class="review_strip">
                                    <img src="upload/comments/<?php echo $comments['image_name'] ?>" alt="Image" class="img-circle" width=" 9%">
                                    <h4><?php echo $comments['name'] ?></h4>
                                    <span><strong><?php echo $comments['title'] ?></strong></span>
                                    <span class="text-justify">
                                        <?php echo $comments['comment'] ?>
                                    </span>
                                    <div class="rating pull-right">
                                        <span>  <?php echo $comments['country'] ?></span>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-2">
                            </div>
                        </div>
                        <hr>
                    <?php } else { ?>
                        <div class="row ">
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-10">
                                <div class="review_strip">
                                    <img src="upload/comments/<?php echo $comments['image_name'] ?>" alt="Image" class="img-circle" width=" 9%">
                                    <h4><?php echo $comments['name'] ?></h4>
                                    <span><strong><?php echo $comments['title'] ?></strong></span>
                                    <span class="text-justify">
                                        <?php echo $comments['comment'] ?>
                                    </span>
                                    <div class="rating pull-right">
                                        <span>  <?php echo $comments['country'] ?></span>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                        <hr>
                        <?php
                    }
                }
                ?>


                <div class="main_title">
                    <h2>What <span>customers </span>says</h2>
                    <p>
                        Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.
                    </p>
                </div> 
                <div class="row">
                    <div class="col-md-12 col-sm-8">
                        <div class="step">
                            <div id="message-contact"></div>
                            <form id="form-data" method="POST" autocomplete="off">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="email" name="title" id="title" class="form-control" placeholder="Enter Email">

                                    </div>
                                </div>
                            </div>
                            <!-- End row -->
                            <div class="row">                                    
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" name="country" id="country" class="form-control" placeholder="Enter Country">

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image_name" id="image_name" class="form-control"  >

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea rows="5"  id="comment" name="comment" class="form-control" placeholder="Write your Message" ></textarea>
                                         
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6"  >
                                    <label for="comment">Security Code:</label>
                                  <input  type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code " style="color: black">
                                                              
                                    
                                </div>
                                <div class="col-lg-6 col-sm-6"  >
                                    <?php include("./contact-form/captchacode-widget.php"); ?>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-12"  >
                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="btn_1" id="create">
                                    </div>

                                </div> 
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <!-- End main -->

        <?php include './footer.php' ?>

        <div id="toTop"><i class="fa fa-arrow-up"></i></div>



        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="comment/sweetalert.min.js" type="text/javascript"></script>
         
        <!-- Common scripts -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>

    </body>
</html>