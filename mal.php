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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <title>Maldives</title>
</head>
<body>
    <div class="menu">
        <nav>
            <ul>
            <li><a href="../index.html"><i class="fas fa-home home"></i> Home </a></li>
            <li><a href="dubai.html">   Dubai </a></li>
            <li><a href="ile-maurice.html"> Ile-maurice</a></li>
            <li><a href="tokyo.html"> Tokyo</a></li>
        </ul>
        </nav>
    </div>
    <div>
        <img  class="dubai1" src="../Images/landingpage-maldives-04-slide.jpg" alt="">
        <aside>
           <h1> Maldives </h1>
           The Maldives, in long form the Republic of the Maldives (in Maldivian: ދިވެހިރާއްޖޭގެ ޖުމްހޫރިއްޔާ, Dhivehi Raa'jeyge Jumhooriyya),
            is a country in South Asia made up of 1,199 islands, 202 of which are inhabited, located in the southwest of the Indian subcontinent. A distance of 608 km separates Malé,
            the capital, Thiruvananthapuram, India. The surface area of emerged land is 298 km2 out of the 21,372.72 km2 of the country's total area, lagoons included3.
            The islands are grouped into 26 atolls and three isolated islands divided into 20 subdivisions also called “atoll” and each bearing the name of a letter thâna.
    </div>

    <div>
        <img src="images/maldives6.jpg" alt="">
        <aside>
            <p>
                <h1>Localisation</h1>

                The Maldives is an island state in the Laccadive Sea located 612 kilometers (to Male) southwest of the state of Kerala, India, and 755 kilometers west-southwest of Sri Lanka. .
                 The country, made up of 26 atolls and three isolated islands divided into 20 administrative regions, i.e. 1,199 islands in total (of which just over 200 are permanently inhabited), stretches from north to south between Lakshadweep and the British territory of the Indian Ocean (Chagos Archipelago)4.
                 The western atolls have their west coast bathing the Arabian Sea while the eastern atolls belong entirely to the Laccadives Sea.</p>
        </aside>
    </div>
    <div>
        <img src="images/maldives-islands-photos.jpg" alt="">
        <aside>
            <h1> History </h1>

            The ancient history of the Maldives is little known. According to Maldivian legend, an Indian prince called Koimala washed up with his young wife in a lagoon in the Maldives and settled there, becoming the first sultan. It is also said that women from Sri Lanka settled there, hence the name Mahiladipa meaning islands of women, which gave the name "Maldives".

             The Maldives appear in the geography of the Greek Claude Ptolémée in the first century of our era: he counts 1,378 islands15.

             Zheng He, in his expedition of 1413-1415, visited the region.
            <a href="https://fr.wikipedia.org/wiki/Maldives">
                <i class="fas fa-align-left about"></i>Lire Plus</a>
</aside>
    </div>
    <a href="https://youtu.be/bZkLuCgORi4?t=1">VEDIO</a>

    <footer>
        <h2> My Dream Vacation</h2>
    </footer>

</body>
</html>
