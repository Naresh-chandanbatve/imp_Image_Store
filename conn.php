<?php
 if(session_id()==="") {session_start();}  
$response = "";
   if(isset($_POST["submit"])){ 
  if((!empty($_POST['user'])) || (!empty($_POST['pass']))) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  


  $con=mysqli_connect('localhost','root','Naresh@12', 'sql_auth');


   $query=mysqli_query($con,"SELECT * FROM user WHERE Username='".$user."' AND Password='".$pass."';");  
    $numrows = mysqli_num_rows($query);  
    if(!($numrows == 0))   {  
     
    while($row=mysqli_fetch_assoc($query))  {  

                  $dbusername=$row['Username'];  
                  $dbpassword=$row['Password']; 
                  
                  $dbuploadindex=$row['uploadindex'];
              $dbprofileurl=$row['profileurl'];

     if($dbuploadindex>=1) { $dbuplurl1=$row['uplurl1'];}
    if($dbuploadindex>=2) {$dbuplurl2=$row['uplurl2'];}
   if($dbuploadindex>=3)  {$dbuplurl3=$row['uplurl3'];}
    if($dbuploadindex>=4)  { $dbuplurl4=$row['uplurl4'];}
    if($dbuploadindex>=5) {$dbuplurl5=$row['uplurl5'];}
     if($dbuploadindex>=6) {$dbuplurl6=$row['uplurl6'];}
     if($dbuploadindex>=7)  {$dbuplurl7=$row['uplurl7'];}
     if($dbuploadindex>=8) {$dbuplurl8=$row['uplurl8'];}
    if($dbuploadindex>=9)  { $dbuplurl9=$row['uplurl9'];}
     if($dbuploadindex>=10){   $dbuplurl10=$row['uplurl10'];}
     if($dbuploadindex>=11) {$dbuplurl11=$row['uplurl11'];}
    if($dbuploadindex>=12){$dbuplurl12=$row['uplurl12'];}
     if($dbuploadindex>=13) {$dbuplurl13=$row['uplurl13'];}
      if($dbuploadindex>=14){ $dbuplurl14=$row['uplurl14'];}
      if($dbuploadindex>=15) {$dbuplurl15=$row['uplurl15'];}
      if($dbuploadindex>=16) {$dbuplurl15=$row['uplurl16'];}


             }



          if($user == $dbusername && $pass == $dbpassword)  {  
                  

            $_SESSION['sess_user']=$user; 
            $_SESSION['sess_pass']=$pass; 
            
             $_SESSION['uploadindex']=$dbuploadindex;
  $_SESSION['sess_profile']=$dbprofileurl;
 if($dbuploadindex>=1) { $_SESSION['uplurl1']=$dbuplurl1;}
 if($dbuploadindex>=2) { $_SESSION['uplurl2']=$dbuplurl2;}
 if($dbuploadindex>=3) { $_SESSION['uplurl3']=$dbuplurl3;}
 if($dbuploadindex>=4) {  $_SESSION['uplurl4']=$dbuplurl4;}
 if($dbuploadindex>=5) { $_SESSION['uplurl5']=$dbuplurl5;}
 if($dbuploadindex>=6) {  $_SESSION['uplurl6']= $dbuplurl6;}  
 if($dbuploadindex>=7) { $_SESSION['uplurl7']=$dbuplurl7;}
 if($dbuploadindex>=8) {  $_SESSION['uplurl8']=$dbuplurl8;}
 if($dbuploadindex>=9)  {$_SESSION['uplurl9']=$dbuplurl9;}
 if($dbuploadindex>=10) {  $_SESSION['uplurl10']=$dbuplurl10;}
 if($dbuploadindex>=11) {  $_SESSION['uplurl11']=$dbuplurl11;}
 if($dbuploadindex>=12) { $_SESSION['uplurl12']=$dbuplurl12;}
 if($dbuploadindex>=13)  { $_SESSION['uplurl13']=$dbuplurl13;}
 if($dbuploadindex>=14) {  $_SESSION['uplurl14']=$dbuplurl14;}
 if($dbuploadindex>=15) {  $_SESSION['uplurl15']=$dbuplurl15;}
  if($dbuploadindex>=16) {$dbuplurl15=$row['uplurl16'];}

                         /* Redirect browser */  
                    header("Location:nareshdocs.php");  
                    // $response = ".. ".$dbuploadindex; 
                  }
                
                
                
         }       
         else {

        $response = "Invalid username and password!" ;
     }


          
       }
       
       else {  
   $response = "All fields are required!";  
}   
   
   }
   
?>


             