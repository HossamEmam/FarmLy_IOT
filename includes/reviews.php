<div id="section-6">
    <section class="section27 two">
        <div class="container">
            <div class="title9">
                <h2>What People Says
                    <em>Lorem Ipsum is simply dummy text of theprinting and typesetting it has the randomised words
                        Lorem ipsum dolor sit amet</em></h2>
            </div>

            <div class="clearfix margin_top4"></div>
            <?php $tests = $obj->view_testimonials("", "");
            $count=0;
            ?>
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div id="owl-demo" class="owl-carousel">
<?php if($count%2==0){ ?>
                            <div class="item">
                                <?php
                                $last='';
                                foreach ($tests as $test) {
                                    $count++;
                                    if($count%2==1);
                                    $last="last" ;?>
                                    <div class="one_half <?php echo $last ?>">
                                        <div class="test-col-one">
                                            <div class="client-img"><img alt=""
                                                                         src="admin/admin/testimonials/images/<?php echo $test['image'] ?>"
                                                                         style="width: 118px; height: 118px"
                                                    >
                                            </div>
                                            <div class="review">
                                                <p><?php echo $test['desc'] ?>.</p>
                                                <h5><?php echo $test['name'] ?>eo<span>- <?php echo $test['job'] ?>
                                                        "</span>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col 1 -->
                                <?php } ?>
                            </div>
                            <!-- end col 1 -->
                        </div>
                        <!-- end item 1 -->
<?php } ?>


                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<!--end section 5-->
</div>
