 <?php
include 'connection.php'
?>
<?php
session_start();
?>

<html>
    <head>
        <title>furry paws shelter</title>
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
          <link rel="stylesheet" href="pet_refcss.css" />
    </head>
    <body>
        <header>
        <img src="images/logo1.png" alt="pet\WhatsApp_Image_2024-02-09_at_13.30.44_b2160691-removebg-preview.png" width="150px" height="150px">
            <h1>Welcome to our furry paws shelter </h1>
            <span class="material-symbols-outlined">
              
              </span>
        </header>
    
        <nav>
         
    <?php
    $id=$_REQUEST['id'];
    $sql="SELECT * FROM `pets` WHERE ID='$id'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <div class="image">
            <section class="images"></section>
        <span class="info">
          <img src="images/<?php echo $row['IMAGE'] ?>" height=550 width=550>
    </span>
           <span class="info" id="infos"> 
                <h2>NAME:</br><?php echo $row['NAME']?></h2>
                <h2>BREED:</br><?php echo $row['BREED']?></h2>
                <h2>AGE:</br><?php echo $row['AGE']?></h2>
                <h2>VACCINATION:</br><?php echo $row['VACCINATION']?></h2>
                <h2>LIFESPAN:</br><?php echo $row['LIFESPAN']?></h2>

			
            </span>
              
				<?php
            }
		}
		?>

    
    <script src="script.js"></script>

  </body>
</html>