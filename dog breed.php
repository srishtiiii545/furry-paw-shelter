<html>
<?php
session_start();
  include'connection.php';
  ?>
    <head>
        <title>
        <h1> furry paws shelter</h1></title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="dog_breedcss.css">
    </head>
    <body>
        <header>
        
        
        <img src="images/logo1.png" alt="pet\WhatsApp_Image_2024-02-09_at_13.30.44_b2160691-removebg-preview.png" width="150px" height="150px">
            <h1>Welcome to our furry paws shelter </h1>
            <span class="material-symbols-outlined">
              
              </span>
        </header>
        
    
        <nav>
            <a href="home page.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="contact us.php">Contact</a>`
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
</html>



</body>
<body>

  
<img src="images\WhatsApp Image 2024-02-23 at 09.41.00_62a8e03b.png" width="100%" height="500">

</body>
<section id="wrapper">
<?php

$sql="SELECT * FROM `pets` WHERE ANIMAL='DOG'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    ?>
    <div class="box1">
            <div class="card" >
          <a href="pet_ref.php?id=<?php echo $row['ID']?>"><img src="images/<?php echo $row['IMAGE']?>" height=300 width=300></a>
          <div class="name"><?php echo $row['BREED']?></div>
          <div><?php echo $row['LIFE SPAN']?></div>
        </div>
        </div>
    <?php
  }
}
?>
</section>

    <footer>
        <p>&copy; 2024 furrypaws shelter. All Rights Reserved.</p>
        <p>
            <a href="privacy.html">Privacy Policy</a>
            <a href="terms&services.html">Terms of Service</a>
            <a href="contact us.php">Contact Us</a>
        
    </footer>
</body>
</html> 