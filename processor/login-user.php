<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username_post = $_POST["username"];
  $password_post = $_POST["password"];

  $sql = "SELECT * FROM user WHERE username = '$username_post' AND password = '$password_post'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      // save user info to session
      echo "Halo ".$row["email"]." ".$row["username"]." ".$row["password"];
    }
    header('Location: '.URL.'index.php', TRUE, 302);
  } else {
    echo "Username/Password Salah";
  }
  $conn->close();
}
?>