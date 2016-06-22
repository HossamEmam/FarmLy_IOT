<section class="section7 two"
         style=" background: url(images/parallax_bg_10.png) repeat center bottom fixed;">
    <div class="container">
        <?php $note = $obj->view_comment("", ""); ?>
        <div class="container quote" data-anim-type="fade-in-down" data-anim-delay="100"><span
                class="fa fa-quote-right"></span></div>

        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="owl-demo" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 7200px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 1200px;">
                                    <div class="item">
                                        <p><?php echo $note['desc']; ?>.</p>


                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
</section>