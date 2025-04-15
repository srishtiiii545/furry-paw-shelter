<?php
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="petadoption";

 $conn=mysqli_connect($servername,$username,$password,$dbname);

 if($conn->connect_error){
    die("not connected");
 }

 $name=$_POST['name'];
 $email=$_POST['email'];
 $number=$_POST['number'];
 $message=$_POST['message'];

 $sql="INSERT INTO contact VALUES('$name','$email','$number','$message')";
 if($conn->query($sql)==TRUE){
    echo " Hello ".$name.", Your message has been sent to us,we will surely respond to your message as soon as possible.<br> Have a Good Day";
 }

 ?>
