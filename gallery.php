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

    <title>Tour Package Name  - Apple Vacation</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="css/line-awesome.min.css" type="text/css" /><!-- Icons -->

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors/colors.css" type="text/css" /><!-- color -->		
    <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
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
                                <h2>Gallery</h2>
                                <ul class="breadcrumbs">
                                    <li><a href="index.php" title="">Home</a></li>
                                    <li><a href="#" title="">Gallery</a></li>  
                                </ul>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block gray "> 
                    <div class="  column"> 
                        <div class="container"> 
                        <div class="row">  
                            <?php
                            $ALBUM_PHOTO = new AlbumPhoto(1);
                            foreach ($ALBUM_PHOTO->all() as $album_photo) {
                                ?>
                            <div class="col-md-3 col-xs-4 col-sm-6 gallery gallery-padd"> 
                                <a href="upload/photo-album/gallery/<?php echo $album_photo['image_name'] ?>" class="big"><img src="upload/photo-album/gallery/thumb/<?php echo $album_photo['image_name'] ?>" alt="<?php echo $album_photo['caption'] ?>" title="<?php echo $album_photo['caption'] ?>" class="img-responsive" /></a>
                            </div>
                             <?php } ?>
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
    <script src="js/simple-lightbox.min.js" type="text/javascript"></script>
    <script src="js/simple-light-custome.js" type="text/javascript"></script>
</body>
</html>