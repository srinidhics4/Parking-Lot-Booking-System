<?php
require_once('connect.php');
  session_start();
  if($_SESSION['username'] == null)
   {
   	  header("Location:login.php");
   }
 
?>
<style type="text/css">
	.bill{
  margin: 0 auto;
  margin-left: auto;
  margin-right: auto;
  text-align:center;
  font-family: "Copperplate Gothic Light";
  font-size:24px;
	}

 .invoice{
  margin: 0 auto;
  margin-left: 550px;
  margin-right: 550px;
  text-align:center;
  margin-top: 150px;
  font-family: "Times New Roman";
  top:200px;
  border: 2px solid black;
  padding-top: 50px;
  padding-bottom: 50px;
  background-color: #ffe6e6;

	}
	.bill{
		background-color: #00ff00;
	}

body{
	background-color: #f5f5f0;
}
   .btn #logout-btn:link, #logout-btn:visited {
    background-color: red;
    color: black;
    border: 2px solid black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    font-weight: bold;
    font-family:"Arial";
    position:absolute;
 	margin-left:800px;
 	margin-top: 50px; 

}

.btn #logout-btn:hover, #logout-btn:active {
    background-color: #ff6666;
    color: black;
}

.btn #home-btn:link, #home-btn:visited{
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
    margin-top: 50px;
    margin-left: 450px;
}

.btn #home-btn:hover,#home-btn:active{
    background-color: #cceeff;
    color: black;
}
</style>

<!DOCTYPE html>
<html>
<head>
<title>Billing</title>
<script src="javascriptfile.js"></script>
</head>
<body>
<div class="container">
<div class="bill">

<h3>Booking Successful</h3>
<form>
<?php
if(!empty($_POST['limit1']))
{
	$noslots = $_POST['limit1'];

}
$username = $_SESSION['username'];
?>
</div>
<div class="invoice">
Name: <?php echo $username;?><br><br>
<!--No of Slots Booked: <?php echo $noslots;?><br><br>-->
Price Per Slot: $5<br><br>
<!--Total Amount Payable: <?php echo '$'.$noslots*5;?><br><br>-->

</div>
</form>
</div>
<div class="btn">
<a href = "logout.php" id="logout-btn">Logout</a>
<a href="welcome.php" id="home-btn">Home</a>
</div>
</body>
</html>