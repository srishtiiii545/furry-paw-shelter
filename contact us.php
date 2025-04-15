<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact css.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
   
    <title>Contact us Page</title>
 
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>
    <body>
        <header>
            <img src="images/logo1.png" alt="" width="150px" height="150px">
                <h1>Welcome to our furry paws shelter </h1>
                <span class="material-symbols-outlined">
                  pets
                  </span>
            </header>
    
        <nav>
            <a href="home page.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="contact us.php">Contact</a>
            <a href="dog breed.php">Dog Breed</a>
            <a href="cat breed.php">Cat Breed</a>
            <a href="payment.php">Donation</a>

            <?php
            if(isset($_SESSION['name']))
            {
              ?><a href="profile.php"> My Account</a>
              <?php
            }
            else
            {
              ?>
              <a href="userlogin.php">SIGN IN</a>
              <?php
            }
            ?>
        </nav> 
    </body>
 
    <!-- banner section  -->
    <section class="banner">
        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20230822131732/images.png"
            alt="Welcome to our Contact Us page">
        <h1>Get in Touch With Us</h1>
        <p>We're here to answer any questions you may have.</p>
    </section>
 
    <!-- Contact form -->
    <section class="contact-form">
         
		
			

<head>
    <link href="contacts.css" rel="stylesheet"/>
</head>
<body>
    <main>
        <form  method="post" action="">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message"> Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <label for="number">MOBILE NUMBER:</label>
            <textarea id="number" name="number" rows="4" required></textarea>

            <input type="submit" name="submit" value="Submit">
        </form>
    </main>
 <?php
 
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $message=$_POST['message'];
 $number=$_POST['number'];
 $sql = "INSERT INTO contact (name, email, message, number) VALUES ('$name','$email','$message','$number')";


 if(mysqli_query($conn,$sql)==TRUE){
    echo " Hello ".$name.", Your message has been sent to us,we will surely respond to your message as soon as possible.<br> Have a Good Day";
 }
}
 ?>

    <!-- Company contact info -->
    <section class="contact-info">
        <h2>Contact Information</h2>
        <address>
            furry paws shelter<br>
           
            jaipur, 302012<br>
            Phone: <a href="tel:1234567890">123-456-7890</a><br>
            Email: <a href="mailto:info@example.com">furrypaws123@gmail.com</a>
        </address>
    </section>
 
    <!-- Footer section -->
    <div class="footer_g"></div>
     
    <footer>
        <p>&copy; 2024 furrypaws shelter. All Rights Reserved.</p>
        <p>
            <a href="privacy.html">Privacy Policy</a>
            <a href="terms&services.html">Terms of Service</a>
            <a href="contact us.php">Contact Us</a>
        </p>
        <!-- Add social media icons or links here if needed -->
    </footer>
</body>
</html>