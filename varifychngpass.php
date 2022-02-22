<?php require 'vcpp.php';?>
<html>
<head>
      <Title> Change Password </Title>


<style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
      
      
        }  
            h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  

        }

    .submit_btn Input {
             
             Font-Size:35px;
             Color:#000000;
             Background-Color:#ffff00;
             }

.inp Input { 
            Font-size:50Px;
            Border-color:#000000;
            Float:Center;
            Background-Color :#00000;
            height:50px;
               Width:380px;
              }

.lnks {
                  Background-color:#9999ff;
                   Float:Right;
                  height:50px;
                  width:230px;
                  box-shadow: 10px 10px 10px gray;
                  border-radius: 15px;
                 }  

</style>
</head>

<body>  
     <center><h1>STORE YOUR PRIVATE OR IMPROTANT IMAGES</h1>
 <br><br>  
   <a href="register.php"><Div class="lnks"> <p><Font size="5px" color="#ffff00">Register</Font></Div></a><br><br> <br>
<a href="logout.php"><div class="lnks"><Font size="5px" color="#ffff00"><center>Logout</center></Font></div> </a><br><br><br>
<a href="nareshdocs.php"><Div class="lnks"><Font size="5px" color="#ffff00">Home</Font></Div></a></p> </Div> 

<br><br><br><br>
<Font size="5px" ><h3>Varify Old Password</h3><br>
<form action="" method="POST">  
<div class="inp">
  &nbsp; &nbsp; &nbsp; Old Password  &nbsp; &nbsp;: &nbsp; <input type="password" name="pass"><br /> <br>

</div>
</Font>
  <p id="msg"><Font Color="red"><?php echo $response ?> </Font></p>
<div class="submit_btn"> <Input  type="submit"  value="Varify" name="submit" />  </div>
</form>  
  </center>




</body>
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
</html>








