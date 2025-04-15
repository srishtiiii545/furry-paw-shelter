<?php
$host="localhost";
$user="root";
$password="";
$db="sneakers";
$conn=mysqli_connect($host,$user,$password,$db);

if(!$conn)
{
	die("connection error");
}
?>
