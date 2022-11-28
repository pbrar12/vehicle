<?php
include("connection.php");
error_reporting(0);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow The Ride</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<link rel="stylesheet" href="fixed.css">
</head>
<body bgcolor="black">
<font color="white">
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
            <li><a href="index.php">Go Home</a></li>
           
        </ul>
    
        </div>
      </nav><br><br><br><br>
<div class="form-container">
            <form action="" >
                <div>
                    <span>Location</span>
                    <input type="text" name="location" id="" placeholder="Search Places" require>
                </div><br>
                <div class="input-box">
                    <span>Car Name</span>
                    <input Type="text" name="name" id="" placeholder="Enter name" require>
                </div>
                <br>
                <div class="input-box">
                    <span>Rate</span>
                    <input Type="number" name="rate" id="" require>
                </div><br>
                <div class="input-box">
                    <span>Model Year</span>
                    <input Type="date" name="year" id="" require>
                </div><br>
                <div class="input-box">
                    <span>Photo</span>
                    <input Type="file" name="photo" id=""require>
                </div><br><br>
                <input type="submit" name="submit" id="" class="btn">
            </form>
                </div>    
</font>
</body>
</html>
<?php
$loc=$_GET['location'];
$nam=$_GET['name'];
$rat=$_GET['rate'];
$yer=$_GET['year'];
$php=$_GET['photo'];
$query= "INSERT INTO CARS VALUES ('$loc', '$nam', '$rat', '$yer', '$php')";
$data=mysqli_query($conn, $query);
?>