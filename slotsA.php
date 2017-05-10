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
<form method="POST">
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
	    <input type="checkbox" class="button" name="A1" id="button1" value="1"><span><?php echo $var[0]?></span>
	 </label>
   </div>
  <div id="ck-button">
	 <label>
		<input type="checkbox" class="button" name="A2" id="button2" value="1"><span><?php echo $var[1]?></span>
     </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A3" id="button3" value="1"><span><?php echo $var[2]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A4" id="button4" value="1"><span><?php echo $var[3]?></span>
	 </label>
   </div>      
    <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A5" id="button5" value="1"><span><?php echo $var[4]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A6" id="button6" value="1"><span><?php echo $var[5]?></span>
	 </label>
   </div>
   </div>


	<div class="verticaltext">EXIT</div>
	<div class="div2">
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A7" id="button7" ><span><?php echo $var[6]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A8" id="button8" ><span><?php echo $var[7]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A9" id="button9" ><span><?php echo $var[8]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A10" id="button10" ><span><?php echo $var[9]?></span>
	 </label>
   </div>
   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A11" id="button11" ><span><?php echo $var[10]?></span>
	 </label>
   </div>

   <div id="ck-button">
     <label>
	    <input type="checkbox" class="button" name="A12" id="button12" ><span><?php echo $var[11]?></span>
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

if ( ! empty($_POST['datebox'])){
    $date = $_POST['datebox'];
    $date=date('Y-m-d',strtotime($date));
    //echo $date;
}

if ( ! empty($_POST['stimebox'])){
    $stime = $_POST['stimebox'];
    //echo $stime;
}

if ( ! empty($_POST['etimebox'])){
    $etime = $_POST['etimebox'];
}
$username = $_SESSION['username'];

if(isset($_POST['submit'])&&isset($_POST['A1']))
{
	$query2="UPDATE slots SET status=1 where status=0 and name='A01'";
  $qry1 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A01','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry1);
	$result2=mysqli_query($connection,$query2);
}
if(isset($_POST['submit'])&&isset($_POST['A2']))
{
	$query3="UPDATE slots SET status=1 where status=0 and name='A02'";
	$result2=mysqli_query($connection,$query3);
  $qry2 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A02','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry2);

}
if(isset($_POST['submit'])&&isset($_POST['A3']))
{
	$query4="UPDATE slots SET status=1 where status=0 and name='A03'";
	$result2=mysqli_query($connection,$query4);
  $qry3 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A03','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry3);
  echo $res;

}
if(isset($_POST['submit'])&&isset($_POST['A4']))
{
	$query5="UPDATE slots SET status=1 where status=0 and name='A04'";
	$result2=mysqli_query($connection,$query5);
  $qry4 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A04','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry4);

}
if(isset($_POST['submit'])&&isset($_POST['A5']))
{
	$query6="UPDATE slots SET status=1 where status=0 and name='A05'";
	$result2=mysqli_query($connection,$query6);
  $qry5 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A05','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry5);

}
if(isset($_POST['submit'])&&isset($_POST['A6']))
{
	$query7="UPDATE slots SET status=1 where status=0 and name='A06'";
	$result2=mysqli_query($connection,$query7);
  $qry6 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A06','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry6);

}
if(isset($_POST['submit'])&&isset($_POST['A7']))
{
  $query8="UPDATE slots SET status=1 where status=0 and name='A07'";
  $result2=mysqli_query($connection,$query8);
  $qry7 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A07','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry7);
}
if(isset($_POST['submit'])&&isset($_POST['A8']))
{
  $query9="UPDATE slots SET status=1 where status=0 and name='A08'";
  $result2=mysqli_query($connection,$query9);
  $qry8 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A08','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry8);

}
if(isset($_POST['submit'])&&isset($_POST['A9']))
{
  $query10="UPDATE slots SET status=1 where status=0 and name='A09'";
  $result2=mysqli_query($connection,$query10);
  $qry9 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A09','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry9);

}
if(isset($_POST['submit'])&&isset($_POST['A10']))
{
  $query11="UPDATE slots SET status=1 where status=0 and name='A10'";
  $result2=mysqli_query($connection,$query11);
  $qry10 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A10','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry10);

}
if(isset($_POST['submit'])&&isset($_POST['A11']))
{
  $query12="UPDATE slots SET status=1 where status=0 and name='A11'";
  $result2=mysqli_query($connection,$query12);
  $qry11 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A11','$edate','$stime','$etime')";
  $res = mysqli_query($connection,$qry11);

}
if(isset($_POST['submit'])&&isset($_POST['A12']))
{
  $query13="UPDATE slots SET status=1 where status=0 and name='A12'";
  $result2=mysqli_query($connection,$query13);
  $qry12 = "INSERT INTO bookings (book_id,username,slot_name,booking_date,start_time,end_time) VALUES ('','$username','A12','$edate','$stime','$etime')";
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
var val="<?php echo $var1[0] ?>";
/*var ids = new Array(7);
for(var i=0; i<6; i++)
   {ids[i] = "<?php echo $var1[0] ?>"
	document.write(ids[i]);
}*/
if(val==1)
{    //document.getElementById("button1").setAttribute("type", "button disabled");
	 $('#button1').prop('disabled', true);

}
var val2="<?php echo $var1[1] ?>";
if(val2==1)
{
	 $('#button2').prop('disabled', true);
}
var val3="<?php echo $var1[2] ?>";
if(val3==1)
{
	 $('#button3').prop('disabled', true);
}
var val4="<?php echo $var1[3] ?>";
if(val4==1)
{
	 $('#button4').prop('disabled', true);
}
var val5="<?php echo $var1[4] ?>";
if(val5==1)
{
	 $('#button5').prop('disabled', true);
}
var val6="<?php echo $var1[5] ?>";
if(val6==1)
{
	 $('#button6').prop('disabled', true);
}
var val7="<?php echo $var1[6] ?>";
if(val7==1)
{
   $('#button7').prop('disabled', true);
}
var val8="<?php echo $var1[7] ?>";
if(val8==1)
{
   $('#button8').prop('disabled', true);
}
var val9="<?php echo $var1[8] ?>";
if(val9==1)
{
   $('#button9').prop('disabled', true);
}
var val10="<?php echo $var1[9] ?>";
if(val10==1)
{
   $('#button10').prop('disabled', true);
}
var val11="<?php echo $var1[10] ?>";
if(val11==1)
{
   $('#button11').prop('disabled', true);
}
var val12="<?php echo $var1[11] ?>";
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

	</form>
  <div class="btn-group">
  <a href = "slotsC.php">C</a>
  <a href = "slotsB.php">B</a>
  <a href = "slotsA.php">A</a>
</div>
	</body>
</html>

