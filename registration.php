<?php 
include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
  

  $name=$_POST["username"];
  $email=$_POST["Email"];
  $pass=$_POST["Password"];
  
  $sql = "INSERT INTO `user`(`username`, `Email`, `Password`) VALUES  ('$name','$email', '$pass')";

  if(mysqli_query($conn,$sql)==TRUE)
  {

    header('location:userlogin.php');
  }
  else
  {
    echo"error";
  }
}
?>