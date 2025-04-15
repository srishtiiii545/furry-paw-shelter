<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Bar Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="donation.css">
    
</head>
<body>
<header> 

<div class="logosec"> 
    <div class="logo">FURRY PET ADOPTION CENTRE</div> 
    </div>

</header> 

<div class="main-container" style="width:250px; position:fixed; background-color:#fff;"> 
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
</div>
<div class="donation-page">
<h2>Donation Records</h2> 

    <div class="charts" >
        <canvas id="donationChart" style= "width:50px, height:0px"></canvas>
</div> 

    <div class="table">
    <?php
include 'connection.php';
// Retrieve donation records from the database
$sql = "SELECT * FROM donationcollection";
$result = $conn->query($sql);

// Close the database connection
$conn->close();

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Donor Name</th><th>Donated Amount</th><th>upi id</th><th>phone number</th></tr>";

        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["DONAR_NAME"]."</td><td>".$row["DONATED_AMOUNT"]."<tr><td>".$row["UPI ID"]."<tr><td>".$row["phone number"]."</td></tr>";
        }

        echo "</table>";
    } else {
        echo "No donation records available.";
    }
    ?>
    </div>
</div>
</body>
</html>


    




