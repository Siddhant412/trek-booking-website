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

	<title>About Us</title>

	<link rel="stylesheet" href="/Mini Project/home.css">

	<style> 
		body {
  				background-image: url("http://wallpapercave.com/wp/wp1903471.jpg");
  				background-repeat: no-repeat;
 			    background-color: #cccccc;
 			    background-size: cover;
 				  background-attachment: scroll;
	
			 }
</style>

</head>

<body>

	<div class="topnavcol">

		<nav class="topnavl">
				<a href="Home.php">HOME</a>
				<a href="/Mini Project/Home.php/#trek">TREKS</a> 
				<a href="products.html">PRODUCTS</a>
		</nav>		
	
		<nav class="topnavr">
				
		  <a href="\Mini Project\myprofile.php">MY PROFILE</a>
		  <a href="signout.php">SIGN OUT</a> 
		
		</nav>
	
	</div>

  
	<br>
<section>
		<h1 align="center" id="title"><b><em> <font color="#000000" face="Sylfaen" size="6px"> About Us </font></em></b></h1>

		 <em> <font color="#000000" face="Sylfaen" size ="5px"> We do everything with our core values of honesty, hard work and trust. We believe these characteristics should influence everything we do in business and life. We sincerly enjoy the work we do, and our clients get to reap the benefits. </font></em><br><br>
		 <em><font color="#000000" face="Sylfaen"  size ="5px"> With the strong support from our cooperated factories , we are committed to offering quality ,efficient and cost efficient trip to our customers </font> </em>  <br><br>
		 <em> <font color="#000000" face="Sylfaen"  size ="5px"> Our customes's Satisfaction is of great importance to us .If they are happy ,so are we. We strive towards a lasting relation ship that will prove successful for both sides!! </font></em> 
</section>		 

</body>
</html>