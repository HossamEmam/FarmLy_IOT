<?php

session_start();

if (isset($_POST['login'])) {
    include("classes/db_manager.php");

    $manager = new db_manager();

    //hena el var bro3 el Admin
    $user = $_POST['user'];
    $pass = $_POST["pass"];
    


    $t = "user_system";
    $r = "";
    $l = "";
    $s = $manager->select($t, $l, $r);
    $count=0;

    foreach ($s as $data) {

        if ($user == $data['mail'] and $pass == $data['password']) {
            $_SESSION['name'] = $data['mail'];
            $count=1;
            break;

        }


    }
    if($count==0)
    {
        echo "<div class=' alert alert-danger'>Wrong Mail Or Password</div>";

    }
}


if (isset($_SESSION['name'])) {


    include("main.php");


} else {

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.laborator.co/neon/extra/login/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 29 Jan 2014 14:09:00 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Neon Admin Panel"/>
    <meta name="author" content="Laborator.co"/>

    <title>Neon | Login</title>

    <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"
          id="style-resource-1">
    <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
    <link rel="stylesheet" href="assets/css/neon.css" id="style-resource-4">
    <link rel="stylesheet" href="assets/css/custom.css" id="style-resource-5">
    <link rel="stylesheet" href="assets/css/skins/purple.css"  id="style-resource-6">

    <script src="assets/js/jquery-1.10.2.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- TS1391004361: Neon - Responsive Admin Template created by Laborator -->
</head>
<body class="page-body login-page login-form-fall loaded login-form-fall-init theme-skins"  >



<div class="login-container">

    <div class="login-header login-caret" style="height: 40%">

        <div class="login-content">

            <a href="/">
                <div style="font-size: 35px;
                                            color: white;
                                            margin-left: -12px;
                                            font-family: -webkit-pictograph;
                                            font-weight: bold;">
                    FCIC-Control System
                </div>
            </a>

            <p class="description">Dear user, log in to access the admin area!</p>

            <!-- progress bar indicator -->
            <div class="">

            </div>
        </div>

    </div>



    <div class="login-form">

        <div class="login-content">


            <form method="post" role="form"  >


                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-user"></i>
                            </div>

                            <input type="text" class="form-control" name="user" id="username" placeholder="User Email " required="">
                        </div>

                    </div>

                    <div class="form-group">

                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="entypo-key"></i>
                            </div>

                            <input type="password" class="form-control" name="pass" id="password" placeholder="Password" autocomplete="off" required="">
                        </div>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-login" name="login">
                            <i class="entypo-login"></i>
                            Login In
                        </button>
                    </div>



            </form>




        </div>

    </div>

</div>
</body>
<!-- Mirrored from themes.laborator.co/neon/extra/login/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 29 Jan 2014 14:09:00 GMT -->
</html>
<?php } ?>