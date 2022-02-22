<?php session_start();
  $response="";

 if(isset($_POST["submit"]))
{
        
   if(!empty($_FILES['profile']['name'])) {
              
         $uploadindex=$_SESSION['uploadindex'];
         $uploadindex++;
         
        $filename=$_FILES['profile']['name'];
        $con=mysqli_connect('localhost','root','Naresh@12', 'sql_auth');
                   
           $SQL_fetch="SELECT uplurl".$uploadindex." FROM `user` WHERE Username='".$_SESSION['sess_user']."';";
           $result0=mysqli_query($con,$SQL_fetch);
         
  


              


         if(!$result0) {
            $filename=$_FILES['profile']['name'];
                 
               $SQLcol="ALTER TABLE `user` ADD `uplurl".$uploadindex."` VARCHAR(200) ;";
                  $result1=mysqli_query($con,$SQLcol);
               $SQLdata="UPDATE user SET uplurl".$uploadindex."='http://localhost/uploads/".$filename."' WHERE Username='".$_SESSION['sess_user']."';";
              $result2=mysqli_query($con,$SQLdata);
                        
          }
             else {  
                    
               $filename=$_FILES['profile']['name'];
               $SQLdata="UPDATE user SET uplurl".$uploadindex."='http://localhost/uploads/".$filename."' WHERE Username='".$_SESSION['sess_user']."';";
                $result2=mysqli_query($con,$SQLdata);
                          
             }
               

   


        $refreshdb="UPDATE user SET uploadindex=".$uploadindex." WHERE Username='".$_SESSION['sess_user']."';";
         $refresh=mysqli_query($con,$refreshdb);




            
       

          $filename=$_FILES['profile']['name'];

           $location ="uploads/".$filename ;

          if(move_uploaded_file($_FILES['profile']['tmp_name'],$location)){
           $response="IMAGE UPLOADED SUCCESSFULLY";
            }
          else {
                  $response="IMAGE NOT UPLOADED";
            }

     }

     else {
               $response="PLEASE SELECT AN IMAGE FIRST";
     }

}

 

?>
 <html>
          <head>
                 <Title> Upload an image</Title>



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
             border-radius:15px;
             box-shadow: 8px 8px 8px black;
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
                   border-radius: 15px;
                          box-shadow: 10px 10px 10px grey;
                       
                 }  
                 
  .button-style {
           background-color: blue;
            color:#ffff00;
           Height:60px;
           width:150px;
           
        }

        fieldset {
          height:max-content;
          width:max-content;
          padding-left:200px;
          padding-right:200px;
          Background-color:rgb(125, 99, 99);
          border-radius: 15px;
          box-shadow: 10px 10px 10px black;
        }


               </style>

          </head>

    <body>  
     <center><h1>STORE YOUR PRIVATE OR IMPROTANT IMAGES</h1>
 <br><br>  
  
<a href="logout.php"><div class="lnks"><Font size="5px" color="#ffff00"><center>Logout</center></Font></div> </a><br><br><br>
<a href="nareshdocs.php"><Div class="lnks"><Font size="5px" color="#ffff00">Home</Font></Div></a></p> </Div>
<br><br><br><br>
<Font  size="5px" ><h3>Upload an image</h3><br>
<form enctype="multipart/form-data"  method="POST"> 
 <legend>
       <fieldset>

<br>

<img src="" height="200px" width="200px"  id="output"> 
<br>
<div class="inp">
<Font size="40px" ></Font> <input  type="file" style="display: none;" accept="image/x-png, image/jpg , image/jpeg, .pdf ,image/gif image/psd" id="profile" name="profile"  onchange="loadFile(event)"><br />
<label  for="profile" class="button-style">Select 
images</label> 
</div>
</Font>
<br>
  <p id="msg"><Font Color="yellow"><?php echo $response ?> </Font></p>
<div class="submit_btn"> <Input type="submit"  value="UPLOAD" name="submit" />  </div>
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