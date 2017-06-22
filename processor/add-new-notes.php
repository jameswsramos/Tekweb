<?php
require '../config/db-config.php';
require '../config/constant-config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $post_Judul_Notes = $_POST["postJudulNotes"];
  $post_Isi_Notes = $_POST["postIsiNotes"];
  $post_creator = $_POST["postCreator"];
  $post_datetime = $_POST["postDatetime"];
  $post_id_Notes = $_POST["postIdNotes"];

 $sql = "INSERT INTO notes
SET judulNotes = '$post_Judul_Notes', isiNotes = '$post_Isi_Notes', creator = '$post_creator' ,  datetime = '$post_datetime'
WHERE idNotes = $post_id_Notes;";

  if ($conn->query($sql) === TRUE) {
    header('Location: '.URL.'index.php', TRUE, 302);
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>