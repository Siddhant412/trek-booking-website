<?php
session_start();

$conn = mysqli_connect('localhost', 'root');
  mysqli_select_db($conn, 'trek_db');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);

}

$pwd= $_SESSION['Password'];
$mail= $_SESSION['Email'];

$query1 = "SELECT cust_id FROM customer WHERE password= '$pwd' AND mail= '$mail'";
  $result_cust_id = mysqli_query($conn, $query1);
  if (mysqli_num_rows($result_cust_id) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result_cust_id)) {
      $idd  = $row["cust_id"];
    }
  } else {
    echo "0 results";
  }

$namee=$_POST['Name'];
$eemail=$_POST['Email'];
$noo=$_POST['Number'];
$mssgg=$_POST['Message'];


$cust_id = $idd;



if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}
else{
  $stmt = $conn->prepare("insert into contactus(cust_id, name, email, phnno, message) values('$cust_id','$namee','$eemail','$noo','$mssgg')");
  
  $stmt->execute();
    
    $stmt->close();
    $conn->close();
  }



?>


<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Thank You</title>
  
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



<div>

 <section> 
       
  
    <h4><em> <font color="#000000" face="Sylfaen" size="4px">We Will Look Into Your Problem And Contact You As Soon As Possible </font></em></h4>
    <h5><em><font color="#000000" face="Sylfaen" size="4px"> Thank You For Your Feedback . Let Us Know if anything else comes up and feel Free to share any other feedback you have with us !</font></em></h5>
	
		<br>
		<br>
	<h2 id="title"><em><font color="#000000" face="Sylfaen">Thank You !!</font></em> </h2>
	
</section>
</body>
</html>