<!doctype html>  
<?php  
  $response="";
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  $con=mysqli_connect('localhost','root','Naresh@12','sql_auth') or die(mysqli_error());
  
    $query=mysqli_query($con,"SELECT * FROM user WHERE username='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO user(username,password) VALUES('$user','$pass')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
    $response =  "Account Successfully Created";  
    } else {  
   $response =  "Failure!";  
    }  
  
    } else {  
    $response = "That username already exists! Please try again with another.";  
    }  
  
} else {  
    $response = "All fields are required!";  
}  
}  
?>
<html>  
<head>  
<title>Register</title>  

   <link rel="stylesheet" href="css/register.css">

</head>  
<body>  
     
    <center><h1>Registration Form    </h1>   <br><br>
 <a href="index.php"><Div class="lnks"><Font size="5px" color="#ffff00">Login</Font></Div></p> </Div> </a> <br><br>


 <br><br>
  <form onsubmit="return confirm('Do you really want to submit the form?');" action="" method="POST">  
        <legend>
       <fieldset>
        <div class="inp">  
Username: <input type="text" name="user">  <br /> <br>
Password: <input type="password" name="pass"><br />   <br>
 </div>     
 <p id="msg"><?php echo $response ?> </p> <br><br>
<div class="reg_btn"><input  type="submit" value="Register" name="submit" />  </div>
        
        </fieldset>  
        </legend> 
</form>  
  

<script language="JavaScript">
  /**
    * Disable right-click of mouse, F12 key, and save key combinations on page
    * By Arthur Gareginyan (https://www.arthurgareginyan.com)
    * For full source code, visit https://mycyberuniverse.com
    */
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
</body>  
</html>   