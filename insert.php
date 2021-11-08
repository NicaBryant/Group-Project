<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => ""
		// database name => record
		$conn = mysqli_connect("localhost", "root", "", "record");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$studentId = $_REQUEST['studentId'];
		$fullName = $_REQUEST['fullName'];
		$birthday = $_REQUEST['birthday'];
		$course = $_REQUEST['course'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is student
		$sql = "INSERT INTO  student VALUES ('$studentId',
			'$fullName','$birthday','$course','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$studentId \n $fullName \n "
				. "$birthday \n $course \n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
	 <a href="http://localhost/index.php">
     <input type="submit" value= "return"/>
   </a>
</body>

</html>
