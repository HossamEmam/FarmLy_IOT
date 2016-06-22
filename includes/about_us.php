<div id="section-2">
    <section class="section34 one">
        <div class="title9">
            <h2>About Us
                <em>Lorem Ipsum is simply dummy text of theprinting and typesetting it has the randomised words Lorem
                    ipsum dolor sit amet</em></h2>
        </div>
        <?php
        $about = $obj->view_about_us("id", 1);
        $who_we_are = $obj->view_about_us("id", 2);
        $what_we_do = $obj->view_about_us("id", 3);
        $our_mission = $obj->view_about_us("id", 4);
        ?>
        <div class="clearfix margin_top4"></div>
        <div class="container">
            <div class="one_half animate-in" data-anim-delay="200" data-anim-type="fade-in-left">
                <div class="abt-col">
                    <h2><?php echo $about['title1'] ?></h2>

                    <div class="site-img"><img src="admin/admin/about_us/images/<?php echo $about['image'] ?>" alt=""
                                               style="width: 562px;height: 258px;"></div>
                    <p><?php echo $about['desc'] ?>.</p>
                </div>
            </div>
            <!--end item-->

            <div class="one_half last animate-in" data-anim-delay="300" data-anim-type="fade-in-right">
                <ul class="tabs7 tab3">
                    <li class="active"><a target="_self" href="#example-7-tab-1">Who We Are</a></li>
                    <li><a target="_self" href="#example-7-tab-2">What We Do</a></li>
                    <li><a target="_self" href="#example-7-tab-3">Our Mission</a></li>
                </ul>
                <div class="tabs-content7 tab3">
                    <div class="tabs-panel7" id="example-7-tab-1"><img class="img_left1" alt=""
                                                                       src="admin/admin/about_us/images/<?php echo $who_we_are['image'] ?>"
                                                                       style="width: 562px;height: 258px;">

                        <p><?php echo $who_we_are['desc'] ?>.</p>
                    </div>
                    <!-- end tab 1 -->

                    <div class="tabs-panel7" id="example-7-tab-2" style="display: none;"><img class="img_left1" alt=""
                                                                                              src="admin/admin/about_us/images/<?php echo $what_we_do['image'] ?>"
                                                                                              style="width: 562px;height: 258px;">

                        <p><?php echo $what_we_do['desc'] ?>.</p>
                    </div>
                    <!-- end tab 2 -->

                    <div class="tabs-panel7" id="example-7-tab-3" style="display: none;"><img class="img_left1" alt=""
                                                                                              src="admin/admin/about_us/images/<?php echo $our_mission['image'] ?>"
                                                                                              style="width: 562px;height: 258px;">

                        <p><?php echo $our_mission['desc'] ?>.</p>
                    </div>
                    <!-- end tab 3 -->
                </div>
            </div>
            <!--end item-->

        </div>
    </section>
</div>
