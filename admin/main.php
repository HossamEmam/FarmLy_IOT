<?php

function get_file_name()
{
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    return $parts[count($parts) - 1];
}
if(get_file_name()=="main.php"){session_start();}
?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
<body class="page-body " data-url="http://themes.laborator.co/neon">


<div class="page-container">

    <?php
    include("includes/sidebar.php");?>
    <div class="main-content">


        <?php include("includes/main.php"); ?>


        <!-- Footer -->
        <?php include("includes/footer.php"); ?>

    </div>


</body>


<!-- Mirrored from themes.laborator.co/neon/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 29 Jan 2014 14:06:14 GMT -->
</html>

