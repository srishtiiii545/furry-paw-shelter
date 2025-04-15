<?php 
include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
  
  $pid=$_POST["ID"];
  $animal=$_POST["ANIMAL"];
  $name=$_POST["NAME"];
  $breed=$_POST["BREED"];
  $age=$_POST["AGE"];
  $vac=$_POST["VACCINATION"];
  $img=$_POST["image"];
  $lifespan=$_POST["LIFESPAN"];
  $sql = "INSERT INTO `pets`
                    VALUES  ('$pid','$animal','$name','$breed', '$age','$vac','$img','$lifespan')";

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