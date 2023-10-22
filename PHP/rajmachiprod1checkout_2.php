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
   //echo $idd;
  $cust_id = $idd;
  $product_price = 5999;
  $product_name = "Waterproof Jacket";
  
  $err_msgg = "";

  $insert="insert into product(cust_id, product_price, product_name) values('$cust_id',' $product_price', '$product_name')";
  $stmt = $conn->prepare($insert);
  // $stmt->bind_param("iiss", $cust_id, $event_price, $event_location, $event_date);
  if ($stmt->execute()){
    $err_msgg = "Transaction Successful !";
  }
  else{
    $err_msgg = "Transaction Failed !";
  }
  
  $stmt->close();
  $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rajmachiprod1bought</title>

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
    <div style="text-align: center; padding-top: 10%; font-size: x-large; color: rgb(196, 135, 5);">
        <?php echo $err_msgg?>     
    </div>

    <div style="padding-left: 30%; padding-top: 5%; float: left">
      <a href='/Mini Project/Home.php'>Go to Home</a>
    </div>

    <div style="padding-left: 63%; padding-top: 5%">
      <a href='/Mini Project/myprofile.php'>Review Buying Details</a>
    </div>
    
</body>
</html>