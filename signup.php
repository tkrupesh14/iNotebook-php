<?php
include './header.php';
include "./db.php";
?>
<div class="container">
    <h2 class="mt-3 text-center text-primary">Sign Up</h2>
    <form method="POST">
  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Full Name <span class="text-danger">*</span> </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" require name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password <span class="text-danger">*</span></label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" require name="password">
    </div>
  </div>
  
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" require>
        <label class="form-check-label" for="gridCheck1">
          You have accepted our <a href="#">T&C</a> by check this box. <span class="text-danger">*</span>
        </label>
      </div>
    </div>
  </div>
  <input type="submit" value="Sign Up" name="signup" class="btn btn-primary">
</form>
</div>
<?php
if(isset($_POST['signup']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT  * FROM users WHERE email = '$email' ";
    $run = mysqli_query($con, $sql);
    $raw = mysqli_num_rows($run);
    if($raw == 0 ){
      $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
      $run = mysqli_query($con, $sql);
  
     if($run){
      echo "<script>alert('Welcome to iNotebook! 🎉')
      window.location.href = './login.php';
      </script>";
  }
  else{
          echo "<script>alert('Something Wrong Occured 😢')</script>";
     }
      
    }else{
      echo "<script>alert('Email alredy exists ☹')</script>";

    }

}

include './footer.php';
?>