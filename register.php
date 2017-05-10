<?php
require_once('connect.php');
if(isset($_POST)& !empty($_POST)){
	$username = mysqli_real_escape_string($connection,$_POST['username']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$password = md5($_POST['password']);

	$sql = "INSERT into users (username,email,password) VALUES ('$username','$email','$password')";
	$result = mysqli_query($connection,$sql);
	if($result){
		$smsg = "User registration successful";
	}
		else {
			$fmsg = "User registration failed";
			}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> User Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="javascriptfile.js"></script>

</head>
<body>
<div class="container">
	<?php if(isset($smsg)){ ?> <div class = "alert alert-success" role="alert"><?php echo $smsg; ?> </div> <?php } ?>
	<?php if(isset($fmsg)){ ?> <div class = "alert alert-danger" role="alert"><?php echo $fmsg; ?> </div> <?php } ?>
	<form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Register</h2>
	    <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">@</span>
		  <input type="text" name="username" class="form-control" placeholder="Username" required>
		</div>
		<input type="email" name="email" id="inputEmail" class="form-control"  placeholder="Email Address" required autofocus><br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control"  placeholder="Password" required><br>
        <input type="password" name="password" id="confirmPassword" class="form-control"  placeholder="Confirm Password" required><span id="message"></span><br>
        <script type="text/javascript">
        $(document).ready(function() {
        $('#inputPassword, #confirmPassword').on('keyup', function () {
    	if ($('#inputPassword').val() == $('#confirmPassword').val()) {
        	$('#message').html('Passwords match').css('color', 'green');
    		} else 
        	$('#message').html('Passwords do not match').css('color', 'red');
		});
    });
 		</script>
        <br><button class="btn btn-lg btn-primary btn-block" type="submit">Register</button><br>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
        <div class="random-text" style="color:red">
        <br>*Click on Login if you are have already registered
        </div>
      </form>
</div>      
</body>
</html>
