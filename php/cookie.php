
<?php


 if(!isset($_COOKIE['number1'])){

  $cookie_name="number1";
  $cookie_value=$_POST["first"];

  setcookie($cookie_name,$cookie_value);

 }

else{

  $cookie_n=$_COOKIE($cookie_name);

 }
  
 
  
  
 

?>

