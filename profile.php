<?php
session_start();

include 'connection.php';
$name=$_SESSION['name'];
$email=$_SESSION['email'];

$sql="SELECT * FROM user WHERE username='$name' and Email='$email'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if (isset($_POST['save'])) {
    $newName = $_POST['newName'];
    $newEmail = $_POST['newEmail'];

    $updateNameEmailSql = "UPDATE user SET username='$newName', Email='$newEmail' WHERE Email='$email'";
    
    if (mysqli_query($conn, $updateNameEmailSql)) {
        $_SESSION['name'] = $newName; // Update session variable with the new name
        $_SESSION['email'] = $newEmail; // Update session variable with the new email

        echo "<script>
        alert('Name and Email Updated'); 
        window.location='profile.php'; </script>";
    } else {
        echo "<script>
        alert('Error... Try Again Later'); 
        window.location='profile.php'; </script>";
    }
}


if(isset($_POST['save']))
{
   $imagename=$_POST['image'];
   $sql="update user set image='$imagename' where Email='$email'";
   if(mysqli_query($conn,$sql)== TRUE)
   {
    $_SESSION['image']=$imagename;
        echo "<script>
        alert('Image Updated'); 
        window.location='profile.php'; </script>";
   }
   else{
    echo "<script>
        alert('Error... Try Again Later'); 
        window.location='profile.php'; </script>";
   }

}
?>


<html>
    <head>
  
    
      <link rel="stylesheet" href="profile.css">
      <link rel="stylesheet" href="profile.css">
      <title>Manage_Accont</title>
    </head>
  
    <body>
<!--     
   <div class="Account_info">
    <div class="side_bar">
        <div class="logo"><a  style="color:rgb(247, 168, 57)" >
             <img src="images\logo1.png">
            <h1>FURRY PET ADOPTION SHELTER</h1></a></div>
        <ul class="sidebar-list" style="list-style: none;"
        <li class="list-item active"><a href="manageAccount.html">Account info</a></li>
            <li class="list-item "><a href="Security.html">security</a></li> 
             <li class="list-button "><a href="logout.php"><button>LOGOUT</button></a></li> 
        </ul>
    </div> -->
    <div class="profile_info">
    <div class="profile_pic">
    <img src="images/<?php echo $row['image']?>">
        <div onclick="imagepopup()" class="edit-btn">
        <span  class="material-symbols-outlined">edit </span>
    </div>
    </div>
    <div class="basic_info">
        <h1>Basic info</h1>
        <div class="info_box">
            <div class="box">
                <div class="infocontainer">
                <h3>Name</h3>
                    <h4><?php echo $row['username'];?></h4></div>
                    <!-- <span class="material-symbols-outlined">chevron_right </span> -->
            </div>
            
            <div class="box">
                <div class="infocontainer">
                <h3>Email</h3>
                    <h4><?php echo $row['Email'];?></h4></div>
                    

            
            </div>
        </div>
    </div>
</div>
  </div>
  <div class="logout">
    
  <li class="list-button "><a href="logout.php"><button>LOGOUT</button></a></li>
</div>
  
  <div class="popup" id="popup1">
    <div class="overlay"></div>
    <div class="content">
        <div  onclick="imagepopup()" class="close-btn"><span class="material-symbols-outlined md-43">close</span></div>
        <form method="post" action="">
            <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png"><br>
            <input type="text" name="newName" placeholder="New Name" ><br>
                    <input type="email" name="newEmail" placeholder="New Email" ><br>

                    
            <button name="save" >SAVE</button>
     
        </form>
    </div>
</div>

<script>
    function  imagepopup(){
        document.getElementById("popup1").classList.toggle("active");
    }
</script>

    </body>
</html>