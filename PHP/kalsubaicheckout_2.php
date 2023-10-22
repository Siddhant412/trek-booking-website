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
  $event_price = 7500;
  $event_location = "Kalsubai";
  $event_date = "2020-06-01";
  
  $err_msgg = "";

  $insert="insert into events(cust_id, event_price, event_location, event_date) values('$cust_id',' $event_price', '$event_location', '$event_date')";
  $stmt = $conn->prepare($insert);
  // $stmt->bind_param("iiss", $cust_id, $event_price, $event_location, $event_date);
  if ($stmt->execute()){
    $err_msgg1 = "Booking Successful !";
    $err_msgg2 = "We are looking forward to provide you a world-class experience.";
    $err_msgg3 = "Further details will be mailed to you on your registered Email ID.";
  }
  else{
    $err_msgg1 = "Booking Failed !";
    $err_msgg2 = "Please try again";
    $err_msgg3 = "";
  }
  
  $stmt->close();
  $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalsubai-booked</title>

    <style> 
		body {
  				background-image: url("https://image.freepik.com/free-photo/greenery-product-background_53876-89517.jpg");
  				background-repeat: no-repeat;
 			    background-color: #cccccc;
 			    background-size: cover;
 				background-attachment: fixed;
			 }
    </style>
</head>
<body>
<div style="text-align: center; padding-top: 7%; font-size: x-large; color: rgb(196, 135, 5);">
        <?php echo $err_msgg1?>     
    </div>

    <div style="text-align: center; padding-top: 4%; font-size: x-large; color: rgb(196, 135, 5);">
        <?php echo $err_msgg2?>     
    </div>

    <div style="text-align: center; padding-top: 4%; font-size: x-large; color: rgb(196, 135, 5);">
        <?php echo $err_msgg3?>     
    </div>

    <div style="padding-left: 30%; padding-top: 5%; float: left">
      <a href='/Mini Project/Home.php'>Go to Home</a>
    </div>

    <div style="padding-left: 63%; padding-top: 5%">
      <a href='/Mini Project/myprofile.php'>Review Booking Details</a>
    </div>
    
</body>
</html>