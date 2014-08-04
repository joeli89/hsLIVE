<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Healthy Selfie | <?php echo $pageTitle; ?></title>

    <!-- Bootstrap Core CSS -->
    <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oleo+Script">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/buttons.css">
        <link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-general.css">
        <link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-sizes.css">
        <link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-shapes.css">
        <link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-bg-colors.css">
        <link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-bg-images-48.css">
        <link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm-effects.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/social.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link href="assets/css/simple-sidebar.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/overwrite.css">
        <link rel="stylesheet" href="assets/css/dontTouch.css">

    <!-- Custom CSS -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        Healthy Selfie
                    </a>
                </li>
                <li class='<?php if($section == "privacyPolicy") {echo "on";} ?>'>
                    <a href="privacy_policy.php">Privacy Policy</a>
                </li>
                <li class='<?php if($section == "terms") {echo "on";} ?>'>
                    <a href="termsofuse.php">Terms Of Use</a>
                </li>
                <!-- <li>
                    <a href="#">About</a>
                </li> -->
                <li class='<?php if($section == "support") {echo "on";} ?>'>
                    <a href="support.php">Support</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li class='<?php if($section == "jobs") {echo "on";} ?>'>
                    <a href="jobs.php">Jobs</a>
                </li>
                 <li class="return-home">
                    <a href="index.php"><h4>Return Home</h4></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-bars"></i></a>