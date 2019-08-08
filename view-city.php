<!DOCTYPE html>
<?php
include './class/include.php';
$id = '';
$id = $_GET['id'];
$CITY = new City($id); 
$ATTRACTION = new Attraction(NULL);

?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=" ">

    <title><?php echo $CITY->name ?> - Apple Vacation</title>

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
                                <h2><?php echo $CITY->name ?></h2>
                                <ul class="breadcrumbs">
                                    <li><a href="index.php" title="">Home</a></li>
<!--                                    <li><a href="destination.php" title="">Destination</a></li>  -->
                                    <li><a href="#" title=""> <?php echo $CITY->name ?></a></li>  
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
                            <div class="col-md-12  ">
                                <h2>Description</h2>
                                <?php echo $CITY->description ?> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="related-products">
                                <div class="col-md-12">
                                    <h3 class="mini-title">Related Things to do</h3>
                                </div>
                                <div class="row" >
                                    <?php
                                    foreach ($ATTRACTION->getAttractionByCity($id) as $attraction) {
                                        ?>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div class="blog-post">
                                                <div class="blog-post-thumb"> 
                                                    <a href="view-destination.php?id=<?php echo $attraction['id'] ?>" title=""><img src="upload/attraction/thumb/<?php echo $attraction['image_name'] ?>" alt="" /></a></div>
                                                <div class="blog-detail">

                                                    <h3><a href="view-destination.php?id=<?php echo $attraction['id'] ?>" title=""><?php echo $attraction['title'] ?></a></h3>
                                                    <p class="text-justify">
                                                        <?php echo substr($attraction['short_description'], 0, 140) ?>...
                                                    </p>
                                                    <a href="view-destination.php?id=<?php echo $attraction['id'] ?>">  
                                                        <div class=" pull-right  des-with" >
                                                            <p  class="p-tab-b">View</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div><!-- BLog Post  -->
                                        </div> 
                                    <?php } ?>
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