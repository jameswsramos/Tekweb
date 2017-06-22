<?php
require 'config/db-config.php';
?>
<html>
<head>
	<title>Catalog Online</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    .left {
      position: relative;
      float: left;
    }
  </style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Notes</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<?php
  $post_id = $_GET["id"];
  if ($post_id == "") {
    die("Invalid Request");
  }

  $sql = "SELECT * FROM notes WHERE idNotes = $post_id";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
  <div class="col-sm-7" id="display_mode">
    <h1><?=$row["judulNotes"]?></h1>
    <p><b>postedBy: </b><?=$row["creator"]?><br>
    <?=$row["datetime"]?></p>
    <h3><?=$row["isiNotes"]?></h3>

    <button type="button" class="btn btn-primary left" id="edit_btn">Edit</button>
    <!-- Section to delete notes -->
    <form method="post" action="processor/delete-notes.php" class="left">
      <input type="hidden" class="form-control" name="postIdNotes" value='<?=$row["idNotes"]?>'>
      <button type="submit" class="btn btn-danger" id="delete_btn">Delete</button>
    </form>
  </div>

  <!-- Form Untuk Edit -->
  <div class="col-sm-7" id="edit_mode">
    <form method="post" action="processor/update-notes.php">
      <div class="form-group">
        <label for="postJudulNotes">Title:</label>
        <input type="text" class="form-control" id="postJudulNotes" name="postJudulNotes" value='<?=$row["judulNotes"]?>'>
      </div>
      <div class="form-group">
        <label for="postIsiNotes">Isi Notes:</label><br>
        <textarea class="form-control" rows="5" id="postIsiNotes" name="postIsiNotes"><?=$row["isiNotes"]?></textarea>
      </div>
      <div class="form-group">
        <label for="postCreator">Posted By:</label>
        <textarea class="form-control" rows="3" id="postCreator" name="postCreator"><?=$row["creator"]?></textarea>
      </div>
      <div class="form-group">
        <label for="postDatetime">Posted At:</label>
        <textarea class="form-control" rows="3" id="postDatetime" name="postDatetime"><?=$row["datetime"]?></textarea>
      </div>

      <input type="hidden" class="form-control" name="postIdNotes" value='<?=$row["idNotes"]?>'>

      <button type="button" class="btn btn-default" id="edit_cancel_btn">Cancel</button>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
<?php
    }
  } else {
    echo "No Notes";
  }
  $conn->close();
?>

<script type="text/javascript">
  $(document).ready(function(){
    $("#edit_mode").hide();

    $("#edit_btn").click(function(){
        $("#display_mode").hide();
        $("#edit_mode").show();
    });
    $("#edit_cancel_btn").click(function(){
        $("#display_mode").show();
        $("#edit_mode").hide();
    });
});
</script>
</body>
</html>