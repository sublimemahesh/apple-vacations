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
    <meta name="author" content="creativelayers">

    <title><?php echo $ATTRACTION->title ?> - Apple Vacation</title>

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
                                    <li><a href="destination.php" title="">Destination</a></li>  
                                    <li><a href="#" title=""> <?php echo $ATTRACTION->title ?></a></li>  
                                </ul>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block gray ">
                <div class="container"> 
                    <div class="  column"> 
                        <div class="row">
                            <div class="col-md-8">
                                <div class="single-product-gallery">
                                    <ul class="single-product-images">
                                        <?php
                                        $ATTRACTION_PHOTO = new AttractionPhoto(NULL);
                                        foreach ($ATTRACTION_PHOTO->getAttractionPhotosById($id) as $attraction_photo) {
                                            ?>
                                            <li><img src="upload/attraction/gallery/<?php echo $attraction_photo['image_name'] ?>" alt="<?php echo $attraction_photo['caption'] ?>" /> </li>
                                        <?php } ?>

                                    </ul>
                                    <ul class="single-product-thumb">
                                        <?php
                                        $ATTRACTION_PHOTO = new AttractionPhoto(NULL);
                                        foreach ($ATTRACTION_PHOTO->getAttractionPhotosById($id) as $attraction_photo) {
                                            ?>
                                            <li><span><img src="upload/attraction/gallery/thumb/<?php echo $attraction_photo['image_name'] ?>" alt="<?php echo $attraction_photo['caption'] ?>" /></span></li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div  id="location">

                                    <div class="list-location">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.536452450768!2d80.6393219147603!3d7.293460894735891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662dc9c94c75%3A0xe1885fe2929d358!2zVGVtcGxlIG9mIHRoZSBUb290aCBNdXNldW0g4Lav4LeF4Laz4LePIOC2uOC3j-C2veC3kuC2nOC3j-C3gOC3miDgtprgt57gtq3gt5Tgtprgt4_gtpzgt4_gtrvgtro!5e0!3m2!1sen!2slk!4v1564658428036!5m2!1sen!2slk" style="border:0" height="200px"allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                        <div class="row">
                            <div class="col-md-12 related-products">
                                <h2>Description</h2>
                                <?php echo $ATTRACTION->description ?> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="related-products">
                                <div class="col-md-12">
                                    <h3 class="mini-title">Related Destination</h3>
                                </div>
                                <div class="row" id="related-carousel">
                                    <?php
                                    foreach ($ATTRACTION->all() as $attraction) {
                                        ?>
                                        <div class="col-md-3">
                                            <div class="product-box">
                                                <div class="product-thumb">
                                                    <img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt="" class="img-responsive" />
                                                    <a href="view-destination.php?id=<?php echo $attraction['id'] ?>" title="">View</a>
                                                </div>
                                                <h3>
                                                    <a href="view-destination.php?id=<?php echo $attraction['id'] ?>" title="">
                                                        <?php echo $attraction['title'] ?>
                                                    </a>
                                                </h3>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
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
<script type="text/javascript" src="js/userincr.js"></script><!-- Slick -->


</body>
</html>