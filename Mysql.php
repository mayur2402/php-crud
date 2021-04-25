<!DOCTYPE html>
<html>
<head>
	<title>Mysql CRUD</title>
</head>
<body>
	<form action="<?php $_PHP_SELF ?>" method = "POST">
		Enter roll number<input type="text" name="rollno"><br>
		Enter Name<input type="text" name="name"><br>
		Enter City<input type="text" name="city"><br> 
		<input type="submit" name="submit" value="submit">
	</form>


</body>
</html>

<?php

$host = 'localhost:3306';  
$user = 'root';  
$pass = 'mayur123';
$dbname = 'test';
if(isset($_POST['submit'])){
	$conn = new mysqli($host, $user, $pass, $dbname);  
	if(! $conn )  
	{  
	  die('Could not connect: ' . mysqli_error());  
	}  
	echo 'Connected successfully';
	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];

	echo $rollno;

	$query = "INSERT INTO user (rollno,name,city) VALUES($rollno,'$name','$city')";

	$ret = $conn->query($query);

	echo $ret;

	mysqli_close($conn);  
}

?> 