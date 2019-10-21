 
<section>
    <div class="block no-padding gray container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="main-featured-sec" >


                    <div class="triangle">
                        <img src="images/p-1.png" style="width: 100%;">
                    </div>

                    <ul class="featured-bg-slide  tab_row_hide">
                        <?php
                        $SLIDER = new Slider(NULL);
                        foreach ($SLIDER->all() as $slider) {
                            ?>
                            <li > 
                                <img src="upload/slider/<?php echo $slider['image_name'] ?>" alt="<?php echo $slider['title'] ?>" style="background: linear-gradient(to bottom, rgb(85, 135, 236)10%, rgba(32, 28, 28, 0.0) 90%);"/>
                            </li>
                        <?php } ?>
                    </ul>
                    <div class="mian-featured-area"  >
                        <div class="main-featured-text tab_row_hide " id="text-scroll">
                            <h1>Handpick Tour Experience</h1>
                            <span class="hidden-xs">Find and book stunning activities restrictive cost.</span>
                        </div>
                        <div class="directory-searcher">
                            <form action="tour-package.php">

                                
                                <div class="field">
                                    <button type="submit"  > <p style="color: #ffffff;
                                                                margin-top: 8px;
                                                                float: right;
                                                                font-family: Oswald;
                                                                font-size: 21px;">
                                            Find your Tours , Attraction and Activities.
                                        </p></button>
                                </div> 
                            </form>

                        </div>


                        <div class="triangle-2 pull-right">
                            <img src="images/p-2.png" class="c-w" >
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>
