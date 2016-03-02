<?php
// turn error reporting on, turn it off later...
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once __DIR__ . '/Facebook/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1052739618123825',
  'app_secret' => '5be729095fd690e6c1967ef59185422b',
  'default_graph_version' => 'v2.5',
  ]);
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_friends']; // optional

try {
	if (isset($_SESSION['facebook_access_token'])) {
		$accessToken = $_SESSION['facebook_access_token'];
	} else {
  		$accessToken = $helper->getAccessToken();
	}
} catch(Facebook\Exceptions\FacebookResponseException $e) {
 	// When Graph returns an error
 	echo 'Graph returned an error: ' . $e->getMessage();
  	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
 	// When validation fails or other local issues
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
  	exit;
 }
if (isset($accessToken)) {
	if (isset($_SESSION['facebook_access_token'])) {
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	} else {
		// getting short-lived access token
		$_SESSION['facebook_access_token'] = (string) $accessToken;
	  	// OAuth 2.0 client handler
		$oAuth2Client = $fb->getOAuth2Client();
		// Exchanges a short-lived access token for a long-lived one
		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
		$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
		// setting default access token to be used in script
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    // set user to logged in
    $_SESSION['logged_in'] = true;
	}
	// redirect the user back to the same page if it has "code" GET variable
	if (isset($_GET['code'])) {
		header('Location: ./');
	}
	// getting basic info about user
	try {
		$profile_request = $fb->get('/me?fields=name,first_name,last_name,email,friends,link');
		$profile = $profile_request->getGraphNode()->asArray();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		session_destroy();
		// redirecting user back to app login page
		header("Location: ./");
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}

	// printing $profile array on the screen which holds the basic info about user
  // echo '<pre>';
	// print_r($profile);
  // echo '</pre>';

  	// Now you can redirect to another page and use the access token from $_SESSION['facebook_access_token']
} else {
	// replace your website URL same as added in the developers.facebook.com/apps e.g. if you used http instead of https and you used non-www version or www version of your website then you must add the same here
	$loginUrl = $helper->getLoginUrl('http://roomieit.com/', $permissions);
  // $_SESSION['loginUrl'] = $loginUrl;
  // echo $loginUrl;
	// echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Roomie	&trade;</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-social.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="sidetable">
    <table class="Utility">
        <tr class="info">
            <th><a href="index.html">Home Page</a></th>
            <th><a href="loggedin.html">My Profile</a></th>
            <th>Financials</th>
            <th>About Us</th>
            <th>Contact Us</th>
        </tr>
    </table>
</div>


<div class="container bg">
  <div class="jumbotron vertical-center">
      <div class="row">
        <img class="img-responsive center-block" src="logo.png" width="700"></img>
      </div>
    <br><br>
    <div class="row">
    <?php
    if (isset($_SESSION['logged_in'])) {
      echo "<h2><center>You are logged in as: " . $profile['name'] . "</center></h2>";
    } else {
    ?>
    <aside class="col-sm-4">
      <a href="<?php echo $loginUrl; ?>"
        class="center-block btn btn-block btn-social btn-facebook"> <span
        class="fa fa-facebook"></span> FB Login
      </a>
    </aside>
    <aside class="col-sm-4">
      <a class="center-block btn btn-block btn-social btn-success"
        data-toggle="modal" data-target="#myModal"> <span
        class="fa fa-sign-in"></span> Login
      </a>

      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <form class="form-signin" action="phpscripts/login.php" method="POST">
                <h2 class="modal-title">Please sign in</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control"
                  placeholder="Email address" name="email" required autofocus> <label
                  for="inputPassword" class="sr-only">Password</label> <input
                  type="password" id="inputPassword" class="form-control"
                  name="password" placeholder="Password" required>
                <div class="checkbox">
                  <!-- <label> <input type="checkbox" value="remember-me">
                    Remember me
                  </label> -->
                </div>
                <input type="submit" value="Submit" class="btn btn-default">
                <!-- <a href="" class="btn btn-default">Sign In</a> -->
              </form>
            </div>
          </div>
        </div>
      </div>

    </aside>
    <aside class="col-sm-4">
      <a class="center-block btn btn-block btn-social btn-warning"> <span
        class="fa fa-user-plus"></span> Sign up
      </a>
    </aside>
    <?php
    }
    ?>
    </div>
  </div>
</div>

</body>
</html>
