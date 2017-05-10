<?php
   require_once('connect.php');
   session_start();
   if($_SESSION['username'] == null)
   {
      header("Location:login.php");
   }
?>

<!doctype html>
<html lang="en">
<head>
<style>
.textbox1
  {
  margin: 0 auto;
  margin-left: auto;
  margin-right: auto;
  text-align:center;
  font-family: "Copperplate Gothic Light";
  display:block;

}
input[type=date], select {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #e6e6ff;
    font-size: 24px;
    margin-left: 12px;

}
input[type=time], select {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #e6e6ff;
    font-size: 24px;
    margin-left: 12px;

}
.submit{
  top:600px;
  left:1025px;
  position: absolute;
  cursor:pointer;
  display: inline-block;
  padding: 10px 20px;
  font-size: 12px;
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

.submit:hover {background-color: #ff6666}

.submit:active {
  background-color:#800000 ;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Date And Time</title>
 <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
    })  });
  </script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">-->
  <script src="javascriptfile.js"></script>
</head>
<body>

<form method="POST" action="slotsA.php">    
 <div class="textbox1">
 <h2>Please select the date and time</h2>
<p>Date: <input type="date" name="datebox" id="datepicker" required></p>
<br>
<p>Start Time: <input type="time" name="stimebox" id="stime" class="startTime" required></p>
<br>
<p>End Time: <input type="time" name="etimebox" id="etime" class="endTime" required></p>
</div><br>
 <!--<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
 <script type="text/javascript">
 var val;
 $('.startTime').timepicker({
    timeFormat: 'h:mmp',
    interval: 30,
    minTime: '9',
    maxTime: '9:00pm',
    defaultTime: '9',
    startTime: '9:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true,
});

 $(document).ready(function(){
    $('.startTime').timepicker({
        change: function(time) {
            // the input field
            var element = $(this), text;
            // get access to this Timepicker instance
            var timepicker = element.timepicker();
            text = 'Selected time is: ' + timepicker.format(time);
            element.siblings('span.help-line').text(text);
        }
    });
});
//var val=document.getElementById('stime').value;
 /* $('.startTime').each(function() {
    elem = $(this);

   // Save current value of element
   elem.data('oldVal', elem.val());

   // Look for changes in the value
   elem.bind("propertychange change click keyup input paste", function(event){
      // If value has changed...
      if (elem.data('oldVal') != elem.val()) {
       // Updated stored value
       elem.data('oldVal', elem.val());
       }
   });
 });
 $("#stime").on("change keyup paste", function(){
    var val=document.getElementById('stime').value;
    document.write(val);
    alert('shit');
});      //dateFormat: "yy-mm-dd"
$('#stime').on('input propertychange focusout paste', function() {
    val=document.getElementById('stime').value;
    document.write(val);
});*/

 $('.endTime').timepicker({
    timeFormat: 'h:mmp',
    interval: 30,
    minTime: '10',
    maxTime: '9:00pm',
    defaultTime: '10',
    startTime: '9:00',
    dynamic: true,
    dropdown: true,
    scrollbar: true,
});


//var date = $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' }).val();

</script>-->

 <?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(!empty($_POST['datebox'])){
$edate=$_POST['datebox'];

}
/*if(isset($_POST["submit"]))
{
  mysqli_close($connection);
  header('Location:slotsA.php');
}*/

?>
<input type="submit" name="datesub" value="Proceed" class="submit">
<div class="backhome">
<a href="welcome.php"><< Back To Home</a>
</div>
</form>
</body>
</html>