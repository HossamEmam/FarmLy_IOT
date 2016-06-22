<div id="section-1">
<div class="tp-banner-container">
<div class="tp-banner7">
<ul>

<?php
$sliders = $obj->view_slider("", "");
$count = 0;
foreach ($sliders as $slider) {
    $count++;

    ?>
    <?php if ($count == 1) { ?>
        <!-- SLIDE 1  -->
        <li data-transition="fade" data-slotamount="1" data-masterspeed="1500"
            data-thumb="images/sliders/slide15_thumb.jpg"
            data-delay="13000" data-saveperformance="off" data-title="Slide 1">

            <!-- MAIN IMAGE -->
            <img src="images/sliders/slide_bg15.jpg" alt="" data-bgposition="left center" data-kenburns="on"
                 data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130"
                 data-bgpositionend="right center">
            <!-- LAYERS -->
            <div class="tp-caption sfr"
                 data-x="right"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="230"
                 data-speed="800"
                 data-start="1700"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"><img src="admin/admin/slider/images/<?php echo $slider['image']?>" alt=""
                                         style="width: 457px;height: 302px"></div>
            <div class="tp-caption sfl"
                 data-x="760"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="260"
                 data-speed="800"
                 data-start="2100"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"><img src="images/sliders/slide_img_09.png" alt=""></div>
            <div class="tp-caption sfr"
                 data-x="975"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="353"
                 data-speed="800"
                 data-start="2600"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"><img src="images/sliders/slide_img_10.png" alt=""></div>
            <div class="tp-caption smalltext_four white sft"
                 data-x="740"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="175"
                 data-speed="800"
                 data-start="2200"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6">Unique Layouts<br>
              <span>Lorem Ipsum is simply dummy<br>
              text of theprinting and typesetting.</span></div>
            <div class="tp-caption smalltext_four white ralign sfb"
                 data-x="960"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="525"
                 data-speed="800"
                 data-start="2700"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6">Unlimited Colors<br>
              <span>Lorem Ipsum is simply dummy<br>
              text of theprinting and typesetting.</span></div>
            <div class="tp-caption text1 randomrotate customout tp-resizeme"
                 data-x="left"
                 data-y="290"
                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                 data-speed="500"
                 data-start="1500"
                 data-easing="Power3.easeInOut"
                 data-splitin="chars"
                 data-splitout="chars"
                 data-elementdelay="0.08"
                 data-endelementdelay="0.08"
                 data-endspeed="300"
                 style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $slider['title1']?>
            </div>
            <div class="tp-caption text2 randomrotate customout tp-resizeme"
                 data-x="left"
                 data-y="335"
                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                 data-speed="500"
                 data-start="1800"
                 data-easing="Power3.easeInOut"
                 data-splitin="chars"
                 data-splitout="chars"
                 data-elementdelay="0.08"
                 data-endelementdelay="0.08"
                 data-endspeed="300"
                 style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $slider['title2']?>
            </div>
            <div class="tp-caption smalltext_two sft"
                 data-x="left"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="395"
                 data-speed="800"
                 data-start="1800"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"><?php echo $slider['title3']?>.
            </div>
            <div class="tp-caption btns sfb"
                 data-x="left"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="485"
                 data-speed="800"
                 data-start="2000"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"></div>
        </li>
    <?php } elseif ($count %2== 0) { ?>
        <!-- SLIDE 2  -->
        <li data-transition="fade" data-slotamount="1" data-masterspeed="1500"
            data-thumb="images/sliders/slide6_thumb.jpg"
            data-delay="13000" data-saveperformance="off" data-title="Slide 1">

            <!-- MAIN IMAGE -->
            <img src="images/sliders/slide_bg4.jpg" alt="" data-bgposition="left center" data-kenburns="on"
                 data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130"
                 data-bgpositionend="right center">
            <!-- LAYERS -->
            <div class="tp-caption sfr"
                 data-x="right"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="230"
                 data-speed="800"
                 data-start="1700"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"><img src="admin/admin/slider/images/<?php echo $slider['image']?>" alt=""
                                         style="width: 457px;height: 302px"></div>

            <div class="tp-caption smalltext_four white sft"
                 data-x="740"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="175"
                 data-speed="800"
                 data-start="2200"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"></div>
            <div class="tp-caption smalltext_four white ralign sfb"
                 data-x="960"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="525"
                 data-speed="800"
                 data-start="2700"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"></div>
            <div class="tp-caption text1 randomrotate customout tp-resizeme"
                 data-x="left"
                 data-y="290"
                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                 data-speed="500"
                 data-start="1500"
                 data-easing="Power3.easeInOut"
                 data-splitin="chars"
                 data-splitout="chars"
                 data-elementdelay="0.08"
                 data-endelementdelay="0.08"
                 data-endspeed="300"
                 style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $slider['title1']?>
            </div>
            <div class="tp-caption text2 randomrotate customout tp-resizeme"
                 data-x="left"
                 data-y="335"
                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                 data-speed="500"
                 data-start="1800"
                 data-easing="Power3.easeInOut"
                 data-splitin="chars"
                 data-splitout="chars"
                 data-elementdelay="0.08"
                 data-endelementdelay="0.08"
                 data-endspeed="300"
                 style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $slider['title2']?>
            </div>
            <div class="tp-caption smalltext_two sft"
                 data-x="left"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="395"
                 data-speed="800"
                 data-start="1800"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"><?php echo $slider['title3']?>.
            </div>
            <div class="tp-caption btns sfb"
                 data-x="left"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="485"
                 data-speed="800"
                 data-start="2000"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"></div>
        </li>
    <?php } elseif ($count %2== 1 && $count!=1) { ?>
        <!-- SLIDE 3  -->
        <li data-transition="fade" data-slotamount="1" data-masterspeed="1500"
            data-thumb="images/sliders/slide2_thumb.jpg"
            data-delay="13000" data-saveperformance="off" data-title="Slide 1">

            <!-- MAIN IMAGE -->
            <img src="images/sliders/slide_bg3.jpg" alt="" data-bgposition="left center" data-kenburns="on"
                 data-duration="14000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="130"
                 data-bgpositionend="right center">
            <!-- LAYERS -->
            <div class="tp-caption sfr"
                 data-x="right"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="230"
                 data-speed="800"
                 data-start="1700"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"><img src="admin/admin/slider/images/<?php echo $slider['image']?>" alt=""
                                         style="width: 457px;height: 302px"></div>

            <div class="tp-caption smalltext_four white sft"
                 data-x="740"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="175"
                 data-speed="800"
                 data-start="2200"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"></div>
            <div class="tp-caption smalltext_four white ralign sfb"
                 data-x="960"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="525"
                 data-speed="800"
                 data-start="2700"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"></div>
            <div class="tp-caption text1 randomrotate customout tp-resizeme"
                 data-x="left"
                 data-y="290"
                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                 data-speed="500"
                 data-start="1500"
                 data-easing="Power3.easeInOut"
                 data-splitin="chars"
                 data-splitout="chars"
                 data-elementdelay="0.08"
                 data-endelementdelay="0.08"
                 data-endspeed="300"
                 style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $slider['title1']?>
            </div>
            <div class="tp-caption text2 randomrotate customout tp-resizeme"
                 data-x="left"
                 data-y="335"
                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                 data-speed="500"
                 data-start="1800"
                 data-easing="Power3.easeInOut"
                 data-splitin="chars"
                 data-splitout="chars"
                 data-elementdelay="0.08"
                 data-endelementdelay="0.08"
                 data-endspeed="300"
                 style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><?php echo $slider['title2']?>
            </div>
            <div class="tp-caption smalltext_two sft"
                 data-x="left"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="395"
                 data-speed="800"
                 data-start="1800"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"><?php echo $slider['title3']?>.
            </div>
            <div class="tp-caption btns sfb"
                 data-x="left"
                 data-hoffset="0"
                 data-voffset="-10"
                 data-y="485"
                 data-speed="800"
                 data-start="2000"
                 data-easing="Power4.easeOut"
                 data-endspeed="300"
                 data-endeasing="Power1.easeIn"
                 data-captionhidden="off"
                 style="z-index: 6"></div>
        </li>
    <?php } ?>
<?php } ?>
</ul>
<div class="tp-bannertimer"></div>
</div>
</div>
</div>
