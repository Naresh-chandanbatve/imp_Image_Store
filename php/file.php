
<html>
<head>
  
  <style>
     .data {
             text-align: justify;
            margin: 0 auto;
            width: 10em;
             
           }
  </style>
  
</head>


<body>
 
  <center>
   <Br><br><br><br><br><br><br><br><br>
   
   <Font size="60px" color="green"> Below is MySQL Data</Font>
    </center>
    <br><br><br><br><br><br><br>
   
<?php
$servername = "localhost";
$username = "root";
$password = "Naresh@12";
$dbname = "sql_auth";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM Users ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   echo " <Div class='data'  align='justify' >Id: " . $row["ID"]."<br> " ."Name: " . $row["Name"]. "<Br> "."Email:". $row["Mail"]. "</Div><br><br><br>";
     
  }
} else {
  echo "Process Failed";
}

mysqli_close($conn);
?>

<Br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<Br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br>

<Center>
<a href="http://localhost"> <Font Size="60px" color="red">
    Go To Home </Font> </a> </Center>


</body>
</html>