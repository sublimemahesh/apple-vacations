 
<section>
    <div class="block no-padding gray">
        <div class="row">
            <div class="col-md-12">
                <div class="main-featured-sec" >
                   <div class="logo">
                       <img src="images/logo_sticky_1.png" alt="logo"  class="l-logo"/>
                   </div>
                  
                    <div class="triangle">
                        <img src="images/p-1.png" style="width: 100%;">
                    </div>
                       
                    <ul class="featured-bg-slide  tab_row_hide" style="">
                        <?php
                        $SLIDER = new Slider(NULL);
                        foreach ($SLIDER->all() as $slider) {
                            ?>
                            <li > 
                                <img src="upload/slider/<?php echo $slider['image_name'] ?>" alt="<?php echo $slider['title'] ?>" style="background: linear-gradient(to bottom, rgb(85, 135, 236)10%, rgba(32, 28, 28, 0.0) 90%);"/>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="mian-featured-area">
                        <div class="main-featured-text tab_row_hide " id="text-scroll">
                            <h1>Handpick Tour Experience</h1>
                            <span class="hidden-xs">Find and book stunning activities restrictive cost.</span>
                        </div>
                        <div class="directory-searcher">
                            <form action="tour-package.php">
                                 
                                <div class="field">
                                    <button type="submit"  > Find your Tours , Attraction and Activities.</button>
                                </div> 
                            </form>

                        </div>

                        <img src="images/logo.png" alt="" class=" pull-right hidden-sm hidden-xs"   style="margin-top: 200px;position: inherit;
                             margin-right: -37px;  z-index: 999;"/>
                        <div class="triangle-2">
                            <img src="images/p-2.png" style="width: 100%;">
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
