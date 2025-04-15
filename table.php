<!DOCTYPE html> 
<html lang="en"> 

<head> 
	<meta charset="UTF-8"> 
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge"> 
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0"> 
	<title>FURRY PET ADOPTION CENTRE</title> 
	<link rel="stylesheet" href="style.css"> 
	<link rel="stylesheet"href="dashboard.css"> 
</head> 

<body> 
	
	<!-- for header part -->
	<header> 

		<div class="logosec"> 
			<div class="logo">FURRY PET ADOPTION CENTRE</div> 
			</div>

	</header> 

	<div class="main-container"> 
		<div class="navcontainer"> 
			<nav class="nav"> 
				<div class="nav-upper-options"> 
					<div class="nav-option option1"> 
						<img src= "https://pic.onlinewebfonts.com/thumbnails/icons_83256.svg"
							class="nav-img"
							alt="dashboard"> 
						<h3> Dashboard</h3> 
					</div> 

					<div class="option2 nav-option"> 
						<img src= "https://seekicon.com/free-icon-download/hand-heart-outline_1.svg"
					
							class="nav-img"

							alt="DONATION COLLECTION"> 
							<a href="donationcollection.php" STYLE="text-decoration:none;"><h3>DONATION COLLECTION</h3> </a>
						
					</div> 

					<div class="nav-option option3"> 
						<img src="https://cdn1.iconfinder.com/data/icons/social-media-2354/32/plus_cross_web_positive_shape-512.png"
							class="nav-img"
							alt="ADD "> 
							<a href="form.php"style="text-decoration:none";><h3> ADD </h3></a> 
					</div> 

					<div class="nav-option option4"> 
						<img src= 
						"https://creazilla-store.fra1.digitaloceanspaces.com/icons/3262292/group-add-icon-md.png"
							class="nav-img"
							alt="USER JOIN"> 
							<a href="userjoin.php"style="text-decoration:none";><h3> USER JOIN</h3></a> 
					</div> 

					<div class="nav-option option5"> 
						<img src= "https://static.thenounproject.com/png/1483806-200.png"
							class="nav-img"
							alt="blog"> 
							<a href="table.php"style="text-decoration:none";><h3> SHOW</h3></a> 
					</div> 

					<div class="nav-option option6"> 
						<img src= "https://cdn-icons-png.freepik.com/256/455/455705.png"
							class="nav-img"
							alt="CONTACT"> 
							<a href="contacts.php"style="text-decoration:none";><h3> CONTACTS</h3></a> 
					</div> 

					<div class="nav-option logout"> 
						<img src= 
						"https://icons.veryicon.com/png/o/internet--web/website-icons/logout-8.png"
							class="nav-img"
							alt="logout"> 
							<a href="logout.php"style="text-decoration:none";><h3> LOGOUT</h3></a> 
							
					</div> 

				</div> 
			</nav> 
		</div> 
<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="table.css" rel="stylesheet"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">


    <title>Add Pet Form</title>
   
</head>
<body>

<div class="tss" 
                 style="width:60%; margin:auto; 
                        display:flex;
                        flex-direction:row;
                        border-collapse: collapse;">           

<!-- 
   <li class="nav-links"><a href="form.php">
      <span class="text nav-text">Add pet</span></a></li> 
   <li class="nav-links"><a href="table.php">
      <span class="text nav-text">Show pet</span></a></li>
  <li class="nav-links"><a href="#edit">
      <span class="text nav-text">    Edit pet</span></a></li>
  

</ul>
</div> -->
 
</nav>  
<section class="home">
        <div class="text">
         <h2>Pet Table</h2>
         <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
                $IdToDelete = $_POST["delete"];
            
                // SQL to delete product by ID
                $deleteSql = "DELETE FROM `pets` WHERE `ID`= $IdToDelete";
            
                if (mysqli_query($conn,$deleteSql) === TRUE) {
                    echo "pet deleted successfully.";
                } else {
                    echo "Error deleting pet: ";
                }
            }
            ?>
            <form method="post" >
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ANIMAL</th>
                <th>NAME</th>
                <th>BREED</th>
                <th>AGE</th>
                <th>VACCINATION</th>
                <th>IMAGE</th>
                <th>LIFE SPAN</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql= "select * from pets";
            $result=mysqli_query($conn,$sql);
        
            if(mysqli_num_rows($result)>0)
            {
              while($row = mysqli_fetch_assoc($result))
            {
                   ?>
                   <tr>
                   <td><?php echo $row['ID'];?></td> 
                   <td><?php echo $row['ANIMAL'];?></td> 
                   <td><?php echo $row['NAME'];?></td> 
                   <td><?php echo $row['BREED'];?></td> 
                   <td><?php echo $row['AGE'];?></td> 
                   <td><?php echo $row['VACCINATION'];?></td> 
                   <td><?php echo $row['IMAGE'];?></td> 
                   <td><?php echo $row['LIFE SPAN'];?></td> 
                   <td class="action-buttons">
                    <input type="submit" value="<?php echo $row['ID'];?>"  name="delete">
                   
                </td>
                </tr>
            <?php
                }
            }
            ?>

            
        </tbody>
    </table>
        </Form>
    
</div>
</section>
<script type="javascript" src="table.js"></script>
</body>
</html>
    