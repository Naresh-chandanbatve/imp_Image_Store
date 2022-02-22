<?php   
session_start();  
unset($_SESSION['sess_user']);  
unset($_SESSION['sess_pass']);
session_destroy();  
header("location:index.php");  
?>  