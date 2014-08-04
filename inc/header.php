<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $pageTitle; ?></title>

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
        <link rel="stylesheet" href="assets/css/overwrite.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon1.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

<body data-spy="scroll" data-target=".navbar">

<?php if($feature == "yes") { ?>

    <nav class="navbar navbar-default navbar-fixed-top animated slideInDown duration-1" role="navigation" >
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-this">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand animated slideInDown delay-2" href="index.php">Healthy Selfie</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-this">
          <ul class="nav navbar-nav navbar-right">
            <li class='animated slideInRight delay-2 <?php if($section == "index") {echo "active";} ?>'><a href="index.php">Home</a></li>
            <li class='dropdown animated slideInRight delay-2 <?php if($section == "features") {echo "active";} ?>' >
              <a href="features.php" class="dropdown-toggle" data-toggle="dropdown">Features <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="animated slideInDown"><a href="features.php">All</a></li>
                <li class="animated slideInDown"><a href="features.php#selfies">Selfies</a></li>
                <li class="animated slideInDown "><a href="features.php#compares">Compares</a></li>
                <li class="animated slideInDown"><a href="features.php#foodDiary">Food Diary</a></li>
                <li class="animated slideInDown"><a href="features.php#scrapbooks">ScrapBooks</a></li>
                <li class="animated slideInDown"><a href="features.php#discover">Discover</a></li>
                <li class="animated slideInDown"><a href="features.php#fitFeed">Fit Feed</a></li>
              </ul>
            </li>
            <li class='animated slideInRight delay-2 <?php if($section == "prototype") {echo "active";} ?>'><a href="prototype.php">Prototype</a></li>
            <li class='animated slideInRight delay-2 <?php if($section == "about") {echo "active";} ?>'><a href="about.php">About</a></li>
            <li class='animated slideInRight delay-2 <?php if($section == "contact") {echo "active";} ?>'><a href="contact.php"><i class="fa fa-envelope-o"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div style="<?php echo $background; ?>" class="fullscreen-img">
            <div class="container">

                <div class="row">
                    <div class="col-sm-4">

                    </div>
                </div>

                    <div class="row">
                        <div class="col-sm-12 single-feature-text selfies_home">

                            <!-- Padding inserted here to pull out page. -->
                            
                        </div>

                    </div>
            </div>
    </div>
</div>
<?php } else { ?>


    <nav class="navbar navbar-default navbar-fixed-top animated slideInDown duration-1" role="navigation" >
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-this">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand animated slideInDown delay-2" href="index.php">Healthy Selfie</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-this">
          <ul class="nav navbar-nav navbar-right">
            <li class='animated slideInRight delay-2 <?php if($section == "index") {echo "active";} ?>'><a href="index.php">Home</a></li>
            <li class='dropdown animated slideInRight delay-2 <?php if($section == "features") {echo "active";} ?>' >
              <a href="features.php" class="dropdown-toggle" data-toggle="dropdown">Features <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="animated slideInDown"><a href="features.php">All</a></li>
                <li class="animated slideInDown"><a href="features.php#selfies">Selfies</a></li>
                <li class="animated slideInDown "><a href="features.php#compares">Compares</a></li>
                <li class="animated slideInDown"><a href="features.php#foodDiary">Food Diary</a></li>
                <li class="animated slideInDown"><a href="features.php#scrapbooks">ScrapBooks</a></li>
                <li class="animated slideInDown"><a href="features.php#discover">Discover</a></li>
                <li class="animated slideInDown"><a href="features.php#fitFeed">Fit Feed</a></li>
              </ul>
            </li>
            <li class='animated slideInRight delay-2 <?php if($section == "prototype") {echo "active";} ?>'><a href="prototype.php">Prototype</a></li>
            <li class='animated slideInRight delay-2 <?php if($section == "about") {echo "active";} ?>'><a href="about.php">About</a></li>
            <li class='animated slideInRight delay-2 <?php if($section == "contact") {echo "active";} ?>'><a href="contact.php"><i class="fa fa-envelope-o"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>

<?php } ?>






