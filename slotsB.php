<!DOCTYPE html>
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
		<title> Slots </title>
		<link rel="stylesheet" href="buttonstyle.css"/>
    <script src="javascriptfile.js"></script>
</head>
 
<body>
<form method="POST" >
<?php
    $sql= "SELECT name FROM slots";
    $result = mysqli_query($connection,$sql);
   while($row = mysqli_fetch_array($result))
   {
	   $var[]= $row['name'];
   }

   $query1="SELECT status FROM slots";
   $result1=mysqli_query($connection,$query1);
   while($row=mysqli_fetch_array($result1))
   {
   	$var1[]=$row['status'];
   }
?>

<div class="select-div">
<br><strong>Please select the number of slots:</strong><br>
<br>
<select name="limit1" id="limit1" class="select-style" onchange='load_new_content()'>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>

<?php
if(!empty($_POST['limit1']))
{
  $noslots = $_POST['limit1'];
}
?>

<div class="container">
<div class="div1">
  <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="B1" id="button1" value="1"><span><?php echo $var[12]?></span>
	 </label>
   </div>
  <div id="ck-button">
	 <label>
		<input type="checkbox" class="button" name="B2" id="button2" value="1"><span><?php echo $var[13]?></span>
     </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="B3" id="button3" value="1"><span><?php echo $var[14]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="B4" id="button4" value="1"><span><?php echo $var[15]?></span>
	 </label>
   </div>      
    <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="B5" id="button5" value="1"><span><?php echo $var[16]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="B6" id="button6" value="1"><span><?php echo $var[17]?></span>
	 </label>
   </div>
   </div>


	<div class="verticaltext">EXIT</div>
	<div class="div2">
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="B7" id="button7" ><span><?php echo $var[18]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="B8" id="button8" ><span><?php echo $var[19]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="B9" id="button9" ><span><?php echo $var[20]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="B10" id="button10" ><span><?php echo $var[21]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="B11" id="button11" ><span><?php echo $var[22]?></span>
	 </label>
   </div>

   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="B12" id="button12" ><span><?php echo $var[23]?></span>
	 </label>
   </div>               
	</div>
  </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--<script type="text/javascript">

$(document).ready(function(){
	$("#button").click(function(){
    $.ajax({
            url: "updater.php", //where your want to send this request(the php file location)
            type: "POST",
            data: {status: 0},
            success: function(){
                    //alert('Success');
                }
       });
    });
});-->
</script>
<?php
$edate = "2017-04-12";
$stime = "2:30PM";
$etime = "3:30PM";
$username = $_SESSION['username'];
if(isset($_POST['submit'])&&isset($_POST['B1']))
{
	$query2="UPDATE slots SET status=1 where status=0 and name='B01'";
	$result2=mysqli_query($connection,$query2);
    $qry1 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B01','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry1);
}
if(isset($_POST['submit'])&&isset($_POST['B2']))
{
	$query3="UPDATE slots SET status=1 where status=0 and name='B02'";
	$result2=mysqli_query($connection,$query3);
    $qry2 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B02','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry2);

}
if(isset($_POST['submit'])&&isset($_POST['B3']))
{
	$query4="UPDATE slots SET status=1 where status=0 and name='B03'";
	$result2=mysqli_query($connection,$query4);
    $qry3 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B03','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry3);

}
if(isset($_POST['submit'])&&isset($_POST['B4']))
{
	$query5="UPDATE slots SET status=1 where status=0 and name='B04'";
	$result2=mysqli_query($connection,$query5);
    $qry4 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B04','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry4);

}
if(isset($_POST['submit'])&&isset($_POST['B5']))
{
	$query6="UPDATE slots SET status=1 where status=0 and name='B05'";
	$resulT2=mysqli_query($connection,$query6);
    $qry5 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B05','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry5);

}
if(isset($_POST['submit'])&&isset($_POST['B6']))
{
	$query7="UPDATE slots SET status=1 where status=0 and name='B06'";
	$result2=mysqli_query($connection,$query7);
    $qry6 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B06','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry6);

}
if(isset($_POST['submit'])&&isset($_POST['B7']))
{
  $query8="UPDATE slots SET status=1 where status=0 and name='B07'";
  $result2=mysqli_query($connection,$query8);
    $qry7 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B07','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry7);
}
if(isset($_POST['submit'])&&isset($_POST['B8']))
{
  $query9="UPDATE slots SET status=1 where status=0 and name='B08'";
  $result2=mysqli_query($connection,$query9);
    $qry8 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B08','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry8);

}
if(isset($_POST['submit'])&&isset($_POST['B9']))
{
  $query10="UPDATE slots SET status=1 where status=0 and name='B09'";
  $result2=mysqli_query($connection,$query10);
    $qry9 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B09','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry9);

}
if(isset($_POST['submit'])&&isset($_POST['B10']))
{
  $query11="UPDATE slots SET status=1 where status=0 and name='B10'";
  $result2=mysqli_query($connection,$query11);
    $qry10 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B10','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry10);

}
if(isset($_POST['submit'])&&isset($_POST['B11']))
{
  $query12="UPDATE slots SET status=1 where status=0 and name='B11'";
  $result2=mysqli_query($connection,$query12);
    $qry11 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B11','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry11);

}
if(isset($_POST['submit'])&&isset($_POST['B12']))
{
  $query13="UPDATE slots SET status=1 where status=0 and name='B12'";
  $result2=mysqli_query($connection,$query13);
    $qry12 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','B12','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry12);

}
?>
 <?php 
if(isset($_POST["submit"]))
{
  mysqli_close($connection);
  header('Location:billing.php');
}
?>
<script type="text/javascript">
var val="<?php echo $var1[12] ?>";
/*var ids = new Array(7);
for(var i=0; i<6; i++)
   {ids[i] = "<?php echo $var1[0] ?>"
	document.write(ids[i]);
}*/
if(val==1)
{    //document.getElementById("button1").setAttribute("type", "button disabled");
	 $('#button1').prop('disabled', true);

}
var val2="<?php echo $var1[13] ?>";
if(val2==1)
{
	 $('#button2').prop('disabled', true);
}
var val3="<?php echo $var1[14] ?>";
if(val3==1)
{
	 $('#button3').prop('disabled', true);
}
var val4="<?php echo $var1[15] ?>";
if(val4==1)
{
	 $('#button4').prop('disabled', true);
}
var val5="<?php echo $var1[16] ?>";
if(val5==1)
{
	 $('#button5').prop('disabled', true);
}
var val6="<?php echo $var1[17] ?>";
if(val6==1)
{
	 $('#button6').prop('disabled', true);
}
var val7="<?php echo $var1[18] ?>";
if(val7==1)
{
   $('#button7').prop('disabled', true);
}
var val8="<?php echo $var1[19] ?>";
if(val8==1)
{
   $('#button8').prop('disabled', true);
}
var val9="<?php echo $var1[20] ?>";
if(val9==1)
{
   $('#button9').prop('disabled', true);
}
var val10="<?php echo $var1[21] ?>";
if(val10==1)
{
   $('#button10').prop('disabled', true);
}
var val11="<?php echo $var1[22] ?>";
if(val11==1)
{
   $('#button11').prop('disabled', true);
}
var val12="<?php echo $var1[23] ?>";
if(val12==1)
{
   $('#button12').prop('disabled', true);
}
</script>
<input type="submit" name="submit" value="Proceed" class="submit">
<script type="text/javascript">

/*function load_new_content(){
     var selected_option_value=$("#limit1 option:selected").val(); //get the value of the current selected option.

     $.post("example.php", {option_value: selected_option_value},
         function(data){ //this will be executed once the `script_that_receives_value.php` ends its execution, `data` contains everything said script echoed.
         }
     );
     return data;
} 

var limit=$("#limit1 option:selected").val();
document.write(x);*/
var lim=1;
$(document).ready(function(){
	$("select[name='limit1']").on('change',function(e){
		lim= $(this).val();
	})
});	

$('input[type=checkbox]').on('change', function(evt) {
   if($('input[type=checkbox]:checked').length > lim) {
       $(this).prop('checked', false);
   }
});

</script>
  <div class="btn-group">
  <a href = "slotsC.php">C</a>
  <a href = "slotsB.php">B</a>
  <a href = "slotsA.php">A</a>
</div>
	</form>
	</body>
</html>

