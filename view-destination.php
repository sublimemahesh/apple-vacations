<!DOCTYPE html>
<?php
include './class/include.php';
$id = '';
$id = $_GET['id'];
$ATTRACTION = new Attraction($id);
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=" ">

    <title><?php echo $ATTRACTION->title ?> - Apple Vacation</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="css/line-awesome.min.css" type="text/css" /><!-- Icons -->

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors/colors.css" type="text/css" /><!-- color -->		
    <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" type="image/png" href="images/logo.png"/>

    <style>
        .recentitem {
            float: left;
            margin-bottom: 20px;
            width: 100%;
            border: 1px solid #d0d0d0;
            box-shadow: rgba(0, 0, 0, 0.21) 0px 2px 4px 0px;
        }
        .recentitem > a {
            border-radius: 0px;
            float: left;
            margin-right: 17px;
            overflow: hidden;
        }
        .recentitem > h3 {
            color: #8d99ae;
            display: block;
            font-family: Roboto;
            font-size: 16px;
            font-weight: normal;
            margin-top: 20px;
            margin-right: 10px;
        }
        .recentitem:last-child {
            margin-bottom: 30px;
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
            <div class="block-in-pages banner-image ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner-header">
                                <h2><?php echo $ATTRACTION->title ?></h2>
                                <ul class="breadcrumbs">
                                    <li><a href="index.php" title="">Home</a></li>
                                    <li><a href="view-city.php?id=<?php echo $ATTRACTION->city ?>" title="">Things To Know</a></li>  
                                    <li><a href="#" title=""> <?php echo $ATTRACTION->title ?></a></li>  
                                </ul>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="gray ">
                <div class="container"> 
                    <div class="  column">  
                        <div class="row">
                            <div class="col-md-12  ">
                                <h2>Description</h2>
                                <?php echo $ATTRACTION->description ?> 
                            </div>
                        </div> 
                        <div class="row related-products">
                            <?php
                            $ATTRACTION_PHOTO = new AttractionPhoto(NULL);
                            foreach ($ATTRACTION_PHOTO->getAttractionPhotosById($id) as $key => $attraction_photo) {
                                if ($key < 4) {
                                    ?>
                                    <div class="col-md-3 col-xs-4 col-sm-6 gallery gallery-padd"> 
                                        <a href="upload/attraction/gallery/<?php echo $attraction_photo['image_name'] ?>" class="big"><img src="upload/attraction/gallery/thumb/<?php echo $attraction_photo['image_name'] ?>" alt="<?php echo $attraction_photo['caption'] ?>" title="<?php echo $attraction_photo['caption'] ?>" class="img-responsive" /></a>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div> 
                    </div>  
                    <div class="related-products">
                        <h3 class="mini-title">Related Tour Packages</h3>
                        <div class="row" id="related-carousel">
                            <?php
                            $TOUR_PACKAGE = new TourPackage(NULL);
                            foreach ($TOUR_PACKAGE->all() as $tour_package) {
                                ?>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="recentitem">
                                        <a href="view-tour-package.php?id=<?php echo $tour_package['id'] ?>" title=""> <img src="upload/tour-package/thumb/<?php echo $tour_package['image_name'] ?>" alt="" style="width: 100px; height: 75px;" /> </a>
                                        <h3><a href="view-tour-package.php?id=<?php echo $tour_package['id'] ?>" title=""><?php echo $tour_package['title'] ?></a></h3>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <br>

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
    <script type="text/javascript" src="js/userincr.js"></script><!-- Slick -->
    <script src="js/simple-lightbox.min.js" type="text/javascript"></script>
    <script src="js/simple-light-custome.js" type="text/javascript"></script>

</body>
</html>

