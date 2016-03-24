<?php

// get from post method
$email = $_POST['email'];
$password = $_POST['password'];

// connect to db
require_once __DIR__ . '/dbconnect.php';

// check if user name exists
$sql = "SELECT * FROM users WHERE email=" . "'$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

    if($row['password'] != $password) {
      echo "You have entered incorrect password. <br>";
      echo "You're being redirected to the the front page.";
      header('refresh:3; url=http://roomieit.com');
    } else {
      session_start();
      $_SESSION['logged_in'] = true;
      $_SESSION['user_id'] = $row['user_id'];
      header('Location: /profile.php');
    }

  }
} else {
  echo "invalid submission.";
  echo "You're being redirected to the the front page.";
  header('refresh:3; url=http://roomieit.com');
}

mysqli_close($conn);

?>
