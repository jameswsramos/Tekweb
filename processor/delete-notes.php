<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $post_catalog_id = $_POST["postCatalogId"];

  $sql = "DELETE FROM notes WHERE idNotes = $post_catalog_id;";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'home.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>