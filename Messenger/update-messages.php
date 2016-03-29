<?php
$db = new mysqli("localhost", "root", "ogbazghi360","database");

if ($db->connect_error) {
	die("Sorry, there was a problem connecting to our database.");
}

$username = stripslashes(htmlspecialchars($_GET['username']));
$message = stripslashes(htmlspecialchars($_GET['message']));

if ($message == "" || $username == "") {
	die();
}
$query  = "INSERT INTO chatlog(username,message) VALUES ('$username','$message')";

if ($db->query ( $query ) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query . "<br>" . $db->error;
			echo "error";
		}
		
		$db->close ();

?>