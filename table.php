<?php
 $conn= mysqli_connect("localhost","root", "", "record");
 
 if($conn === false){
	 die("ERROR: Couild not connect". mysqli_connect_error());
 }
 $sql="CREATE TABLE student(
	studentId INT(50) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	fullName VARCHAR(50) NOT NULL,
	birthday VARCHAR(30) NOT NULL,
	course VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL UNIQUE
 )";
 
 if(mysqli_query($conn, $sql)){
	 echo "Table created successfully";
 }
 else{
	 echo "ERROR: could not able to excute $sql." . mysqli_error($conn);
 }
 
 mysqli_close($conn);
?>
<html>
<body>
   <a href="http://localhost/index.php">
     <input type="submit"/>
   </a>
</body>
</html>
