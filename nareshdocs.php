<?php
session_start(); 
      $profileurl=$_SESSION['sess_profile'];
             $dbuploadindex=$_SESSION['uploadindex'];
     if($dbuploadindex>=1)    $imgsrc1=$_SESSION['uplurl1']; 
      if($dbuploadindex>=2)    $imgsrc2=$_SESSION['uplurl2'];
      if($dbuploadindex>=3)    $imgsrc3=$_SESSION['uplurl3'];
      if($dbuploadindex>=4)  $imgsrc4=$_SESSION['uplurl4'];
     if($dbuploadindex>=5)   $imgsrc5=$_SESSION['uplurl5'];
     if($dbuploadindex>=6)   $imgsrc6=$_SESSION['uplurl6'];
      if($dbuploadindex>=7)     $imgsrc7=$_SESSION['uplurl7'];
      if($dbuploadindex>=8)  $imgsrc8=$_SESSION['uplurl8'];
      if($dbuploadindex>=9)    $imgsrc9=$_SESSION['uplurl9'];
      if($dbuploadindex>=10)     $imgsrc10=$_SESSION['uplurl10'];
      if($dbuploadindex>=11)     $imgsrc11=$_SESSION['uplurl11'];
      if($dbuploadindex>=12)      $imgsrc12=$_SESSION['uplurl12'];
       if($dbuploadindex>=13)    $imgsrc13=$_SESSION['uplurl13'];
       if($dbuploadindex>=14)     $imgsrc14=$_SESSION['uplurl14'];
       if($dbuploadindex>=15)       $imgsrc15=$_SESSION['uplurl15'];
         if($dbuploadindex>=16)       $imgsrc15=$_SESSION['uplurl16'];  


if ($profileurl==null)
  {
    $profileurl="images/profile-logo.jpg";
}
 
     if ($_SESSION['sess_user'] != "Naresh") {
  $hideme = 'display:None;' ;
} else {
  $hideme = '';
}
    


if(!isset($_SESSION["sess_user"])  && !isset($_SESSION["sess_pass"])  ){  
    header("location:index.php");  
} else {  
?>  
<!doctype html> 
 
<html>  
<head>  
<title>Welcome</title>  
  <link rel="stylesheet" href="css/nareshdocs.css">
</head>  
<body>  
  <center><h1 >Your Important Documents</h1>  </center>
   
 <!-----

UPDATE `login`
SET uploadindex=0;

ALTER TABLE `login`
DROP COLUMN uplurl1;


--------->
 
<img src="<?php echo $profileurl ?>" height="200px" width="200px" align="Left"> <br>
<a href="varifychngpass.php"><div class="lnks"><Font size="5px" color="#ffff00"><center> Change Password</center></Font></div></a> 
<br><br><br>
<a href="logout.php"><div class="lnks"><Font size="5px" color="#ffff00"><center>Logout</center></Font></div> </a>
<br><br><br>
<a href="upload.php"><div class="lnks"><Font size="5px" color="#ffff00"><center>Upload Image</center></Font></div> </a>
<br><br><br><br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
 <a href="./editprofile.php">    <img src="images/edit.png"  height="30px" width="20px" > </a>
<br><br><br><br>
<h2>Welcome, <?=$_SESSION['sess_user'];?>!</h2> <br><br>



             
             
         <Center>
                     <h3>  Your Uploads   </h3>    
         
            <div class="container">
                           <br><br><br><br>
              <a href="<?php echo $imgsrc1 ?>"> <img src="<?php echo $imgsrc1 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a href="<?php echo $imgsrc2 ?>">      <img src="<?php echo $imgsrc2 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="<?php echo $imgsrc3 ?>">          <img src="<?php echo $imgsrc3 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a href="<?php echo $imgsrc4 ?>">            <img src="<?php echo $imgsrc4 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a> <br> <br><br>

          <a href="<?php echo $imgsrc5 ?>">             <img src="<?php echo $imgsrc5 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="<?php echo $imgsrc6 ?>">             <img src="<?php echo $imgsrc6 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo $imgsrc7 ?>">                 <img src="<?php echo $imgsrc7 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo $imgsrc8 ?>">                   <img src="<?php echo $imgsrc8 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>  <br><br><br>

             <a href="<?php echo $imgsrc8 ?>">                    <img src="<?php echo $imgsrc9 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="<?php echo $imgsrc10 ?>">                    <img src="<?php echo $imgsrc10 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a href="<?php echo $imgsrc11 ?>">                      <img src="<?php echo $imgsrc11 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <a href="<?php echo $imgsrc12 ?>">                        <img src="<?php echo $imgsrc12 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a><br><br><br>

                <a href="<?php echo $imgsrc13 ?>">                        <img src="<?php echo $imgsrc13 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo $imgsrc14 ?>">                         <img src="<?php echo $imgsrc14 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="<?php echo $imgsrc15 ?>">                         <img src="<?php echo $imgsrc15 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo $imgsrc16 ?>">                         <img src="<?php echo $imgsrc16 ?>" onerror="this.style.display='none'" height="170px" width="170px" ></a> <br><br><br>


                 
       
            </div>     


  

 

</body>  


<script language="JavaScript">
  /**
    * Disable right-click of mouse, F12 key, and save key combinations on page
    * 
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
<?php  
}  
?>  