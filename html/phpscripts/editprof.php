<?php

// connect to db
require_once __DIR__ . '/dbconnect.php';

session_start();
// echo '<pre>';
// print_r($_POST);
// print_r($_SESSION);

$name = $_POST['name'];
$age = $_POST['age'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$politics = $_POST['politics'];
$religion = $_POST['religion'];
$budget = $_POST['budget'];
$bio = $_POST['bio'];
$hobbies = $_POST['hobbies'];
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM user_profile WHERE uid='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // If there is already a profile, then simply update it
  $stmt = $conn->prepare(
    "UPDATE user_profile
    SET name=?, age=?, country=?, gender=?, politics=?, religion=?, budget=?, bio=?, hobbies=?, uid=?"
  );

  $stmt->bind_param(
    "sissssissi", $name, $age, $country, $gender, $politics, $religion, $budget, $bio, $hobbies, $user_id
  );
  $stmt->execute();
} else {
  // if there is no profile yet
  $stmt = $conn->prepare(
    "INSERT INTO user_profile (name, age, country, gender, politics, religion, budget, bio, hobbies, uid)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
  );

  $stmt->bind_param(
    "sissssissi", $name, $age, $country, $gender, $politics, $religion, $budget, $bio, $hobbies, $user_id
  );
  $stmt->execute();
}

header("Location: ./../");


?>
