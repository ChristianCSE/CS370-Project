<?php

session_start();

unset($_SESSION['facebook_access_token']);
unset($_SESSION['FBRLH_state']);
$_SESSION['logged_in'] = false;

echo 'You have been logged out. <br>';
echo 'You are being redirected to the front page.';
header('refresh:3; url=http://roomieit.com');

 ?>
