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
      <title>Home</title>
      <link rel="stylesheet" href="welcomestyle.css"/>
      <script src="javascriptfile.js"></script>
   </head>
   
   <body>
    <?php $username = $_SESSION['username'];?>
    <div class="title-div">
      <h1>Welcome <?php echo $username ?></h1> 
      </div>
      <div class="book">
      <p><a href = "datepicker.php" id="book1" >Book Now</a></p>
      </div>

      <div class = "cancel">
      <p><a href = "cancel.php">Cancel Booking</a></p>
      </div>
      <ul>
     <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">☰</a>
    <div class="dropdown-content">
      <a href="about.php">About</a>
      <a href="logout.php">Log Out</a>
    </div>
  </li>
</ul>

   </body>
   
</html>