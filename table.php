<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "students";/* Put your database name */

/* Create connection */
$conn = new mysqli($servername, $username, $password, $dbname);
/* Check connection*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* sql to create table */

$sql = "CREATE  TABLE record (
        student_id INT(10)  PRIMARY KEY, 
        Name VARCHAR(30),
		Birthday DATE ,
        Course VARCHAR(30) ,
        Email VARCHAR(50)
        )";

if ($conn->query($sql) === TRUE) {
    echo "Table test created successfully";
}
 else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
