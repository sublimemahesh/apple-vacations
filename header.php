<!--<header class="white-color">
    <div id="top_line">
        <div class="container">
            <div class="row"> 


                <div class="col-md-6 col-sm-6 col-xs-6">
                                        <ul id="top_links">
                                            <li class="text-center"><img src="img/lang_de.png"  width="60%"/> </li>
                                            <li class="text-center" ><img src="img/lang_en.png"  width="60%"/> </li>
                                            <li class="text-center inq-back-color"  ><a href='inquire.php' class="ing-li-color">  INQUIRE NOW</a> </li>
                                        </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6  ">
                    <ul id="top_links">
                        <li class="text-center">

                            <span>
                                <a href="tel: " id="color-black"><i class="icon-phone"></i><strong>    (+94) 77 876 6545</strong> </a>
                            </span>
                        </li> | 
                        <li class="text-center" >
                          <span>
                        <a class="box" href="mailto:" id="color-black">    <i class="icon-mail"></i> <strong> info@applevacation.com </strong>  </a>
                    </span>
                        </li>
                         
                    </ul>
                    
                </div>
            </div> End row 
        </div> End container
    </div> End top line

    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                <div id="logo_home" class="hide-a">

                    <h1 ><a href="index.php"    >
                            <center>
                                <img src="img/logo.png"/>
                            </center> 
                        </a></h1>    
                </div>
            </div>
            <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="img/logo_sticky.png" width="160" height="34" alt="Apple Vacation" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul class="align-nav">
                        <li class="submenu">
                            <a href="index.php" class="show-submenu">Home  </a>

                        </li>
                        <li class="submenu">
                            <a href="about-us.php" class="show-submenu">Who are we?</a>

                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Tours <i class="icon-down-open-mini"></i></a>
                            <ul>
<?php
$TOUR_TYPE = new TourType(NULL);
foreach ($TOUR_TYPE->all() as $tour_type) {
    ?>
                                        <li>
                                            <a href="tourpackages.php?id=<?php echo $tour_type['id'] ?>" class="text-center ">
                                                <strong><?php echo $tour_type['name'] ?></strong>
                                            </a>
                                        </li>
<?php } ?>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="excursion.php" class="show-submenu">Excursion  </a> 
                        </li>
                        <li class="submenu">
                            <a href="service.php" class="show-submenu">Service  </a> 
                        </li>
                        <li class="submenu">
                            <a href="gallery.php" class="show-submenu">Gallery  </a>

                        </li>
                        <li class="submenu">
                            <a href="gest-book.php" class="show-submenu">Gest Book  </a>

                        </li>
                        <li class="submenu">
                            <a href="contact.php" class="show-submenu">Contact Us  </a>                                 
                        </li> 
                    </ul>
                </div> End main-menu 

            </nav>
        </div>
    </div> container 
</header>-->

<header class="white-color">
    <div id="top_line">
        
        <div class="container">
            <div class="row"> 


                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!--                    <ul id="top_links">
                                            <li class="text-center"><img src="img/lang_de.png"  width="60%"/> </li>
                                            <li class="text-center" ><img src="img/lang_en.png"  width="60%"/> </li>
                                            <li class="text-center inq-back-color"  ><a href='inquire.php' class="ing-li-color">  INQUIRE NOW</a> </li>
                                        </ul>-->
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6  ">
                    <ul id="top_links">
                        <li class="text-center">

                            <span>
                                <a href="tel: " id="color-black"><i class="icon-phone"></i><strong>    +94 114338831</strong> </a>
                            </span>
                        </li> | 
                        <li class="text-center" >
                            <span>
                                <a class="box" href="mailto:" id="color-black">    <i class="icon-mail"></i> <strong> info@applevacation.com.co </strong>  </a>
                            </span>
                        </li>

                    </ul>

                </div>
            </div><!-- End row -->
        </div> 
    </div> 
     
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                <div id="logo_home" class="hide-a">

                    <h1 ><a href="index.php"    >
                            <center>
                                <img src="img/logo.png"/>
                            </center> 
                        </a></h1>    
                </div>
            </div>
            <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="img/logo_sticky.png" width="160" height="34" alt="Apple Vacation" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul class="align-nav">
                        <li class="submenu">
                            <a href="index.php" class="show-submenu">Home  </a>

                        </li>
                        <li class="submenu">
                            <a href="#" class="show-submenu">Who are we?</a>

                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Tours <i class="icon-down-open-mini"></i></a>
                            <ul>

                                <li>
                                    <a href="#" class="text-center ">
                                        <strong>One Day</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-center ">
                                        <strong>Round Tour</strong>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="#" class="show-submenu">Excursion  </a> 
                        </li>
                        <li class="submenu">
                            <a href="#" class="show-submenu">Service  </a> 
                        </li>
                        <li class="submenu">
                            <a href="#" class="show-submenu">Gallery  </a>

                        </li>
                        <li class="submenu">
                            <a href="#" class="show-submenu">Gest Book  </a>

                        </li>
                        <li class="submenu">
                            <a href="#" class="show-submenu">Contact Us  </a>                                 
                        </li> 
                    </ul>
                </div><!-- End main-menu -->

            </nav>
        </div>
    </div><!-- container -->
</header>