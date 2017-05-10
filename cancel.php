<?php
   require_once('connect.php');
   session_start();
   if($_SESSION['username'] == null)
   {
      header("Location:login.php");
   }
   $username = $_SESSION['username'];

   $query1 = "SELECT * FROM bookings WHERE username = '$username'";
   $result3 = mysqli_query($connection,$query1);
?>

<style type="text/css">
  .text{
      margin: 0 auto;
  margin-left: auto;
  margin-right: auto;
  text-align:center;
  font-family: "Copperplate Gothic Light";  
  position: absolute;
  top:300px;
  left:500px;
  }
  .cancelsub{
  cursor:pointer;
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #ff1a1a;
  border: none;
    border-radius: 10px;
  box-shadow: 0 7px #999;
}

.cancelsub:hover {background-color: #ff6666}

.cancelsub:active {
  background-color:#800000 ;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.cancelid{
      width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #e6e6ff;
    font-size: 16px;
    margin-left: 12px;
}

.backhome a:link,a:visited{
    background-color: #005580;
    color: white;
    border: 2px solid black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    font-weight: bold;
    font-family:"Arial";
    position:absolute;
    top:0px;
}

.backhome a:hover,a:active{
    background-color: #cceeff;
    color: black;
}

</style>
<!DOCTYPE html>
<html>
<head>
	<title>Cancellation</title>
  <script src="javascriptfile.js"></script>
</head>
<body>
<form method="POST">
<div id="bookingstable">
      <table border="2" style= "background-color: #f2f2f2; color: #000000; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Booking_ID</th>
          <th>User_Name</th>
          <th>Slot_Name</th>
          <th>Booking_Date</th>
          <th>Start_Time</th>
          <th>End_Time</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result3 ) ){
            echo
            "<tr>
              <td>{$row['book_id']}</td>
              <td>{$row['username']}</td>
              <td>{$row['slot_name']}</td>
              <td>{$row['booking_date']}</td>
              <td>{$row['start_time']}</td>
              <td>{$row['end_time']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
    </div>

<div class="text">
Please enter the booking_ID to cancel:<br>
<br>
<input type="text" class="cancelid" name="cancelid"><br><br>
<input type="submit" class="cancelsub" name="cancelsub" value="Cancel">

</div>
<?php

if(!empty($_POST['cancelid'])){
$id = $_POST['cancelid'];
echo $id;
}

if(isset($_POST['cancelsub'])){
$canquery = "DELETE FROM bookings WHERE book_id = '$id'";
$res = mysqli_query($connection,$canquery);
echo $res;
}
?>
<div class="backhome">
<a href="welcome.php"><< Back To Home</a>
</div>
</body>
</html>