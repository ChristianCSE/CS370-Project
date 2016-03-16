<?php

session_start();

require_once __DIR__ . '/Facebook/autoload.php';
// print_r($_SESSION);
if (isset($_SESSION['logged_in'])) {
  $logged = $_SESSION['logged_in'];
}
if(!$logged) {
  echo 'You are not logged in, redirecting you to homepage';
  header('refresh:3; url=http://roomieit.com');
  die();
}

// if user is logged in through facebook
if(isset($_SESSION['facebook_access_token'])) {
  $accessToken = $_SESSION['facebook_access_token'];
  $fb = new Facebook\Facebook([
    'app_id' => '1052739618123825',
    'app_secret' => '5be729095fd690e6c1967ef59185422b',
    'default_graph_version' => 'v2.5',
    ]);
  $fb->setDefaultAccessToken($accessToken);
  try {
		$profile_request = $fb->get('/me?fields=name,first_name,last_name,email,friends,link');
		$profile = $profile_request->getGraphNode()->asArray();
    // print_r($profile);
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		session_destroy();
		header("Location: ./");
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		exit;
	}
}


?>

<?php require_once __DIR__ . '/templates/header.php' ?>
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <?php echo $profile['name']; ?>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/750x500" alt="">
            </div>

            <div class="col-md-4">
                <h3>User's Info</h3>
                <p><strong>Email: </strong><?php echo $profile['email'] ?></p>
                <h3>User Bio</h3>
                <ul>
                    <li>Hi, I'm Nahom. I live in Atlanta. I am finishing my last year at Emory and I would like to live in an apartment with a roommate. Preferably Clairmont Reserves.</li>
                </ul>
                <h3>Non-Negotiables</h3>
                <ul>
                    <li>Cleanliness</li>
                    <li>Quietness</li>
                    <li>Non Smoker</li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Current Situation</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a class = "roomie 1" href="#">
                	<h4>Christian</h4>
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a class = "roomie 2" href="#">
                <h4>Paul</h4>
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a class = "roomie 3" href="#">
                <h4>Taylor</h4>
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a class = "location" href="#">
                <h4>Clairmont Reserves</h4>
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->
      </div>

<?php require_once __DIR__ . '/templates/footer.php' ?>
