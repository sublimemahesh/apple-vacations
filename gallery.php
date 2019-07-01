<!DOCTYPE html>
<?php
include './class/include.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
        <meta name="author" content="Ansonika">
        <title>Apple Vacations - Gallery</title>

        <!-- Favicons-->
        <link rel="shortcut icon" href="img/logo_fvg.jpg" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

        <!-- Google web fonts -->
        <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Lato:300,400|Montserrat:400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Fjalla One,Roboto:300,300italic,400,400italic,500,500italic,700,700italic' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Fjalla One' rel='stylesheet'>
        <!-- CSS -->
        <link href="css/base.css" rel="stylesheet"> 
    </head>

    <body> 

        <div class="layer"></div>
        <!-- Mobile menu overlay mask -->

        <!-- Header -->
        <?php include './header.php'; ?>
        <!-- End Header -->

        <section class="parallax-window" data-parallax="scroll" data-image-src="img/gallery.jpg" data-natural-width="1400" data-natural-height="470">
            <div class="parallax-content-1">
                <div class="animated fadeInDown">
                    <h1>Gallery page</h1>
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
                        <li><a href="#">Gallery</a>
                        </li>

                    </ul>
                </div>
            </div> 

            <div class="container margin_60_4">
                <div class="row magnific-gallery add_bottom_60 ">
                    <?php
                    $ALBUM_PHOTO = new AlbumPhoto(1);
                    foreach ($ALBUM_PHOTO->all() as $album_photo) {
                        ?>
                        <div class="col-md-3 col-sm-4">
                            <div class="img_wrapper_gallery">
                                <div class="img_container_gallery">
                                    <a href="upload/photo-album/gallery/<?php echo $album_photo['image_name'] ?>" title="<?php echo $album_photo['caption'] ?>"><img src="upload/photo-album/gallery/thumb/<?php echo $album_photo['image_name'] ?>" alt="Image" class="img-responsive">
                                        <i class="icon-resize-full-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    <?php } ?>
                </div> 
            </div> 
        </main>
        <!-- End main -->

        <?php include './footer.php' ?>

        <div id="toTop"><i class="fa fa-arrow-up"></i></div> 
        <!-- Common scripts -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/common_scripts_min.js"></script>
        <script src="js/functions.js"></script>

    </body>
</html>