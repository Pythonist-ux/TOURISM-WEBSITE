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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="mal.css">


    <title>Hermes - Experience The Luxury Of Travel</title>
    <link rel="icon" href="img.jpg" type="image/icon type" >

</head>

<body>
    <header>
        <img src="img.jpg" alt="logo" class="logo">
          <nav class="navbar background h-nav-resp">
            <ul class="nav-list v-class-resp">
              <li><a href="#about">ABOUT</a></li>
              <li><a href="#services">SERVICES</a></li>
                <li><a href="#destination">DESTINATION</a></li>
              <li><a href="register.php">SIGN UP/LOGIN</a></li>
            </ul>
            <div class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
        <a data-aos="zoom-in-right" data-aos-delay="1300" href="#book-form" class="btn7">Book Now</a>


    </header>
    <section class="background firstSection">
        <div class="box-main">
            <div class="firstHalf">
                <p class="text-big">MALDIVES</p>
                <p class="text-small"></p>
                <div class="buttons">
                  <br>

                  <a class="w1btn" href="vedio.mp4" type="submit" style="text-decoration: none;"> Watch Video</a>

                </div>
            </div>

            <div class="secondHalf">
                <img src="images/maldives6.jpg" >
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
<br>
<br>
<br>
<br>

    <section class="book-form" id="book-form">

        <form action="">

            <div data-aos="zoom-in" data-aos-delay="150" class="inputBox">

                <input type="text" placeholder="Place Name" value="">
            </div>
            <div data-aos="zoom-in" data-aos-delay="300" class="inputBox">

                <input type="date" value="">
            </div>
            <div data-aos="zoom-in" data-aos-delay="450" class="inputBox">

                <input type="number" placeholder="Number of Travelers" value="">
            </div>
            <input data-aos="zoom-in" data-aos-delay="600" type="submit" value="Find Now"class="btn6">
        </form>

    </section>

    <section class="destination" id="destination">

        <div class="heading">
          <span>Our Destinations</span>
        <h1>Make It yours </h1>
        </div>

        <div class="box-container">

            <div class="box" data-aos="fade-up" data-aos-delay="150">
                <div class="image">
                    <img src="images/maldives.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Maldives</h3>
                    <p>When the Maldives are calling, you have to answer.</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="300">
                <div class="image">
                    <img src="images/india.jpg" alt="">
                </div>
                <div class="content">
                    <h3>INDIA</h3>
                    <p>Atithi Devo Bhava</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="450">
                <div class="image">
                    <img src="images/des-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Caladesi Island</h3>
                    <p>A Mesmerizing Beauty</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="600">
                <div class="image">
                    <img src="images/thailand.jpg" alt="">
                </div>
                <div class="content">
                    <h3>THAILAND</h3>
                    <p>Amazing Thailand:It begins with the people</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="750">
                <div class="image">
                    <img src="images/des-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>tours & travel</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="900">
                <div class="image">
                    <img src="images/des-6.jpg" alt="">
                </div>
                <div class="content">
                    <h3>ALASKA</h3>
                    <p>North To The Future</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="1150">
                <div class="image">
                    <img src="images/des-7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>tours & travel</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

            <div class="box" data-aos="fade-up" data-aos-delay="1300">
                <div class="image">
                    <img src="images/des-8.jpg" alt="">
                </div>
                <div class="content">
                    <h3>tours & travel</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                    <a href="#">read more <i class="fas fa-angle-right"></i></a>
                </div>
            </div>

        </div>

    </section>

    <form class="contact" id="contact" action="" method="get" onsubmit="login1()";>
        <h1 class="text-center">Contact Us</h1>
        <div class="form">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your name">
            <input class="form-input" type="text" name="phone" id="phone" placeholder="Enter Your Phone">
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your email">
             <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Ellaborate your concern"></textarea>
            <button class="w2btn " onClick="window.location.reload(true)">Submit</button>

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
