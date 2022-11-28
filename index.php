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
<link rel="stylesheet" href="styleform.css">
</head>
<body bgcolor="black">
    <font color="white">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
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
            <li><a href="#home">Home</a></li>
            <li><a href="#ride">Ride</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#reviews">Reviews</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="seller.php">Be a seller</a></li>
        </ul>
    
        </div>
      </nav>
    </center>
    <section class="home" id="home">
        <div class="text">
            <h1>
                <span>Borrow</span> it<br>Ride it
            </h1>
            <!-- <p>Experience The Joy </p> 
             <div class="app-stores">
                 <img src="assets/apple.png" height="-50px"> 
                <img src="assets/play.png" >
            </div><br> -->
        </div>
      
        <div class="form-container">
           <center> <form action="results.php" method="posts">
                <div>
                    <span>Location</span>
                    <input type="search" name="" id="" placeholder="Search Places">
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input Type="date" name="" id="">
                </div>
                
                <div class="input-box">
                    <span>Return Date</span>
                    <input Type="date" name="" id="">
                </div>
                <input type="submit" name="" id="" class="btn">
            </form></center>
        </div>     
    </section><br><br><br><br><br>
    <!-- ride -->
    <section class="ride" id="ride">
        <div class="heading">
            <span>How It Works</span>
            <h1>Rent With 3 Easy Steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class='bx bxs-map'></i>
                <h2>Choose A Location</h2>
                <p>choose the Location closest to your place</p>
            </div>
            <div class="ride-container">
                <div class="box">
                    <i class='bx bxs-calendar-check'></i>
                    <h2>Pick-up Date</h2>
                    <p>Choose the date on which you want your Ride</p>
                </div>
                <div class="ride-container">
                    <div class="box">
                        <i class='bx bxs-calendar-star'></i>
                        <h2>Book A Ride</h2>
                        <p>click on boo and have fun</p>
                    </div>
        </div>
    </section>
    <!--services-->
    <br><br><br><br><br>
<section class="services" id="services">
<div class="heading">
    <span>Best Services</span>
    <h1>Explore out top deals<br> From Top Rated Dealers</h1>

</div>
<div class="services-container">
    <div class="box">
    <div class="box-img">
        <img src="assets/car1.jpg" alt="">
    </div>
    <p>2017</p>
    <h3>Honda Civic</h3>
    <h2>₹5000<span>/Day</span></h2>
    <a href = "#" class="btn">Rent Now</a>
    </div>

    <div class="box">
        <div class="box-img">
            <img src="assets/car2.jpg" alt="">
        </div>
        <p>2017</p>
        <h3>Ford Mustang</h3>
        <h2>₹50000 <span>/Day</span></h2>
        <a href = "#" class="btn">Rent Now</a>
        </div>

        <div class="box">
            <div class="box-img">
                <img src="assets/car3.jpg" alt="">
            </div>
            <p>2017</p>
            <h3>Alto</h3>
            <h2>₹200<span>/Day</span></h2>
            <a href = "#" class="btn">Rent Now</a>
            </div>
            
</div></section>
<!--reviews-->
<br><br><br><br><br><br>
<section class="reviews" id="reviews">
    <div class="heading">
        <span> Reviews</span>
        <h1>Whats our customer say</h1>

    </div>
    <div class="review-container">
        <div class="box">
            <div class="rev-img">
                <img src="assets/rev1.jpg" alt="">
            </div>
            <h2>Someone Name</h2>
            <div class ="starts">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star-half'></i>
                
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis voluptas quia laborum ipsum quidem ab vel fugiat qui, tenetur cupiditate incidunt deserunt voluptatum unde maxime earum, officia perspiciatis ipsa ex.</p>
        </div>

        <div class="box">
            <div class="rev-img">
                <img src="assets/rev2.jpg" alt="">
            </div>
            <h2>Someone Name</h2>
            <div class ="starts">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star-half'></i>
                
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor in ab magni necessitatibus quaerat dicta ratione repudiandae ullam nihil quam nobis facere ipsum ex iusto, molestias praesentium unde est illo!</p>
        </div>

        <div class="box">
            <div class="rev-img">
                <img src="assets/rev3.jpg" alt="">
            </div>
            <h2>Someone Name</h2>
            <div class ="starts">
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star-half'></i>
                
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est autem sapiente perspiciatis recusandae libero, labore ea minima adipisci nisi quidem nemo fugit sed dolor, cum inventore exercitationem voluptate. Maxime, ducimus.</p>
        </div>

    </div>
</section>
<!--about-->
<br><br><br><br><br>
<section class="about" id="about">
    <div class="heading">
        <span>About us</span>
        <h1>Best Customer Experience</h1>
    
    </div>
    <br><br><br><br>
    <div class="about-cotainer">
        <!-- <div class="about-img">
            <img src="assets/about1-removebg-preview.png" alt="">
        </div> -->
        <div class="about-text">
            <span>About Us</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint rerum similique ullam consequuntur ad facilis, suscipit omnis, voluptatum iusto officiis natus aspernatur delectus optio nam cupiditate laboriosam eaque non at vel quidem sapiente eveniet.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore dolor nihil explicabo quo veritatis ab eius sequi consequatur!
                <br><br><a href="#" class="btn">Learn More</a>
            </p>
        </div>
    </div>
</section>
<br><br><br><br><br>

      <!--nwsletter-->
      <br><br><br><br><br>
 <section class="newsletter">
    <h2>Subscribe To Newsletter</h2>
    <div class="box">
        <Form><input type="text" placeholder="Enter Yout Email...." name="neww">
        <input type="submit" name="" id="" class="btn">
</Form>
     
    </div>
 </section>
 <div class="social">
    <a href="#"><i class='bx bxl-facebook'></i></a>
    <a href="#"><i class='bx bxl-twitter'></i></a>
    <a href="#"><i class='bx bxl-instagram'></i></a>
</div> 
</div>
</section>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="main.js"></script>
</font>
</body>
</html>
 <?php
$neww=$_GET['neww'];
$query1= "INSERT INTO news VALUES ('$neww')";
$data=mysqli_query($conn, $query1);
?> 