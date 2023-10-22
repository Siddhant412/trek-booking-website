<?php 
  session_start(); 
  if(isset($_SESSION['Email']) && $_SESSION['Email']!=''){

  }else{
    header('location:login.php');
    die();
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>

  <link rel="stylesheet" href="/Mini Project/home.css">
 
	<style> 
		body {
  				background-image: url("http://wallpapercave.com/wp/wp1903471.jpg");
  				background-repeat: no-repeat;
 			    background-color: #cccccc;
 			    background-size: cover;
 				  background-attachment: fixed;
	
			 }
</style>
<!-- http://wallpapercave.com/wp/wp1903471.jpg-->

</head>
<body>

	<header>
		
<h1> MAKE MY TREK </h1>

	</header>


<div class="topnavcol">

	<nav class="topnavl">
			<a href="Home.php">HOME</a>
			<a href="#trek">TREKS</a> 
			<a href="products.html">PRODUCTS</a>
	</nav>		

	<nav class="topnavr">
			
      <a href="\Mini Project\myprofile.php">MY PROFILE</a>
      <a href="signout.php">SIGN OUT</a> 
    
	</nav>

</div>

<div>
	<h1 align="center"><strong><p> Trekking In Mumbai </p></strong></h1>
<h3 align="center" class="wraptop"> Trekking Places Near Mumbai - Book Treks And Packages </h3>
<p class='wrapp'>Trekking in Mumbai is one of the best things to do over a weekend. The state is surrounded by stunning mountain ranges and forts. Korigad Fort Trek, Kalavantin Durg trek, Rajmachi Trek, are some of the best spots for trekking near Mumbai. Mumbai treks invite explorers and adventure junkies to delve into these best trekking places near Mumbai. Some of the best places are, to trek up the forts, do some camping, explore exquisite places Near Mumbai city. </p>
</div>

<br><br><br><br><br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://storage.googleapis.com/ehimages/2019/10/1/img_1d0f1d398035e12461fdae675bdb3616_1569932322327_processed_original.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://storage.googleapis.com/ehimages/2020/3/28/img_3346075b0c3a47540d1686e20099a9da_1585406634952_processed_original.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://storage.googleapis.com/ehimages/2020/3/26/img_8100f567e05e8e949b11948eadf4fa64_1585217596784_processed_original.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<h1 align="center" id="pal"> <strong><p><b>  <font color="White"face="Times New Roman">  Trekking Places Near Mumbai - 5 Upcoming Treks Near Mumbai </font></b></p></strong></h1>

<section class="tp" id="trek">

<div class="trek1">
  <a target="_blank" href="garbett.html">
    <img src="https://storage.googleapis.com/ehimages/2020/3/21/img_f2adec1c64b0b49c43bf0469786458ef_1584797368347_processed_original.jpg" alt="Trek to Garbett Plateau & Bhivpuri Waterfall" width="600" height="400">
  </a>
  <div class="desc"><strong> Trek to Garbett Plateau & Bhivpuri Waterfall	</strong>	</div>
</div>

<div class="trek1">
  <a target="_blank" href="kalsubai.html">
    <img src="https://storage.googleapis.com/ehimages/2020/3/26/img_8100f567e05e8e949b11948eadf4fa64_1585217596784_processed_original.jpg" alt="Kalsubai Monsoon Trek"  width="600" height="400">
  </a>
  <div class="desc"><strong> Kalsubai Monsoon Trek </strong>	</div>
</div>

<div class="trek1">
  <a target="_blank" href="rajmachi.html">
    <img src="https://storage.googleapis.com/ehimages/2020/3/29/img_4b478a3d75338059da0ccbeb7fe1248f_1585477126100_processed_original.jpg" alt="Rajmachi Monsoon Fort Trek	" width="600" height="400">
  </a>
  <div class="desc"><strong> Rajmachi Monsoon Fort Trek	 </strong>	</div>
</div>

<div class="trek1">
  <a target="_blank" href="devkund.html">
    <img src="https://storage.googleapis.com/ehimages/2020/3/26/img_1ac0cd86e31feec057cdaed54c329336_1585231750795_processed_original.jpg" alt="Devkund waterfall Trek"  width="600" height="400">
  </a>
  <div class="desc"><strong> Devkund waterfall Trek </strong>	</div>
</div>

<div class="trek1">
  <a target="_blank" href="visapur.html">
    <img src="https://storage.googleapis.com/ehimages/2020/3/27/img_6e1033cf8c426232f3b2a2471efcc9ee_1585315475214_processed_original.jpg" alt="Visapur Fort Monsoon Trek	" width="600" height="400">
  </a>
  <div class="desc"><strong>Visapur Fort Monsoon Trek	</strong>	</div>
</div>

</section>
 <br> <br> <br> <br> <br>

<footer style="padding: 14px 16px" >
    <b style="padding: 2%; color: black; font-size: 20px" > Business </b>

<ul>
  <li><a href="AboutUs.php">ABOUT US</a></li>
  <li><a href="ContactUs.html">CONTACT US</a></li>
</ul>  
</footer>




</body>
</html>