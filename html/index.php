<?php
require_once __DIR__ . '/phpscripts/fblogin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Roomie	&trade;</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-social.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/validator.js"></script>
</head>
<body>
<div class="sidetable">
    <table class="Utility">
        <tr class="info">
            <th><a href="index.html">Home Page</a></th>
            <th><a href="profile.php">My Profile</a></th>
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
    if ($_SESSION['logged_in'] == true) {
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
              <form class="" action="phpscripts/login.php" method="POST">
                <legend>Sign in</legend>
                <fieldset class="form-group">
                  <label for="inputEmail">Email address</label>
                  <input type="email" id="inputEmail" class="form-control" placeholder="name@example.com" name="email" required autofocus>
                </fieldset>
                <fieldset class="form-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                </fieldset>
                <div>
                  <button type="submit" value="Submit" class="btn btn-success">Sign-in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </aside>
    <aside class="col-sm-4">
      <a class="center-block btn btn-block btn-social btn-warning"
      data-toggle="modal" data-target="#registerModal"> <span
        class="fa fa-user-plus"></span> Sign up
      </a>

      <!-- Modal -->
      <div class="modal fade" id="registerModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <form action="phpscripts/register.php" method="POST" data-toggle="validator" role="form">
                <legend>Register</legend>
                <fieldset class="form-group">
                  <!-- E-mail -->
                  <label for="email">E-mail</label>
                  <input type="email" name="email" id="email" placeholder="name@example.com" class="form-control">
                </fieldset>

                <fieldset class="form-group">
                  <!-- password -->
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" placeholder="**********" class="form-control"
                  data-minlength="6"
                  <span class="help-block">Minimum of 6 characters</span>
                </fieldset>

                <fieldset class="form-group">
                  <!-- confirm password -->
                  <label for="confirm-password">Confirm Password</label>
                  <input type="password" name="confirm-password" id="confirm-password" placeholder="**********" class="form-control"
                  data-match="#password" data-match-error="Passwords do not match">
                  <div class="help-block with-errors"></div>
                </fieldset>
                <div>
                  <button type="submit" value="Submit"class="btn btn-warning"id="register">Register</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <?php
    }
    ?>
    </div>
  </div>
</div>

</body>
</html>
