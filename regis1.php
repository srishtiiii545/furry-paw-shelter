<?php 
include 'connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Get the submitted username and password
		$name = $_POST["email"];
		$pass = $_POST["password"];

	$sql="select * from admin";

	$result=mysqli_query($conn,$sql);

	$row=mysqli_fetch_array($result);

	   
if($name==$row['Email'] && $pass==$row['Password'])
	{	

		header('location:dashboard.php');
	}

	

	else
	{
		echo "username or password incorrect";
	}
}

?>