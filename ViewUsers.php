<?php

$mysqli = new mysqli('mysql.eecs.ku.edu', 'eward', 'ethanward', 'eward');

if($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$query = "SELECT user_id FROM Users";

if($result = $mysqli->query($query)) {

	while($row = $result->fetch_assoc()) {

		printf("%s\n<br>", $row["user_id"]);
		//echo "br";
	}

	$result->free();
}

$mysqli->close();


?>