<?php
session_start();

unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['valid']);

session_destroy();
header("location: ./login.php");
?>