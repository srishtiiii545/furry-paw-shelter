<?php 
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "select * from user";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $match = false;

        while ($row = mysqli_fetch_array($result)) {
            if ($name == $row['username'] && $pass == $row['Password']) {
                $match = TRUE;
                $_SESSION['name']=$row['username'];
            $_SESSION['email']=$row['Email'];
                
            }
        }

        if ($match== TRUE) {
            
            header('location:home page.php');
        } else {
            echo "username or password incorrect";
        }
    } else {
        echo "No users found in the database";
    }
}

?>
