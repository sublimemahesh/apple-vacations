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
            font-size: 15px;
            font-weight: normal;
            margin-top: 15px;
        }
        .recentitem:last-child {
            margin-bottom: 15px;
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
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php
                                        foreach ($ATTRACTION->getAttractionByCity($id) as $attraction) {
                                            ?>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="recentitem">
                                                    <a href="view-destination.php?id=<?php echo $attraction['id'] ?>" title=""> <img src="upload/attraction/<?php echo $attraction['image_name'] ?>" alt="" style="width: 100px;" /> </a>
                                                    <h3><a href="view-destination.php?id=<?php echo $attraction['id'] ?>" title=""><?php echo $attraction['title'] ?></a></h3>
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