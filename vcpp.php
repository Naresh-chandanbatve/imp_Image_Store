<?php 
$response=""; 
session_start();  

if(!isset($_SESSION["sess_user"])  && !isset($_SESSION["sess_pass"]) ){  
    header("location:index.php");  
} else {  


if(isset($_POST["submit"])){  
if(!empty($_POST['pass'])) {    
    $pass=$_POST['pass'];  
      
    $user=$_SESSION["sess_user"];
   
     $con=$con=mysqli_connect('localhost','root','Naresh@12', 'sql_auth') or die(mysqli_error());
  
  
    $query=mysqli_query($con,"SELECT * FROM user WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {    
    $dbpassword=$row['Password'];  
    }  
  
    if($pass == $dbpassword)  
    {  
    
       header("Location: changepass.php");
   
    }  
    } else {  
     $response = "Invalid username or password!";
     
    }  
  
} else {  
   $response = "All fields are required!";  
}  
}  

}
?>