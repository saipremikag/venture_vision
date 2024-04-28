<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="s.css">

    <title>Welcome</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>

    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">
        welcome-
       <?php echo($_SESSION['username']);?>
        </h4>
      <hr>
      <p>You are logged in...</p>
      <hr>
    </div>
    <h4>Upload your work</h4>
    <!--<div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div>
  <label for="formFileLg" class="form-label">Large file input example</label>
  <input class="form-control form-control-lg" id="formFileLg" type="file">
</div>
  </div>-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

<button id="2nd year" type="button" class="btn btn-primary">2nd year</button>
<button id="3rd year" type="button" class="btn btn-primary">3rd year</button>
<button id="4th year" type="button" class="btn btn-primary">4th year</button>

<script>
  document.getElementById("2nd year").addEventListener("click", function() {
    window.location.href = "2year.php";
    });
    </script>
<script>
  document.getElementById("3rd year").addEventListener("click", function() {
    window.location.href = "3year.php";
    });
    </script>
<script>
  document.getElementById("4th year").addEventListener("click", function() {
    window.location.href = "4year.php";
    });
</script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>





