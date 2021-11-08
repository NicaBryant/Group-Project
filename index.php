<!DOCTYPE html>
<html lang="en">

<head>
	<title>GFG- Store Data</title>
</head>

<body>
	<center>
		<h1>Storing Form data in Database</h1>

		<form action="insert.php" method="post">
			
			
<p>
				<label for="studentId">Student Id: </label>
				<input type="number_format" name="studentID" id="studentId">
			</p>



			
			
<p>
				<label for="fullName">Fullname :</label>
				<input type="text" name="fullName" id="fullName">
			</p>



			
			
<p>
				<label for="birthday">Birthday:</label>
				<input type="date" name="birthday" id="birthday">
			</p>


			
			
			
<p>
				<label for="course">Course:</label>
				<input type="text" name="course" id="course">
			</p>


			
			
			
<p>
				<label for="emailAddress">Email Address:</label>
				<input type="text" name="email" id="emailAddress">
			</p>


			
			<input type="submit" value="Add record">
			<br>
			<input type="reset" value="Clear">
		</form>
	</center>
</body>

</html>
