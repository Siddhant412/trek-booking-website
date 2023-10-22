<?php
    session_start();
    $conn = mysqli_connect('localhost', 'root');
    mysqli_select_db($conn, 'trek_db');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        //echo "connection successful";
    }
    $pwd= $_SESSION['Password'];
    $mail= $_SESSION['Email'];
    
    $query = "SELECT cust_id FROM customer WHERE password= '$pwd' AND mail= '$mail'";
    $result_cust_id = mysqli_query($conn, $query);
    if (mysqli_num_rows($result_cust_id) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result_cust_id)) {
        $idd  = $row["cust_id"];
        }
    } else {
        echo "0 results";
    }
    //   echo $result_cust_id;
    $cust_id = $idd;

    $query = "SELECT * FROM product WHERE cust_id ='$cust_id'";
    $resultt = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($resultt);

    $query2 = "SELECT * FROM events WHERE cust_id ='$cust_id'";
    $resultt2 = mysqli_query($conn, $query2);
    $num_booked = mysqli_num_rows($resultt2);

    $query3 = "SELECT firstname, lastname, mobno, dob FROM customer WHERE cust_id = '$cust_id'";
    $result_name = mysqli_query($conn, $query3);
    if (mysqli_num_rows($result_name) > 0) {
        // output data of each row
        while($row1 = mysqli_fetch_assoc($result_name)) {
        $fname  = $row1["firstname"];
        $lname  = $row1["lastname"];
        $mobno  = $row1["mobno"];
        $dob  = $row1["dob"];
        }
    } else {
        //echo "0 results";
    }

    $tot_Pprice = 0;
    $query4 = "SELECT product_price FROM product WHERE cust_id = '$cust_id'";
    $result_Pprice = mysqli_query($conn, $query4);
    if (mysqli_num_rows($result_Pprice) > 0) {
        // output data of each row
        while($row2 = mysqli_fetch_assoc($result_Pprice)) {
        $product_price  = $row2["product_price"];
        $tot_Pprice = $tot_Pprice + $product_price;
        }
    } else {
        //echo "0 results";
    }

    $tot_Eprice = 0;
    $query5 = "SELECT event_price FROM events WHERE cust_id = '$cust_id'";
    $result_Eprice = mysqli_query($conn, $query5);
    if (mysqli_num_rows($result_Eprice) > 0) {
        // output data of each row
        while($row3 = mysqli_fetch_assoc($result_Eprice)) {
        $event_price  = $row3["event_price"];
        $tot_Eprice = $tot_Eprice + $event_price;
        }
    } else {
        //echo "0 results";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="/Mini Project/home.css">
    <link rel="stylesheet" href="/Mini Project/myprofile.css">

    <style> 
		body {
  				background-image: url("http://wallpapercave.com/wp/wp1903471.jpg");
  				background-repeat: no-repeat;
 			    background-color: #cccccc;
 			    background-size: cover;
 				background-attachment: fixed;
			 }
    </style>

</head>
<body>
    
    <header>
        <h1> My Profile </h1>
    </header>

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

    <div id="profilepic">
        <img src="https://www.uks-kapry.pl/images/face.png" alt="trek-product" width="15%" >
    </div>

    <div id="personal_details1">
        <?php echo "Username: ".$fname ." " .$lname?>
    </div>

    <div id="personal_details2">
        <?php echo "Email ID: ".$mail?>
    </div>

    <div id="personal_details3">
        <?php echo "Mob. No.: ".$mobno?>
    </div>

    <div id="personal_details4">
        <?php echo "D.O.B: ".$dob?>
    </div>

    <div id="product_details">
        <?php echo "Number of Products ordered: ".$num_rows?>
    </div>

    <div id="product_price">
        <?php echo "Total price of products bought: Rs. ".$tot_Pprice?>
    </div>

    <div id="booking_details">
        <?php echo "Number of Treks booked: ".$num_booked?>
    </div>

    <div id="event_price">
        <?php echo "Total price of booked treks: Rs. ".$tot_Eprice?>
    </div>


</body>
</html>
$tot_price