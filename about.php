<?php
   require_once('connect.php');
   session_start();
   if($_SESSION['username'] == null)
   {
   	  header("Location:login.php");
   }
?>

<style type="text/css">
	.about-content{
		margin: 0 auto;
  margin-left: auto;
  margin-right: auto;
  text-align:center;
	}

.home-link a:link, a:visited{
    background-color: #005580;
    color: white;
    border: 2px solid black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    font-weight: bold;
    font-family:"Arial";
    position:absolute;
    top:200px;
    left:650px;
}

.home-link a:hover,a:active{
    background-color: #cceeff;
    color: black;
}

</style>
<!DOCTYPE html>
<html>
<head>
	<title>About</title>
  <script src="javascriptfile.js"></script>
</head>
<body>
<div class="about-content">
Created by:
Srinidhi C S<br>
CSE Batch of 2015-2019<br>
MIT, Manipal<br>
© Copyright Reserved.<br>
<div class="home-link">
<a href="welcome.php">Home</a>
</div>
</div>
</body>
</html>