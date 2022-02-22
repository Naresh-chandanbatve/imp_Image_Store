<?php require 'conn.php';?>
<html>  
<head>  
<title>Login</title>  
    <link rel="stylesheet" href="css/main.css">
</head>  
<body>  
     <center><h1> Login Form</h1>
 <br><br>  
 <a href="register.php"><Div class="lnks"> <p><Font size="5px" color="#ffff00">Register</Font></Div></a><br><br> <br> 

 <br><br>
<form action="" method="POST"> 
 <legend>
       <fieldset> 
<div class="inp">
Username :  <input type="text" name="user"><br />  <br>
Password : <input type="password" name="pass"><br />   <br>
</div>

  <p id="msg"><?php echo $response ?> </p>
<div class="submit_btn"> <Input  type="submit"  value="Login" name="submit" />  </div>
        </legend>
       </fieldset>
</form>  
  </center>





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