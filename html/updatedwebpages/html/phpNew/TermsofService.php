<?php
require_once __DIR__ . '/phpscripts/fblogin.php';
?>

<!-- Document the fact that this has been changed -->
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="css/PoliciesRules.css">
</head>


<!--Terms, Privacy, Info, Contact-->
<div class="sidetable">
    <table class="Utility">
        <tr class="info">
            <th><a href="TermsofService.php" style="color: green">Terms of Use</a></th>
            <th><a href="uSupport.php" style="color: green">Contact Support </a></th>
            <!--Exclusive to logged in profiles-->
            <th><a href="infoPrivLog.php" style = "color: green"> Roomie Info & Privacy </a></th>
        </tr>
    </table>
    <?php require_once __DIR__ . '/templates/footer.php' ?>
</div>
<!--This will be on the bottom-->





<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Roomie</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="tayloriconforbrowser_T4g_icon.ico" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- Owl Carousel Theme -->
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- owl carousel JS -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- Main JS -->
    <script src="js/script.js"></script>
</head>






<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="profile.php">
              <img src="images/logo_opt.png">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->


        <!-- Have to have a way to make sure they can't access through this-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li>
                    <a href="editprofile.php"><i class="fa fa-pencil-square-o"></i> Edit Profile</a>
                </li>
                <li>
                    <a href="preferences.php"><i class="fa fa-heart"></i> Edit Preferences</a>
                </li>
                <li>
                    <a href="roommateSearch.php"><i class="fa fa-eye"></i> Find Roommate</a>
                </li>

                <li>
                    <a href="phpscripts/logout.php"><i class="fa fa-lock"></i> Log off</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
  <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>




<!-- Terms of Use-->
<div class="container">
      <h1 class="Terms of Use"><span class="title">Terms of Use</span>
      <h4><span class="updated"> [Last Modified: April 18, 2016]</span></h4></h1><hr/>
        <h4><b>ACKNOWLEDGEMENT & ACCEPTANCE OF ROOMIEIT.COM'S TERMS OF USE </b></h4>
            <div class="container">
                <p>
                DigitalOcean.com (DigialOcean, Inc.), maitains this website, roomieit.com, as a service to its customers.
                By using the site roomieit.com and its features (and any future service(s)) provided to you, the user,
                roomieit.com
                </p>
            </div>
</div>



</html>
