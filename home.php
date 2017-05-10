<!DOCTYPE html>
<html>
<title>Park-a-Lot</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="homestyle.css">
<style>
.mySlides 
{
  display:none;
  /*max-width:100%;*/
  height:400px;
  width:800px;
}

.w3-content w3-section
{
  top:200px;
}

.circle {
  left:100px;
  margin-right: 15px;
  display: inline-block;
  background-color: transparent;
  width: 12px;
  height: 12px;
  border-radius: 10px;
}

</style>
<head>
<div class="title">
<h1>Park-a-Lot</h1>
</div><br><br><br>
<script src="javascriptfile.js"></script>
</head>

<body>
<form>
<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides w3-animate-right" src="img1.jpg" >
  <img class="mySlides w3-animate-right" src="img2.jpg" >
  <img class="mySlides w3-animate-right" src="img3.jpg" >
</div>

<!--
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="img1.jpg" style="width:100%">
  <img class="mySlides" src="img2.jpg" style="width:100%">
  <img class="mySlides" src="img3.jpg" style="width:100%">
</div>-->

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 2 seconds
}

</script>
<div class="login-btn">
<a class = "btn btn-lg btn-primary btn-block" href="login.php">Login</a><span> to book now</span>
</div>
</form>
</body>
</html>
