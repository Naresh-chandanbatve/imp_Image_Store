# imp_Image_Store


### Image store web app where we can store our 16 imp images with password protection

<br>

## teck used 
1) php
2) MySQL DBMS
3) html
4) CSS
5) javaSript


<br><br>
### Login Page
<img height="400px" width="600px" src="https://github.com/Naresh-chandanbatve/imp_Image_Store/blob/main/ss/login.png?raw=true">
<br>

### Dashboard
<img height="400px" width="600px" src="https://github.com/Naresh-chandanbatve/imp_Image_Store/blob/main/ss/dashboard.png?raw=true">
<br> 

### Upload Page
<img height="400px" width="600px" src="https://github.com/Naresh-chandanbatve/imp_Image_Store/blob/main/ss/uploadpage.png?raw=true">
<br>

### My Uploads
<img height="400px" width="600px" src="https://github.com/Naresh-chandanbatve/imp_Image_Store/blob/main/ss/uploads.png?raw=true">
<br><br>

## steps to set up project locally
1) first get the code using either zip or running
 ```bash
 git clone https://github.com/Naresh-chandanbatve/imp_Image_Store.git
 ```
 2) install any sever like apache or xamp.
 3) install MySQL database.
 4) inside MySQL database create database of name 'sql_auth'
 5) then run the following SQL query 
   ```bash
   create table user (
      ID int(11) PRIMARY KEY AUTO_INCREMENT,
      Name varchar(25),
      Mail varchar(30),
      Username  varchar(25),
      profileurl varchar(200) NULL DEFAULT="images/profile-logo.jpg",
      Password varchar(15),
      uploadindex int(70) );
   ```
   6) now start the server
   7) make sure MySQL is running properly
   8) open browser and enter the localhost with respected port number.
   9) now one more important step... enjoy :)
