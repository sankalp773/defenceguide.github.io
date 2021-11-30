<html>
<head>
<title>homepage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body style="background-image:url(https://images.unsplash.com/photo-1547149600-a6cdf8fce60c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHRleHR1cmV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60);
">

<center><div class="home">
<h1>Must Reads</h1><br><br>
<p>The topics which every aspirant wants to know about!!</p><br>
 <!-- Slideshow container -->
<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <a href="para.php" target="inpage"><img src="https://media.istockphoto.com/photos/indian-army-picture-id1320863387?k=20&m=1320863387&s=612x612&w=0&h=e_wtFX_UqEAmPlD2BpReg7nVIch7qz5W7InvymsEPGs="; style="text-align:center; filter:brightness(150%);box-shadow:0px 0px 6px 4px rgba(89,89,89,0.4);border-radius:8px;"  width="612px" height="408px" class="cimag"></a>
    <div class="middle"><div class="text">Para SF and other SFs</div></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <a href="kvd.php" target="inpage"><img src="https://media.istockphoto.com/vectors/july-kargil-vijay-diwaskargil-victory-day-illustration-vector-image-vector-id1163301394?k=20&m=1163301394&s=612x612&w=0&h=xNVDs7_BjKh_pBpWz29FhA2GBEjCKyjhiDmPHdcMZzc=" style="border-radius:8px;box-shadow:0px 0px 6px 4px rgba(89,89,89,0.4);text-align:center; filter:saturate(80%);filter:brightness(101%);" width="612px" height="408px" class="cimag"></a>
    <div class="middle"> <div class="text">Kargil Vijay Diwas</div></div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <a href="aircrafts.php" target="inpage"><img src="https://media.istockphoto.com/photos/lockheed-f16c-flying-above-general-public-picture-id988984746?k=20&m=988984746&s=612x612&w=0&h=n_tcmYAney9uQHAmV1NI7OGopcHmpCiQgECrLaRzync=" style="border-radius:8px;box-shadow:0px 0px 6px 4px rgba(89,89,89,0.4);text-align:center; filter:saturate(50%); filter:brightness(150%); " width="612px" height="408px" class="cimag"></a>
    <div class="middle"><div class="text">Top Aircrafts Of Air Force</div></div>
  </div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
</center>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script></body>
</html>