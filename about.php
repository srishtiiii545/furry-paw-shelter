<?php
session_start();
?>

<html>
    <head>
        <title>
        furry paws shelter</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
          <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>
    <body>
        <header>
        <img src="images/logo1.png" alt="pet\WhatsApp_Image_2024-02-09_at_13.30.44_b2160691-removebg-preview.png" width="150px" height="150px">
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
        <!-- script of slide -->
       
        <!--  -->
  <!-- <div class="aboutie"> <h1> ABOUT US</h1></div> -->
  <!-- slide show of rescue -->
  <div class="text-center">
    <img src="images\Screenshot 2024-02-14 222953.png" class="rounded" alt="images\Screenshot 2024-02-14 222953.png">
  </div>
    <div class="hi">
    <p><h2>Introduction:</h2><br>
       <h3>Welcome your visitors warmly and set the tone for your organization.<br>
        
        "Welcome to FURRY PAWS SHELTER, where compassion meets care.<b> At furry paws shelter</b>, we are dedicated to providing a safe haven for animals in need, giving them a second chance at a loving home."<br></h3>

        
       <h2> Statement: </h2><br>
       <h3> Clearly state your organization's mission and goals.<br>
        
        "Our mission is to protect animals and give them care ." </h3><br>
        
       
        
      <h2> Our Values:</h2><br>
       <h3>EVERY PAWS DESERVE A HOME <br>
        
        "At FURRY PAWS SHELTER, we uphold values such as compassion, integrity, and dedication. We believe in treating every animal with the respect and care they deserve, and we are committed to making a lasting impact on the welfare of animals in our community." </h3><br>
        
       
      <h2> Meet the Team:</h2><br>
        <h3>Introduce key members of your team, including staff and volunteers.<br>
        
        "Our passionate team of animal lovers is the heart of FURRY PAWS SHELTER. Meet the compassionate individuals who work tirelessly to ensure the well-being of every furry friend under our care."</h3>
        <div class="text-center">
          <img src="" class="rounded" alt="">
        </div><br>
        
        <h2>How You Can Help:</h2><br>
        <h3>Encourage visitors to get involved and support OUR  shelter.<br>
        
        "Join us in our mission to make a difference in the lives of animals. Whether you're considering adoption, want to volunteer, or are interested in making a donation, there are numerous ways you can contribute to FURRY PAWS SHELTER." </h3><br>
        
       <h2> Contact Information:</h2><br>
       <h3> SRISHTI - cosmos28@gmail.com.<br>

        SONU - sc@gmail.com<br>

        TANNU - tr@gmail.com </h3></p>
       </div>

  <!-- <!-footer-  --> 
   <div class="footer_g"></div>
     
    <footer>
        <p>&copy; 2024 furry paws shelter. All Rights Reserved.</p>
        <p>
            <a href="privacy.html">Privacy Policy</a>
            <a href="terms&services.html">Terms of Service</a>
            <a href="contact us.php">Contact Us</a>
        </p>
        <!-- Add social media icons or links here if needed -->
    </footer>
</body>
</html>
