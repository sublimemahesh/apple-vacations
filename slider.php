<!-- Slider -->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <?php
            $SLIDER = new Slider(NULL);
            foreach ($SLIDER->all() as $key => $slider) {
                ?>
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="upload/slider/<?php echo $slider['image_name'] ?>" alt="slidebg1" data-lazyload="upload/slider/<?php echo $slider['image_name'] ?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption white_heavy_40 customin customout text-center text-uppercase" data-x="center" data-y="center" data-hoffset="0" data-voffset="-20" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endspeed="300" style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;text-shadow: 0 2px 5px rgba(0, 0, 0, .5); font-size: 50px; font-family: 'Oswald', sans-serif;margin-bottom: 40px; "><?php echo $slider['title'] ?>
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 text-center" data-x="center" data-y="center" data-hoffset="0" data-voffset="15" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="500" data-start="2600" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.05" data-endelementdelay="0.1" style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div style="color:#ffffff; font-size:16px; text-transform:uppercase;text-shadow: 0 2px 5px rgba(0, 0, 0, .5);   font-family: 'Oswald', sans-serif; ">
                           <?php echo $slider['description'] ?>
                        </div>
                    </div>
                    
                </li>
                <!-- SLIDE  -->

            <?php } ?>


        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>