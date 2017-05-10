<?php
session_start();
  require_once('connect.php');
  $query1 = "SELECT * FROM users";
   $result1 = mysqli_query($connection,$query1);

   $query2 = "SELECT * FROM slots";
   $result2 = mysqli_query($connection,$query2);

   $query3 = "SELECT * FROM bookings";
   $result3 = mysqli_query($connection,$query3);

?>
<style type="text/css">
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
    top:20px;
    left:1225px;
}

.btn #logout-btn:hover, #logout-btn:active {
    background-color: #ff6666;
    color: black;
}
.table_div{
  margin: 0 auto;
  margin-left: auto;
  margin-right: auto;
  text-align:center;
  font-family: "Copperplate Gothic Light";

}
  .table_select {
     -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
     border-radius: 5px;
   background-color: #ffebcc;
     border: none;
     font-size: 18px;
   height: 29px;
   padding: 5px; /* If you add too much padding here, the options won't show in IE */
   width: 250px;
   text-align: center;
   padding-left: 35px;
}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
  <script src="javascriptfile.js"></script>
</head>
<body>
<form>
<div class="table_div">
<br>Please select the table:<br><br>
<select name="table_select" class="table_select" id="table_select">
<option id="ud" value="1">User Details</option>
<option id="bd" value="2">Booking Details</option>
<option id="sd" value="3">Slots Details</option>
</select><br>
</div><br>

  <div id="userstable">
      <table border="2" style= "background-color: #f2f2f2; color: #000000; margin: 0 auto;" >
      <thead>
        <tr>
          <th>User_ID</th>
          <th>User_Name</th>
          <th>User_Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result1 ) ){
            echo
            "<tr>
              <td>{$row['id']}</td>
              <td>{$row['username']}</td>
              <td>{$row['email']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
    </div>

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

      <div id="slotstable">
      <table border="2" style= "background-color: #f2f2f2; color: #000000; margin: 0 auto;" >
      <thead>
        <tr>
          <th>Slot_ID</th>
          <th>Slot_Name</th>
          <th>Slot_Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result2 ) ){
            echo
            "<tr>
              <td>{$row['slot_id']}</td>
              <td>{$row['name']}</td>
              <td>{$row['status']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
    </div>

    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script>

$('#slotstable').hide();
$('#bookingstable').hide();
/*
     $(document).ready(function()
    {
        $('#slotstable').hide();
        $('#table_select').change(function()
            {
                $('#userstable').toggle();
                $('#slotstable').toggle();
            });
    });
*/
$('#table_select').bind('change', function(){
    if($('#table_select option:selected').attr('id') == "ud"){
       $('#userstable').show();
       $('#slotstable').hide();
       $('#bookingstable').hide();
    }
    else if($('#table_select option:selected').attr('id') == "sd"){
       $('#userstable').hide();
       $('#slotstable').show();
       $('#bookingstable').hide();
    }
     else if($('#table_select option:selected').attr('id') == "bd"){
       $('#userstable').hide();
       $('#slotstable').hide();
       $('#bookingstable').show();
    }
});
</script>
   <div class="btn">
    <a href="logout.php" id="logout-btn">Logout</a>
    </div>
    </form>
</body>
</html>