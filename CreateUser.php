<?php

$mysqli = new mysqli('mysql.eecs.ku.edu', 'eward', 'ethanward', 'eward');

if($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$user = $_POST["user"];

if($user == "") {
  echo("Could not enter user: The field cannot be blank.");
  exit();
}

$query = "INSERT INTO Users(user_id) VALUES('$user')";

if($mysqli->query($query)) {
  echo("Success! $user was added into the database.");
}
else {
  echo "User add failed.";
}

$mysqli->close();

 ?>
