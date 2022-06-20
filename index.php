<?php
session_start();
if(!isset($_SESSION['uname'])) {
  header("Location: login.php");
  exit();
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>WELCOME PAGE</title>
   </head>
   <body>
     <h1>Welcome To The Main Page,
       <?php echo $_SESSION['uname'] ?>
       !</h1>
       <hr>
       <a href="logout.php">logout</a>
   </body>
 </html>
