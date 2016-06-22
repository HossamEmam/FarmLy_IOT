
<?php
if(isset($_SESSION['name'])) {
    /*slider*/
    if (isset($_GET['addslider'])) {
        include("admin/slider/add.php");
    }
    if (isset($_GET['viewslider'])) {
        include("admin/slider/view.php");
    }
    if (isset($_GET['editslider'])) {
        include("admin/slider/edit.php");
    }
    if (isset($_GET['deleteslider'])) {
        include("admin/slider/view.php");
    }

    /*testimonials*/
    if (isset($_GET['addtestimonial'])) {
        include("admin/testimonials/add.php");
    }
    if (isset($_GET['viewtestimonials'])) {
        include("admin/testimonials/view.php");
    }
    if (isset($_GET['edittestimonial'])) {
        include("admin/testimonials/edit.php");
    }
    if (isset($_GET['deletetestimonial'])) {
        include("admin/testimonials/view.php");
    }

    /*clients*/
    if (isset($_GET['addclient'])) {
        include("admin/clients/add.php");
    }
    if (isset($_GET['viewclient'])) {
        include("admin/clients/view.php");
    }
    if (isset($_GET['editclient'])) {
        include("admin/clients/edit.php");
    }
    if (isset($_GET['deleteclient'])) {
        include("admin/clients/view.php");
    }

    /*Service*/
    if (isset($_GET['add_service'])) {
        include("admin/our_service/add.php");
    }
    if (isset($_GET['view_service'])) {
        include("admin/our_service/view.php");
    }
    if (isset($_GET['edit_service'])) {
        include("admin/our_service/edit.php");
    }
    if (isset($_GET['delete_service'])) {
        include("admin/our_service/view.php");
    }

    /*note*/

    if (isset($_GET['edit_note'])) {
        include("admin/notes/edit.php");
    }


    /*about_us*/
    if (isset($_GET['about_us'])) {
        include("admin/about_us/add.php");
    }

}

?>


