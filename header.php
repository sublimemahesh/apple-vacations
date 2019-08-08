 
<header class="on-top"   >
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <a href="index.php" title="logo">
                        <center>
                            <img src="images/logo_sticky_1.png" alt="logo" style="padding: 8px;"/>
                        </center>

                    </a>
                </div>
            </div>
            <div class="col-md-8">
<!--                <div class="menu-sec pull-right"> 
                    <nav class="header-menu">
                        <ul> 
                            <li class="menu-item-has-children">   <a href="index.php" title="">HOME</a>  </li>
                            <li class="menu-item-has-children">     <a href="about-us.php" title="">Who we are?</a>  </li>
                            <li class="menu-item-has-children">    <a href="destination.php" title="">Destination</a> </li>
                            <li class="menu-item-has-children">   
                                <a href="#" title="">Tour Packages</a>
                                <ul>
                                    <?php
                                    $TOUR_TYPE = new TourType(NULL);
                                    foreach ($TOUR_TYPE->all() as $tour_type) {
                                        ?>
                                        <li><a href="tour-packages.php?id=<?php echo $tour_type['id'] ?>" title="<?php echo $tour_type['name'] ?>"><?php echo $tour_type['name'] ?></a></li>
                                    <?php } ?>
                                </ul> 
                            </li> 
                            <li class="menu-item-has-children">  <a href="gallery.php" title="">Gallery</a>  </li>
                            <li class="menu-item-has-children">  <a href="gest-book.php" title="">Gest Book</a>  </li>
                            <li class="menu-item-has-children">  <a href="contact.php" title="">Contact US</a>  </li>

                        </ul>
                    </nav>
                </div>-->
            </div>
        </div>
    </div>


</header>
