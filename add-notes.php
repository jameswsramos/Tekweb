<html>
<head>
  <title>Add Notes</title>
  <meta charset="utf-8">
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
      vertical-align: middle;
    }
    .image-display {
      height: 300px;
      width: auto;
    }
    .helper {
      display: inline-block;
      height: 100%;
      vertical-align: middle;
    }
    .image-caption {
      height: 100px;
    }
    .star {
      color: orange;
    }
  </style>
  </head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Notes</a>
    </div>
</div>
</nav>
<h1>Add Notes!</h1>
<form>
  <div class="form-group">
    <label for="judulnotes">Judul Notes:</label>
    <input type="text" class="form-control" id="judulNotes" name="judulNotes">
  </div>
  <div class="form-group">
    <label for="isinotes">Isi Notes:</label>
    <input type="text" class="form-control" id="namahotel" name="description">
  </div>
  <div class="form-group">
    <label for="creator">Creator:</label>
    <input type="text" class="form-control" id="imgUrl" name="imgUrl">
  </div>
  <a href="home.php"><button type="button" class="btn btn-danger">Back</button></a>
<a href="add-new-notes.php"><button type="submit" class="btn btn-default">Submit</button></a>
</form>
</body>
</html>