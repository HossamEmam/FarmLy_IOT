<script type="text/javascript" src="js/style-switcher/styleswitcher.js"></script>

<!-- end style switcher -->

<a href="#" class="scrollup"></a>
<!-- end scroll to top of the page-->

<!-- ######### JS FILES ######### -->

<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- page loder -->
<script>
    (function ($) {
        "use strict";
// makes sure the whole site is loaded
        jQuery(window).load(function () {
            "use strict";
            // will first fade out the loading animation
            jQuery(".status").fadeOut();
            // will fade out the whole DIV that covers the website.
            jQuery(".preloader").delay(1000).fadeOut("slow");
        })
    })(jQuery);

</script>
<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- animations -->
<script src="js/animations/animations.min.js" type="text/javascript"></script>
<script src="js/animations/appear.min.js" type="text/javascript"></script>

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.js"></script>
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js/revolutionslider/custom1.js"></script>

<!--simple nav-->
<script src="js/simplenav/simplemenu.js" type="text/javascript"></script>

<!--menu background color chang when scrolltop-->
<script type="text/javascript">
    (function ($) {
        "use strict";
        $(document).ready(function () {
            var scroll_start = 0;
            var startchange = $('#startchange');
            var offset = startchange.offset();
            $(document).scroll(function () {
                scroll_start = $(this).scrollTop();
                if (scroll_start > offset.top) {
                    $('.menu_bgmain').css('background-color', '#000000');
                } else {
                    $('.menu_bgmain').css('background-color', 'transparent');
                }
            });
        });
    })(jQuery);
</script>
<script>
    (function ($) {
        "use strict";
        $(function () {
            // Add click-event listener
            $(".mobilenav .menu li a").click(function () {
                // Remove the current class from all a tags
                $(".mobilenav .menu li a").removeClass("current");
                // Add the current class to the clicked a
                $(this).addClass("current");
            });
        });
    })(jQuery);
</script>

<!-- scrollto -->
<script src="js/pagescroll/animatescroll.js"></script>

<!-- tabs -->
<script src="js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>

<!-- Accordion -->
<script type="text/javascript" src="js/accordion/smk-accordion.js"></script>
<script type="text/javascript" src="js/accordion/custom.js"></script>

<!-- owl-carousel -->
<script src="js/owl-carousel/owl.carousel.js"></script>
<script>
    (function ($) {
        "use strict";
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({

                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

                // "singleItem:true" is a shortcut for:
                // items : 1,
                // itemsDesktop : false,
                // itemsDesktopSmall : false,
                // itemsTablet: false,
                // itemsMobile : false

            });
        });
    })(jQuery);
</script>

<!-- scroll up -->
<script src="js/scrolltotop/totop.js" type="text/javascript"></script>