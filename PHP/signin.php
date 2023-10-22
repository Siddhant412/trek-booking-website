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