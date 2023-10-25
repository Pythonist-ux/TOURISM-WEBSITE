<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <title> Hermes - Experience The Luxury Of Travel </title>
    <link rel="icon" href="img.jpg" type="image/icon type">
      <script src="FrontValid.js"></script>
      <script src="Validation.js"></script>
</head>

<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <li><a> WELCOME <span><?php echo $_SESSION['user_name']; ?></span></a></li>
            <li><a href="logout.php">LOGOUT</a></li>
            <div class="logo"><img src="img.jpg" alt="logo"></div>
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="register.php">Sign Up/Login</a></li>
            <li><a href="#contact">logout</a></li>
        </ul>
        <div class="rightNav v-class-resp">
            <input type="text" name="search" id="search">
            <button class="btn btn-sm">Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>

    <section class="background firstSection">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">The Future Of Travel Is Here</p>
                <p class="text-small"></p>
                <div class="buttons">
                  <br>

                  <a class="btn" href="vedio.mp4" type="submit" style="text-decoration: none;"> Watch Video</a>

                </div>
            </div>

            <div class="secondHalf">
                <img src="img.jpg" alt="Laptop Image">
            </div>
        </div>
    </section>

    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big">The end of your search is here</p>
        <p class="sectionSubTag text-small">With HERMES, you can quickly and easily search for and compare hotel prices across over 300 booking sites, covering over 5 million hotels and other types of accommodation in over 190 countries. Each year, we assist millions of customers in their search for the best hotel rates available. Find the perfect hotel for weekend trips to Mumbai or Bengaluru with the help of HERMES. There are plenty of hotels in Delhi and the surrounding area, making it an ideal destination for vacations lasting a week or longer. </p>
        </div>
        <div class="thumbnail">
            <img src="https://images.unsplash.com/photo-1500835556837-99ac94a94552?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="laptop image" class="imgFluid">
        </div>
    </section>

    <section class="section section-left" id="about">
        <div class="paras">
        <p class="sectionTag text-big">Find Cheap Hotels With Us On HERMES</p>
        <p class="sectionSubTag text-small">HERMES makes it simple to find the best hotel at the best price, across multiple booking sites. Simply input your desired destination and travel dates into our hotel finder and we will return a list of options with the best rates. Filter your search results by price, distance (from the beach, for instance), star rating, amenities, and more. HERMES facilitates online bookings for any type of hotel, from cheap dorm rooms to five-star mansions. There is a wide selection of rooms and locations to choose from, including those in well-known tourist spots in India like Shimla and Jaipur, as well as in other countries.</p>
        </div>
        <div class="thumbnail">
            <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="laptop image" class="imgFluid">
        </div>
    </section>
    <section class="section" id="services">
        <div class="paras">
        <p class="sectionTag text-big">How To Book</p>
        <p class="sectionSubTag text-small">HERMES is a hotel search with an extensive price comparison. The prices shown come from numerous hotels and booking websites. This means that while users decide on HERMES which hotel best suits their needs, the booking process itself is completed through the booking sites (which are linked to our website). By clicking on the “view deal” button, you will be forwarded onto a booking site where you can complete the reservation for the hotel deal found on HERMES.

Let HERMES help you to find the right price from over 300 booking sites!</p>


        </div>
        <div class="thumbnail">
            <img src="https://source.unsplash.com/900x900/?javascript,apple, nature, happy" alt="laptop image" class="imgFluid">
        </div>
    </section>

    <form class="contact" id="contact" action="" method="get" onsubmit="login1()";>
        <h1 class="text-center">Contact Us</h1>
        <div class="form">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your name">
            <input class="form-input" type="text" name="phone" id="phone" placeholder="Enter Your Phone">
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your email">
             <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Ellaborate your concern"></textarea>
            <button class="btn btn-sm btn-dark" onClick="window.location.reload(true)">Submit</button>
        </div>



        </div>
    </form>
        </section>

    <footer class="background">
        <p class="text-footer">
            Copyright &copy; 2027 - www.hermes.com - All rights reserved
        </p>
    </footer>
    <script src="resp.js"></script>

</body>

</html>
