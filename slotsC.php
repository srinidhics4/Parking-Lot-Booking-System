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
	    <input type="checkbox" class="button" name="C1" id="button1" value="1"><span><?php echo $var[24]?></span>
	 </label>
   </div>
  <div id="ck-button">
	 <label>
		<input type="checkbox" class="button" name="C2" id="button2" value="1"><span><?php echo $var[25]?></span>
     </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="C3" id="button3" value="1"><span><?php echo $var[26]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="C4" id="button4" value="1"><span><?php echo $var[27]?></span>
	 </label>
   </div>      
    <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="C5" id="button5" value="1"><span><?php echo $var[28]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="C6" id="button6" value="1"><span><?php echo $var[29]?></span>
	 </label>
   </div>
   </div>


	<div class="verticaltext">EXIT</div>
	<div class="div2">
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="C7" id="button7" ><span><?php echo $var[30]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="C8" id="button8" ><span><?php echo $var[31]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="C9" id="button9" ><span><?php echo $var[32]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="C10" id="button10" ><span><?php echo $var[33]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="C11" id="button11" ><span><?php echo $var[34]?></span>
	 </label>
   </div>

   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="C12" id="button12" ><span><?php echo $var[35]?></span>
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
if(isset($_POST['submit'])&&isset($_POST['C1']))
{
	$query2="UPDATE slots SET status=1 where status=0 and name='C01'";
	$result2=mysqli_query($connection,$query2);
    $qry1 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C01','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry1);
}
if(isset($_POST['submit'])&&isset($_POST['C2']))
{
	$query3="UPDATE slots SET status=1 where status=0 and name='C02'";
	$result2=mysqli_query($connection,$query3);
    $qry2 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C02','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry2);

}
if(isset($_POST['submit'])&&isset($_POST['C3']))
{
	$query4="UPDATE slots SET status=1 where status=0 and name='C03'";
	$result2=mysqli_query($connection,$query4);
    $qry3 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C03','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry3);

}
if(isset($_POST['submit'])&&isset($_POST['C4']))
{
	$query5="UPDATE slots SET status=1 where status=0 and name='C04'";
	$result2=mysqli_query($connection,$query5);
    $qry4 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C04','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry4);

}
if(isset($_POST['submit'])&&isset($_POST['C5']))
{
	$query6="UPDATE slots SET status=1 where status=0 and name='C05'";
	$result2=mysqli_query($connection,$query6);
    $qry5 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C05','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry5);

}
if(isset($_POST['submit'])&&isset($_POST['C6']))
{
	$query7="UPDATE slots SET status=1 where status=0 and name='C06'";
	$result2=mysqli_query($connection,$query7);
    $qry6 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C06','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry6);

}
if(isset($_POST['submit'])&&isset($_POST['C7']))
{
  $query8="UPDATE slots SET status=1 where status=0 and name='C07'";
  $result2=mysqli_query($connection,$query8);
    $qry7 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C07','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry7);
}
if(isset($_POST['submit'])&&isset($_POST['C8']))
{
  $query9="UPDATE slots SET status=1 where status=0 and name='C08'";
  $result2=mysqli_query($connection,$query9);
    $qry9 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C08','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry9);

}
if(isset($_POST['submit'])&&isset($_POST['C9']))
{
  $query10="UPDATE slots SET status=1 where status=0 and name='C09'";
  $result2=mysqli_query($connection,$query10);
    $qry9 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C09','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry9);

}
if(isset($_POST['submit'])&&isset($_POST['C10']))
{
  $query11="UPDATE slots SET status=1 where status=0 and name='C10'";
  $result2=mysqli_query($connection,$query11);
    $qry10 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C10','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry10);

}
if(isset($_POST['submit'])&&isset($_POST['C11']))
{
  $query12="UPDATE slots SET status=1 where status=0 and name='C11'";
  $result2=mysqli_query($connection,$query12);
    $qry11 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C11','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry11);

}
if(isset($_POST['submit'])&&isset($_POST['C12']))
{
  $query13="UPDATE slots SET status=1 where status=0 and name='C12'";
  $result2=mysqli_query($connection,$query13);
    $qry12 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','C12','$edate','$stime','$etime')";
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
  <a href = "slotsC.php">C</button></a>
  <a href = "slotsB.php">B</a>
  <a href = "slotsA.php">A</a>
</div>
	</form>
	</body>
</html>

