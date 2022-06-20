<?php
session_start();
if(isset($_SESSION['uname'])) {
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN DULU</title>
  </head>
  <body>
    <form name="login" action="authentication.php" method="post">
      <h2>Login</h2>
      <p>Username : </p>
      <input type="text" name="uname"> <br>
      <p>Password :</p>
      <input type="password" name="password">
      <input type="submit" value="login">
    </form>
  </body>
</html>
