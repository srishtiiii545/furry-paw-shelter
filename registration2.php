<?php 
include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
  

  $name=$_POST["username"];
  $email=$_POST["Email"];
  $pass=$_POST["Password"];
  $confirm=$_POST["Confirm"];
  $sql = "INSERT INTO `admin`(`username`, `Email`, `Password`, `Confirm`) VALUES  ('$name','$email', '$pass','$confirm')";

  if(mysqli_query($conn,$sql)==TRUE)
  {
    
    header('location:adminlogin.php');
  }
  else
  {
    echo"error";
  }
}
?>