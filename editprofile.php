<?php 
   $response="";
 if(isset($_POST["submit"]))
{
        
   if(!empty($_FILES['profile']['name'])) {
              session_start();

          $filename=$_FILES['profile']['name'];
         $con=mysqli_connect('localhost','root','Naresh@12', 'sql_auth') or die(mysqli_error());
          $SQLupload="UPDATE user SET profileurl='http://localhost/images/".$filename."' WHERE username='".$_SESSION['sess_user']."';";
         $result=mysqli_query($con,$SQLupload);


          $filename=$_FILES['profile']['name'];

           $location ="images/".$filename ;

          if(move_uploaded_file($_FILES['profile']['tmp_name'],$location)){
           $response="PROFILE PICTURE CHANGED SUCCESSFULLY";
            }
          else {
                  $response="PROFILE PICTURE NOT UPLOADED";
            }

     }

     else {
               $response="PLEASE SELECT AN IMAGE FIRST";
     }
     

      

}

 

?>
 <html>
          <head>
                 <Title> Change Profile Picture</Title>



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
             
             Font-Size:50px;
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
                 }  
                 
  .button-style {
           background-color: blue;
            color:#ffff00;
           Height:60px;
           width:150px;
        }


               </style>

          </head>

    <body>  
     <center><h1>NARESH'S IMPORTANT DOCUMENTS</h1>
 <br><br>  
   
<a href="logout.php"><div class="lnks"><Font size="5px" color="#ffff00"><center>Logout</center></Font></div> </a>
<br> <br><br><a href="nareshdocs.php"><Div class="lnks"><Font size="5px" color="#ffff00">Home</Font></Div></a></p> </Div>
<br><br><br><br>
<Font  size="5px" ><h3>Change Profile Picture</h3><br>
<form enctype="multipart/form-data"  method="POST"> 
 <legend>
       <fieldset>

<br>

<img src="" height="200px" width="200px"  id="output"> 
<br>
<div class="inp">
<Font size="40px" ></Font> <input  type="file" style="display: none;" accept="image/x-png, image/jpg , image/jpeg, image/gif" id="profile" name="profile"  onchange="loadFile(event)"><br />
<label  for="profile" class="button-style">Select Profile</label>
</div>
</Font>
<br>
  <p id="msg"><Font Color="red"><?php echo $response ?> </Font></p>
<div class="submit_btn"> <Input type="submit"  value="UPDATE" name="submit" />  </div>
        </legend>
       </fieldset>
</form>  
  </center>
</body>

<script>
var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
      
    reader.readAsDataURL(event.target.files[0]);
  };

</script>
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