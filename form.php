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
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="form.css" rel="stylesheet"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboarddcss.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <title>Add Product Form</title>
    <link rel="stylesheet"href="form.css">
<!-- </head>
<body>
<nav  class="sidebar close">
         <header>
            <div class="image-text">
                <span class="image">
                    <img src="C:\xampp\htdocs\sneakers\logo.png" alt="">
                </span>
          </div>

            <i class='bx bx-chevron-right toggle'></i>

          </header>      
<div class="menubar">
<div class="menu">
   <li class="search-box">
       <i class='bx bx-search icon'></i>

    <input type="text" placeholder="Search...">
  </li> -->

  <!-- <ul class="menu-links">
     <li class="nav-link">
                        <a href="dashboardd.php">
                             <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li> -->
   <!-- <li class="nav-links"><a href="form.php">
     <i class='bx bx-bar-chart-alt-2 icon' ></i>
      <span class="text nav-text">Add product</span></a></li>
  <li class="nav-links"><a href="table.php">
       <i class='bx bx-bell icon'></i>
      <span class="text nav-text">Show product</span></a></li>
  <li class="nav-links"><a href="#delete">
      <span class="text nav-text">    Delete product</span></a></li> -->
  <!-- <li class="nav-links"><a href="#contact">
      <span class="text nav-text">    Contact us</span></a></li>  
       <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Analytics</span>
                        </a>
                    </li>

</ul>
</div>
 <div class="bottom-content">
                <li class="">
                    <a href="http://localhost/sneakers/adminlogin.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                   <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
  </div>
</div>
</nav>  -->

<!-- `<div class="tss" 

                  style="width: 100%;
                        margin:auto; 
                        display:flex;
                        /* flex-direction:rows; */
                        border-collapse: collapse;
                        align-item:center;
                        "> -->
  <section >
        
        <h2>Add Animal</h2>

<form action="submit_handler.php" method="post" class="form1">
    <fieldset class="fieldset">
    <label for="Id"> ID:</label>
    <input type="number" id="Id" name="Id" required>

    <label for="ANIMAL">ANIMAL:</label>
    <input type="text" id="ANIMAL" name="ANIMAL" required>

    <label for="NAME">NAME:</label>
    <input type="text" id="NAME" name="NAME" required>

    <label for="BREED">BREED:</label>
    <input type="text" id="BREED" name="BREED" min="0" step="0.01" required>
    <label for="AGE">AGE:</label>
    <select id="AGE" name="AGE">
        <option value="NEWBORN">NEWBORN</option>
        <option value="YOUNG">YOUNG</option>
        <option value="OLD">OLD</option>
    </select>
    
    <label for="VACCINATION">VACCINATION:</label>
    <input type="text" id="VACCINATION" name="VACCINATION" min="0" required>
    <label for="image">image</label>
    <input type="file" id="image" name="image"  required>
    <label for="LIFESPAN">LIFESPAN:</label>
    <input type="number" id="LIFESPAN" name="LIFESPAN" required>

    <input type="submit" class="submit" value="submit">
    <input type="submit" class="submit" value="reset">
    </fieldset>
</form>

        
    </section>

    <script src="dashboarddscript.js"></script>




</body>
</html>
