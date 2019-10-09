<style>


    .triangle {
        position: absolute;
        z-index: 999;
        border-top-width:10px solid transparent;
        border-bottom: 200px solid transparent;
        border-left:420px solid  #ffffffa6;;
        top: 0px;
        pointer-events: none;
    }
    .triangle-2{  
        position: absolute;
        z-index: 999;         
        border-right: 485px solid #ffffffa6;
        border-top:  235px solid transparent;
        border-bottom-width:280px;
        top: 63%; 
        width: 1424px;
    }
</style>
<section>
    <div class="block no-padding gray">
        <div class="row">
            <div class="col-md-12">
                <div class="main-featured-sec" >
                    <ul class="featured-bg-slide  tab_row_hide" style="">
                        <?php
                        $SLIDER = new Slider(NULL);
                        foreach ($SLIDER->all() as $slider) {
                            ?>
                            <li >
                                <div class="triangle"></div>
                                <img src="upload/slider/<?php echo $slider['image_name'] ?>" alt="<?php echo $slider['title'] ?>" style="background: linear-gradient(to bottom, rgb(85, 135, 236)10%, rgba(32, 28, 28, 0.0) 90%);"/>
                                <div class="triangle-2">

                                </div>

                            </li>

                        <?php } ?>

                    </ul>
                    <div class="mian-featured-area">
                        <div class="main-featured-text tab_row_hide " id="text-scroll">
                            <h1>Handpick Tour Experience</h1>
                            <span class="hidden-xs">Find and book stunning activities restrictive cost.</span>
                        </div>
                        <div class="directory-searcher">



                            <form>
                                <div class="field" style="width: 100%">
                                    <input type="text" placeholder="Search by destination, activity or attraction. " class="search" name="search" /> 
                                </div> 
                                <div class="field">
                                    <button type="submit" class="bokunButton"
                                            disabled
                                            id=bokun_2193043b_2ee2_4f06_8f70_81d4a765f78d
                                            data-src="https://widgets.bokun.io/online-sales/3fd3d93d-2ab1-4ff9-aec5-c5071443f013/product-list/12309?partialView=1"
                                            ><i class="la la-search"></i></button>
                                </div>
                            </form>
                          
                        </div>
                         <img src="images/logo.png" alt="" class=" pull-right"   style="margin-top: 200px"/>
                    </div>
                   
                </div>
                 
            </div>
           
        </div>
          
    </div>
</section>
