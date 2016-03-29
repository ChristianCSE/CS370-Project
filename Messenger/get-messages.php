<?php
$db = new mysqli("localhost", "root", "ogbazghi360","database");

if ($db->connect_error) {
	die("Sorry, there was a problem connecting to our database.");
}

$username = stripslashes(htmlspecialchars($_GET['username']));

$query = "SELECT * FROM chatlog";

if ($result = $db->query ( $query )) {
while ($r = $result->fetch_row()) {
	echo $r[1];
	echo "\\";
	echo $r[2];
	echo "\n";
}}
?>