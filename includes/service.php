<div id="section-5">
    <section class="section37 one">
        <div class="container">
            <div class="title9">
                <h2>Our Services
                    <em>Lorem Ipsum is simply dummy text of theprinting and typesetting it has the randomised words
                        Lorem ipsum dolor sit amet</em></h2>
            </div>

            <div class="clearfix margin_top4"></div>
            <?php
            $services = $obj->view_service("", "");
            foreach ($services as $ser) {
                ?>
                <div class="one_third animate-in" data-anim-type="bounce-in-up" data-anim-delay="200">
                    <div class="fea-col">
                        <div class="icon one"><span class="fa fa-<?php echo $ser['icon']; ?>"></span></div>
                        <div class="bref-info last">
                            <h5><?php echo $ser['title']; ?></h5>

                            <p><?php echo $ser['desc']; ?>.</p>
                        </div>
                    </div>
                </div>

            <!--end col 1 -->

            <?php } ?>
        </div>
    </section>
</div>
