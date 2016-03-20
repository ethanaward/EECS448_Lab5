<?php

$mysqli = new mysqli('mysql.eecs.ku.edu', 'eward', 'ethanward', 'eward');

if($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$user = $_POST['users'];

$query = "SELECT content FROM Posts WHERE user_id='$user'";

echo "$user's posts:";

if($result = $mysqli->query($query)) {

	echo "<table border = '1' cellpadding = '5'>";

	while($row = $result->fetch_assoc()) {

		printf("<tr><td>%s</td></tr>", $row["content"]);
		//echo "br";
	}

	echo "</table>";

	$result->free();
}

$mysqli->close();


?>