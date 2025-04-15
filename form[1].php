<!DOCTYPE html>
<html lang="en">
<head>
    <link href="form.css" rel="stylesheet"/>
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
      <span class="text nav-text">    Delete product</span></a></li>
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
        <h2>Product Form</h2>

<form action="submit_handler.php" method="post">
    <fieldset class="fieldset">
    <label for="productId">Product ID:</label>
    <input type="text" id="productId" name="productId" required>

    <label for="brand">Brand Name:</label>
    <input type="text" id="brand" name="brand" required>

    <label for="productName">Product Name:</label>
    <input type="text" id="productName" name="productName" required>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" min="0" step="0.01" required>

    <label for="image">image</label>
    <input type="file" id="image" name="image"  required>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="0" required>

    <label for="size">Size:</label>
    <select id="size" name="size">
        <option value="small">Small</option>
        <option value="medium">Medium</option>
        <option value="large">Large</option>
    </select>

    <label for="color">Color:</label>
    <input type="text" id="color" name="color" required>

    <input type="submit" class="submit" value="submit">
    <input type="submit" class="submit" value="reset">
    </fieldset>
</form>

        </div>
    </section>

    <script src="dashboarddscript.js"></script>




</body>
</html>
