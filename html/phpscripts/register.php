<?php

if(!isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['confirm-password'])) {
  die('get outta here!');
}

require_once __DIR__ . '/dbconnect.php';

$email = $_POST['email'];
$password = $_POST['password'];
$conf = $_POST['confirm-password'];

if ($password != $conf) {
  die('password mismatch!');
}

$sql = "SELECT email FROM users WHERE email='$email'";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
  echo 'That email address is already registered on this site! <br>';
  echo 'Redirecting back to home page';
  header('refresh:3; url=http://roomieit.com');
  die();
}

$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
$conn->query($sql);

echo 'You have been successfully registered! <br>';
echo 'Redirecting back to home page';
header('refresh:3; url=http://roomieit.com');

?>
