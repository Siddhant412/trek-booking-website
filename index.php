<?php
session_start();
$error='';                
if(isset($_POST['login_final'])){
    if(empty($_POST['maillogin']) || empty($_POST['passwordlogin'])){
        $error = "Username or Password is Invalid !";
        
    }
    else{
        //Define $Email and $pass
        $Email=$_POST['maillogin'];
        $pass=$_POST['passwordlogin'];
        $conn = mysqli_connect('localhost', 'root');
        //Selecting Database
        mysqli_select_db($conn, 'trek_db');
        $query = "SELECT * FROM customer WHERE password='$pass' AND mail='$Email' ";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);

        if($rows==1){
            $_SESSION['Email'] = $Email;
            $_SESSION['Password'] = $pass;
            if (isset($_SESSION['Email'])){
                header("Location: Home.php");
            }
        }
        else{
            $error = "Username or Password is Invalid !";
        }
        mysqli_close($conn); 
    }
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="\Mini Project\login2.css">

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

  <div class="form">
      
      <ul class="top-area">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">

      <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form method="post">
          
            <div class="label-field">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="maillogin"/>
          </div>
          
          <div class="label-field">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="passwordlogin"/>
          </div>

          <div id="login_error">
            <?php echo $error?>
          </div>

          
          <button class="button button-block" name="login_final" value="login_final">Log In</button>
          
          </form>

        </div>

        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="connect.php" method="post">
          
          <div class="top-row">
            <div class="label-field">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="firstname" required autocomplete="off" />
            </div>
        
            <div class="label-field">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="lastname"/>
            </div>
          </div>

          <div class="label-field">
            <label>
              Mobile Number<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="mobno"/>
          </div>

          <div class="label-field">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="mail"/>
          </div>
          
          <div class="label-field">
            <label>
              Address<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="address"/>
          </div>

          <div class="label-field">
            <label>
              &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Pick your DOB<span class="req">* :</span>
            </label>
            <input type="date" name="birtdate" placeholder="select Birth date" >
          </div>

          <p class="sex">Gender: </p>
            <div class="genderdropdown">
              <select name="gender" >            
                <option value=" "> Select </option> 
                <option value="Male">Male</option> 
                <option value="Female">Female</option> 
                <option value="Other">Other</option>
              </select>
            </div>

          <div class="label-field">
            <label>
              Mention Dependents, if any
            </label>
            <input type="text" autocomplete="off" name="dependent"/>
          </div>

          <div class="label-field">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>
          
          <button type="submit" class="button button-block">Get Started</button>
          
          </form>

        </div>
        
        
        
      </div>  
</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="/Mini Project/function.js"></script>

</body>
</html>