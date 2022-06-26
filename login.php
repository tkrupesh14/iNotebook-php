<?php
include './header.php';
include "./db.php";

if($login){
    header("location: ./");
}
?>
<div class="container">
    <h2 class="mt-3 text-center text-primary">Log In</h2>
    <form method="POST">
   
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

        <input type="submit" value="Log In" name="login" class="btn btn-primary">
    </form>
</div>
<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


   
$sql = "SELECT * from users WHERE email = '$email'";
$run = mysqli_query($con, $sql);
$raw = mysqli_fetch_assoc($run);

$password_verify = password_verify($password, $raw['password']);
$_SESSION['email'] = $raw['email'];

if($_SESSION['email'] == $email && $password == $password_verify){
    $_SESSION['valid'] = true;
    echo "<script>alert('Welcome Back! 🎉')
    window.location.href = './';
    </script>";
}else{
    echo "<script>alert('Something Wrong Occured 😢')</script>";

}
}

include './footer.php';
?>