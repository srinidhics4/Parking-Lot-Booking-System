<!DOCTYPE html>
<html>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
</style>
<body>

<div class="w3-content w3-section" style="max-width:800px">
  <img class="mySlides" src="img1.jpg" >
  <img class="mySlides" src="img2.jpg" >
  <img class="mySlides" src="img3.jpg" >
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

</body>
</html>