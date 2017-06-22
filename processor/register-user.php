<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username_post = $_POST["username"];
	$email_post = $_POST["email"];
	$password_post = $_POST["password"];

  $sql = "INSERT INTO user (username, email, password)
VALUES ('$username_post', '$email_post', '$password_post')";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'index.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>