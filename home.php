<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    .card {
      height: 450px;
    }
    .card-image {
      max-height: 300px;
      max-width: 350px;
      width: auto;
    }
    .image-display {
      height: 300px;
      width: auto;
    }
    .image-caption {
      height: 100px;
    }
  </style>
<title>Notes</title>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Notes</a>
    </div>
  </div>
</nav>

<h1 align="center"> Please Pick Your Tasks! </h1> 
<h2> New Notes: <a href="add-notes.php">Click This Link</a></h2><?php
 <?php 
  $sql = "SELECT * FROM notes";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $post_link_detail = '<h2> Edit Notes: <a href="note-detail.php?id='.$row["catalogId"]">Click This Link</a></h2>
?>

<img src="img/Chris-Gampat-The-Phoblographer-VSCO-for-iPad-1-of-1ISO-2001-50-sec-at-f-4.5.jpg" alt="picture" width="460" height="360" witdth=5000" align="center"/>

<div id="bottom-footer" class="hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-center" align="center">
              &copy; Notes Theme. All rights reserved
                            <div class="credits" align="center">
                                Designed by James Wibisono Santoso, &copy <a href="https://biologyinadventure.blogspot.com/">Notes</a>
                            </div>
            </div>
          </div>
        </div>
  </div>
</div>
    </div>
</body>
</html>