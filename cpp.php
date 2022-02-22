<?php 
 $response=""; 
session_start();  

if(!isset($_SESSION["sess_user"])  && !isset($_SESSION["sess_pass"]) ){  
    header("location:index.php");  
} else {  


if(isset($_POST["submit"])){  


if(!empty($_POST['pass1']) && !empty($_POST['pass2']) ) {    
      
    $pass=$_SESSION["sess_pass"];
      
    $user=$_SESSION["sess_user"];

     $con=mysqli_connect('fdb29.awardspace.net','3611298_testaward','Naresh@12','3611298_testaward') or die(mysqli_error());
  
    $query=mysqli_query($con,"SELECT * FROM Users WHERE Username='".$user."' AND Password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  


    if($numrows!=0)  
          {  
             while($row=mysqli_fetch_assoc($query))  
                {    
                    $dbpassword=$row['Password'];  
                }  
    
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];

              if($pass1 == $pass2)  
           {  
         
               $query2=mysqli_query($con,"UPDATE `Users` SET Password='".$pass1."' WHERE Username='".$user."'");
           
                
             header("Location: nareshdocs.php");
    
      
           }          else {  
                               $response = "Password must be Same!";
     
                           }  

          }
  
}             else {  
                      $response = "All fields are required!";  
                    }  
}  
}

?>