<div id="section-8">
    <section class="section10 two">
        <div class="container">

            <div class="title9">
                <h2>our clients
                    <em>Lorem Ipsum is simply dummy text of theprinting and typesetting it has the randomised words
                        Lorem ipsum dolor sit amet</em></h2>
            </div>

            <div class="clearfix margin_top4"></div>
            <?php $client = $obj->view_clients("", "");
            foreach ($client as $cli) {
                ?>
                <div class="one_fifth animate-in" data-anim-type="bounce-in-down" data-anim-delay="200">
                    <div class="clien-logo"><img src="admin/admin/clients/images/<?php echo $cli['image']?>" alt="" style="width: 150px ; height: 50px"></div>
                </div>

            <?php } ?>
        </div>
    </section>
    <!--end section 9-->
</div>
