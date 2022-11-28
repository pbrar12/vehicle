<?php
require_once 'connection.php';
$sql = "SELECT * FROM cars" ;
$all_product = $conn->query($sql);
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fixed.css">
    <link rel="stylesheet" href="result.css">
    <title>car rental</title>
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <?php
    include_once 'header.php';
    ?>
    <center>
        <nav class="fixed-nav-bar">
            <!-- <a class="navbar-brand" href="index.html">
                <div class="logo-image">
                      <img src="assets/car.png" class="img-fluid">
                </div>
          </a> -->
            <div id="menu" class="menu">
              
              <!-- Example responsive navigation menu  -->
              <ul class="menu-items">
                <!-- <li><a href="#home">Home</a></li>
                <li><a href="#ride">Ride</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#reviews">Reviews</a></li>
                <li><a href="#about">About</a></li> -->
                <li><a href="index.php">Go home</a></li>
            </ul>
        
            </div>
          </nav>
        </center>
    <font color="white">
    <br><br><br><main>
        <?php
        while($row = mysqli_fetch_assoc($all_product)){      
            
            ?>
        <div class="card">
            <div class="image">
            <img src="assets/<?php echo $row["photo"]?>" alt="">
        </div>
    <div class="caption">
    <p class="rate">
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
        <i class="bx bxs-star"></i>
    </p>
                <p class="product_name"><?php echo $row["names"]?></p>
                <p class="price"><b>₹<?php echo $row["rates"]?></b></p>
                
            </div>
            <button class="add">Add to cart</button>
        </div>
        <?php
        }
        ?>
    </main></font>
        </body>
</html>