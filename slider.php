 
<section>
    <div class="block no-padding gray">
        <div class="row">
            <div class="col-md-12">
                <div class="main-featured-sec">
                    <ul class="featured-bg-slide  tab_row_hide">
                        <?php
                        $SLIDER = new Slider(NULL);
                        foreach ($SLIDER->all() as $slider) {
                            ?>
                            <li><img src="upload/slider/<?php echo $slider['image_name'] ?>" alt="<?php echo $slider['title'] ?>"/></li>
                        <?php } ?>
                    </ul>
                    <div class="mian-featured-area">
                        <div class="main-featured-text tab_row_hide " id="text-scroll">
                            <h1>YOURS TO EXPLORE</h1>
                            <span class="hidden-xs">Discover and book amazing things to do at excusing price. </span>
                        </div>
                        <div class="directory-searcher">
                            <form>
                                <div class="field" style="width: 100%">
                                    <input type="text" placeholder="Search by destination, activity or attraction. " class="search" name="search" /> 
                                </div> 
                                <div class="field">
                                    <button type="submit"  ><i class="la la-search"></i></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
