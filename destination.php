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

    <title>Destination - Apple Vacation</title>

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
            <div class="block-in-pages  banner-image">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner-header">
                                <h2>Destination</h2>
                                <ul class="breadcrumbs">
                                    <li><a href="index.php" title="">Home</a></li>
                                    <li><a href="#" title="">Destination</a></li> 
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
                    <div class="blog-sec">
                        <div class="row">
                            <?php
                            $CITY = new City(NULL);
                            foreach ($CITY->all() as $city) {
                                ?>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="blog-post">
                                        <div class="blog-post-thumb"> 
                                            <a href="view-city.php?id=<?php echo $city['id'] ?>" title=""><img src="upload/cities/<?php echo $city['image_name'] ?>" alt="" /></a></div>
                                        <div class="blog-detail">

                                            <h3><a href="view-city.php?id=<?php echo $city['id'] ?>" title=""><?php echo $city['name'] ?></a></h3>
                                            <p class="text-justify">
                                                <?php echo substr($city['description'], 0, 140) ?>...
                                            </p>
                                            <a href="view-city.php?id=<?php echo $city['id'] ?>">  
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

</body>
</html>