<?php
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$mobno = $_POST['mobno'];
	$mail = $_POST['mail'];
	$address = $_POST['address']; 
	$dob = $_POST['birtdate'];
	$sex = $_POST['gender'];
	$dependent = $_POST['dependent'];
	$password = $_POST['password'];

	$conn = new mysqli('localhost', 'root', '', 'trek_db');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into customer(firstname, lastname, mobno, mail, address, dob, sex, dependent, password) values(?, ?, ?, ?, ?, ?, ? ,? ,?)");
		$stmt->bind_param("ssissssss", $firstname, $lastname, $mobno, $mail, $address, $dob, $sex, $dependent, $password);
		if($stmt->execute()){
			//echo "registration successful";
			$_SESSION['Email'] = $mail;
			$_SESSION['Password'] = $password;
			header("Location: /Mini Project/index.php");
			$stmt->close();
			$conn->close();
		}
		else{
			$er_msg = "Account with the given email id exists !";
		}
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

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
	<div style="color: rgb(182, 113, 10); text-align: center; padding-top: 13%; font-size: x-large;">
		<?php echo $er_msg?>
	</div>

	<div style="color: rgb(182, 113, 10); text-align: center; padding-top: 4%; font-size: large;">
		<a href="/Mini Project/index.php">Try again</a>
	</div>
</body>
</html>