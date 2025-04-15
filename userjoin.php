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
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Join Statistics</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
   

<div class="tss" 
                 style="width:60%; margin:auto; 
                        display:flex;
                        flex-direction:row;
                        border-collapse: collapse;">

<canvas id="userJoinChart" width="80%" height="50px" ></canvas></div>
<script>
var months = ['January', 'February', 'March', 'April', 'May', 'June'];
var userJoinCount = [100, 150, 200, 180, 220, 250];

var ctx = document.getElementById('userJoinChart').getContext('2d');

var userJoinBarChart = new Chart(ctx, {
type: 'bar',
data: {
labels: months,
datasets: [{
label: 'Number of Users Joined',
data: userJoinCount,
backgroundColor: 'rgba(75, 192, 192, 0.8)',
borderColor: 'rgba(75, 192, 192, 1)',
borderWidth: 1
}]
},
    
});
</script>

</body>
</html> 
