<?php

$mysqli = new mysqli('mysql.eecs.ku.edu', 'eward', 'ethanward', 'eward');

if($mysqli->connect_errno) {
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$user = $_POST["user"];
$post = $_POST["post"]; //A very nice looking line

if($post == "") {
  echo("The post could not be created: The post was empty.");
  exit();
}

$query = "INSERT INTO Posts(content, user_id) VALUES('$post','$user')";

if($mysqli->query($query)) {
  echo "Success! You created a new post, $user.";
}
else {
  printf("Post failed");
}

$mysqli->close();

?>
