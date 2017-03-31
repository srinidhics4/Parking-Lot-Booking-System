<?php
   require_once('connect.php');
   session_start();
   if($_SESSION['username'] == null)
   {
   	  header("Location:login.php");
   }
?>
<html>
   <head>
      <title>Welcome </title>
      <link rel="stylesheet" href="welcomestyle.css"/>
   </head>
   
   <body>
    <?php $username = $_SESSION['username'];?>
      <h1>Welcome <?php echo $username ?></h1> 
      <div class="book">
      <p><a href = "slots.php">Book Now</a></p>
      </div>
      <ul>
     <li><a href="#home" class="dropbtn">Home</a></li>
     <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">☰</a>
    <div class="dropdown-content">
      <a href="#">User Profile</a>
      <a href="#">Link 2</a>
      <a href="logout.php">Log Out</a>
    </div>
  </li>
</ul>

   </body>
   
</html>