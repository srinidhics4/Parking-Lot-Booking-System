<!DOCTYPE html>
<html>
<?php
require_once('connect.php');
  session_start();
  if($_SESSION['username'] == null)
   {
   	  header("Location:login.php");
   }
  
?>
<head>
<title>Billing</title>
</head>
<body>
<p>Booking Successful</p>
<a href = "logout.php">Sign Out</a>
</body>
</html>