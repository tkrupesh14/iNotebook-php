<?php
session_start();
if((isset($_SESSION['valid']))){
  $login = true;
}else{
  $login = false;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./notiflix-3.2.5.min.css">
    <title>iNotebook - Your Notes On The Cloud</title>
  </head>
  <body class="d-flex flex-column min-vh-100">

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iNoteBook</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
          if($login){
            ?>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/iNotebook">Add Note</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./notes.php">View Note</a>
          </li>
<?php
          }else{
            echo "Pela Login Thav Pachi Menu Dekhase";
          }
          ?>
      </ul>

    </div>
        <div class="me-3">
          <?php
            if($login){
              ?>
<a href="./logout.php" class="btn btn-outline-primary">LogOut</a>

<?php
            }else{
              ?>
              <a href="./signup.php" class="btn btn-outline-primary">Sign Up</a>
              <a href="./login.php" class="btn btn-primary">Log In</a>

              <?php
            }
          ?>
        </div>

  </div>
</nav>