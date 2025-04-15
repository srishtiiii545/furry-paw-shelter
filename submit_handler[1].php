<?php 
include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
  
  $pid=$_POST["productId"];
  $brand=$_POST["brand"];
  $name=$_POST["productName"];
  $price=$_POST["price"];
  $quantity=$_POST["quantity"];
  $siz=$_POST["size"];
  $img=$_POST["image"];
  $color=$_POST["color"];
  $sql = "INSERT INTO `product`
                    VALUES  ('$pid','$brand','$name','$price', '$quantity','$siz','$img','$color')";

  if(mysqli_query($conn,$sql)==TRUE)
  {
    
    header("Location:table.php");
  }
  else
  {
    echo"error";
  }
}
?>