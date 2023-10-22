<?php 
    session_start(); 
  
    unset($_SESSION['Email']); 
    unset($_SESSION['Password']);  
    session_write_close(); 
    session_destroy(); 
    header("Location:index.php"); 
?>