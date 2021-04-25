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
//change to check
$host = 'localhost:3306';  
$user = 'root';  
$pass = 'mayur123';
$dbname = 'test';
if(isset($_POST['submit'])){
	$conn = mysqli_connect($host, $user, $pass, $dbname);  
	if(! $conn )  
	{  
	  die('Could not connect: ' . mysqli_error());  
	}  
	echo 'Connected successfully';
	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];

	$query = 'INSERT INTO user VALUES("$rollno","$name","$city")';

	mysqli_query($conn,$query);

	mysqli_close($conn);  
}

?> 