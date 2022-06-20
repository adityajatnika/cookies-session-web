<?php
$uname = 'admin';
$password = '12345';

session_start();
$user = $_POST['uname'];
$pass = $_POST['password'];

if ($user==$uname && $pass==$password){
  session_start();
  $_SESSION['uname'] = $uname;
  header("Location: index.php");
} else {
  header("Location: login.php");
}
 ?>
