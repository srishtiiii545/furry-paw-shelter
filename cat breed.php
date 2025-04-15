<html>
<?php
session_start();
  include'connection.php';
  ?>
    <head>
        <title>
        <h1> furry paws shelter</h1></title>
        <link rel="stylesheet" href="style.css">
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
</html>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
   .box1
{
    display: flex;
    flex-wrap: wrap;
    margin: 10px;
    margin-left: 30px;
}
.card
{
    margin-bottom: 10px;
}
#wrapper
{
    display:flex;
    flex-wrap: wrap;
}
  </style>
  </head>
  <body>
    
    <img src="images\Rescue Adopt Love Dogs Cats Rescued Animal Lovers Wall And Art Print _ Pet-rescue.png" width="100%" height="500">
   
    <section id="wrapper">
  <?php

$sql="SELECT * FROM `pets` WHERE ANIMAL='CAT'";
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
          
        </div>
        </div>
    <?php
  }
}
?>
</section>
    <!-- End Example Code -->
  </body>
</html>
  
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