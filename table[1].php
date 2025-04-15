
<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="table.css" rel="stylesheet"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboarddcss.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <title>Add Product Form</title>
   
</head>
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
  </li>

  <ul class="menu-links">
     <li class="nav-link">
                        <a href="dashboardd.php">
                             <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
  <li class="nav-links"><a href="form.php">
     <i class='bx bx-bar-chart-alt-2 icon' ></i>
      <span class="text nav-text">Add product</span></a></li>
  <li class="nav-links"><a href="table.php">
       <i class='bx bx-bell icon'></i>
      <span class="text nav-text">Show product</span></a></li>
  <li class="nav-links"><a href="#delete">
      <span class="text nav-text">    Edit product</span></a></li>
  <li class="nav-links"><a href="#contact">
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
</nav>
<section class="home">
        <div class="text">
         <h2>Product table</h2>
         <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
                $productIdToDelete = $_POST["delete"];
            
                // SQL to delete product by ID
                $deleteSql = "DELETE FROM `product` WHERE `product id`= $productIdToDelete";
            
                if (mysqli_query($conn,$deleteSql) === TRUE) {
                    echo "Product deleted successfully.";
                } else {
                    echo "Error deleting product: ";
                }
            }
            ?>
            <form method="post">
    
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Brand</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Size</th>
                <th>Image</th>
                <th>Colour</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $sql= "select * from product";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                while($row = mysqli_fetch_assoc($result))
                {
                   ?>
                   <tr>
                   <td><?php echo $row['product id'];?></td> 
                   <td><?php echo $row['brand'];?></td> 
                   <td><?php echo $row['product_name'];?></td> 
                   <td><?php echo $row['product_price'];?></td> 
                   <td><?php echo $row['quantity'];?></td> 
                   <td><?php echo $row['size'];?></td> 
                   <td><?php echo $row['product_image'];?></td> 
                   <td><?php echo $row['product_color'];?></td> 
                   <td class="action-buttons">
                    <input type="submit" value="<?php echo $row['product id'];?>"  name="delete">
                    <span class="edit-button" onclick="editProduct(1)">Edit</span>
                    <span class="delete-button" onclick="delete_product(1)">Delete</span>
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
</nav>
<script type="javascript" src="table.js"></script>
<script src="dashboarddscript.js"></script>
</body>
</html>
