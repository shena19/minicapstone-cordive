<?php
// Sample Barangay Page Template

// Set the barangay name dynamically (you can change this for each file)
$barangay_name = "Gabi"; // Example: Update this for each barangay
$color_theme = "gold, and black"; // Match the design of tourist_spots.php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $barangay_name; ?> - Tourist Spots</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    /* General Styles */
    :root {
        --gold: #f0a500;
        --light-gold: #f0a500;
        --dark-gold: #f0a500;
        --black: #000;
        --dark-gray: #1a1a1a;
        --light-gray:var(--black)
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: var(--black);
        color: var(--light-gold);
        line-height: 1.6;
    }

    /* Header Styles */
    header {
        background-color: var(--light-gray);
        color: var(--light-gold);
        padding: 2rem;
        text-align: center;
        box-shadow: 0 2px 10px(255, 215, 0, 0.3);
    }

    header h1 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }

    /* Navigation Styles */
    nav {
        background-color: var(--light-gold);
        padding: 1rem;
        box-shadow:black;
        overflow-x: auto;
        white-space: nowrap;
    }

    nav a {
        color: black;
        margin: 0 15px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
        display: inline-block;
        padding: 0.5rem 1rem;
        border-radius: 5px;
    }

    nav a:hover {
        background-color: var(--dark-gold);
        color: var(--light-gold);
    }

    /* Content Styles */
    .content {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 2rem;
        background-color: var(--dark-gray);
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(255, 215, 0, 0.2);
    }

    .content h2, .content h3 {
        color: var(--gold);
        margin-bottom: 1rem;
    }

    /* Card Styles */
    .card {
        background-color: var(--light-gray);
        border: 2px solid var(--dark-gold);
        border-radius: 10px;
        padding: 2rem;
        margin: 2rem 0;
        color: var(--light-gold);
        box-shadow: 0 4px 15px rgba(255, 215, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card h4 {
        color: var(--gold);
        margin-bottom: 1rem;
    }

    .card img {
        display: block;
        width: 100%;
        max-width: 300px;
        height: auto;
        border-radius: 8px;
        margin: 1rem auto;
        transition: transform 0.3s ease;
    }

    .card img:hover {
        transform: scale(1.05);
    }

    /* Image Gallery */
    .image-gallery {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        margin: 1rem 0;
    }

    .image-gallery img {
        max-width: 30%;
        margin-bottom: 1rem;
    }

    /* Footer Styles */
    footer {
        text-align: center;
        padding: 2rem;
        background-color: var(--light-gray);
        color: var(--light-gold);
        box-shadow: 0 -2px 10px rgba(255, 215, 0, 0.3);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        header h1 {
            font-size: 2rem;
        }

        .content {
            padding: 1rem;
        }
        .card {
            padding: 1rem;
        }

        .image-gallery img {
            max-width: 100%;
        }
    }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to <?php echo $barangay_name; ?>!</h1>
        <p>Explore the best tourist spots in <?php echo $barangay_name; ?>.</p>
    </header>

    <nav>
        <a href="../user/sanmiguel.php">San Miguel</a>
        <a href="gabi.php">Gabi</a>
        <a href="ibabao.php">Ibabao</a>
        <a href="pilipog.php">Pilipog</a>
        <a href="cogon.php">Cogon</a>
        <a href="day-as.php">Day-as</a>
        <a href="alegria.php">Alegria</a>
        <a href="poblacion.php">Poblacion</a>
        <a href="catarman.php">Catarman</a>
        <a href="bangbang.php">Bangbang</a>
        <a href="dapitan.php">Dapitan</a>
        <a href="buagsong.php">Buagsong</a>
        <a href="gilutungan.php">Gilutungan</a>
        <a href="../tourist_spots.php">Back</a>
    </nav>

    <div class="content">
        <h2>About <?php echo $barangay_name; ?></h2>
        <p><?php echo $barangay_name; ?> Gabi, a barangay (village) in Cordova, Cebu, Philippines, is a vibrant community with a rich cultural heritage and a strong sense of community. Located on the island of Cordova, Gabi is known for its picturesque landscapes, friendly residents, and a thriving agricultural sector. The barangay offers a peaceful and laid-back lifestyle, combining elements of rural charm with the convenience of nearby urban amenities.</p>


        <h3>Featured Tourist Spots</h3>
        <div class="card">
            <h4><i class="fas fa-hotel"></i>Barangay Hall</h4>
            <div class="image-gallery">
            <img src="../user/image/Gabi Barangay Hall1.jpg" alt="">
            

            </div>
            <p>The Gabi Barangay Hall is a two-story administrative center located in Cordova, Cebu, Philippines. It serves as an essential hub for local government services and community activities. Situated on Manuel Luis Quezon National Highway, 6017, the hall is operated by the Gabi barangay government and is near key landmarks such as the Gabi Barangay Council, Gabi Covered Court, Cordova Public College, and San Jose Chapel. The hall acts as a primary contact point for residents seeking assistance from local authorities and is used for community meetings and events.</p>

        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i>Happy World Museum</h4>
            <div class="image-gallery">
            <img src="../user/image/gabi happy world museum.jpg" alt="">
            <img src="../user/image/gabi happy world museum 2.jpg" alt="">
            <img src="../user/image/gabi happy world museum 3.jpg" alt="">
            <img src="../user/image/gabi happy world museum 4.jpg" alt="">
            <img src="../user/image/gabi happy world museum 5.jpg" alt="">

            </div>
            <p>The Happy World Museum in Cordova, Cebu is a unique attraction featuring 3D paintings and optical illusion exhibits. It's a great place to let your imagination run wild and take some fun, creative photos. The museum boasts over 85 visually stunning artworks divided into six sections: World Famous Art, Religious Beliefs, Ocean, Jurassic Animal, Philippine Pride, and The Ending Section.
                <br>Location: Lot 2-A-3, Brgy. Gabi, Cordova, Cebu.
            </p>

        </div>
        <div class="card">
            <h4><i class="fas fa-hotel"></i>Health Center</h4>
            <div class="image-gallery">
            <img src="../user/image/Gabi Health Center1.jpg" alt="">
            <img src="../user/image/Gabi Health Center2.jpg" alt="">
            <img src="../user/image/Gabi Health Center3.jpg" alt="">

            </div>
            <p>Gabi is one of the original barangays of Cordova, Cebu. Its name is derived from the abundance of taro plants, locally known as "gabi," which once thrived in the area.

Historically, Gabi was part of the larger Mactan Island, governed by indigenous chieftains. During the Spanish colonial period, it was under the jurisdiction of Opon (now Lapu-Lapu City). In 1863, along with Day-as and Pilipog, Gabi became a part of the newly formed municipality of Cordova.

Today, Gabi continues to be a significant part of Cordova's community. It is known for its rich history, cultural heritage, and natural beauty.</p>


        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i>Gabi Resort and Spa</h4>
            <div class="image-gallery">
            <img src="../user/image/Gabi Resort and Spa1.jpg" alt="">
            <img src="../user/image/Gabi Resort and Spa2.jpg" alt="">
            <img src="../user/image/Gabi Resort and Spa3.jpg" alt="">


            </div>
            <p>Gabi Resort and Spa is a tranquil oasis located in Cordova, Cebu, Philippines. It offers a serene escape from the hustle and bustle of city life, providing guests with a relaxing and rejuvenating experience. The resort is known for its lush tropical gardens, sparkling swimming pools, and luxurious spa facilities. Whether you're looking for a romantic getaway, a family vacation, or simply a chance to unwind, Gabi Resort and Spa promises a memorable stay. 
                <br>  located at Purok 5, Brgy. Gabi, Cordova, Cebu, Mactan Island, Cebu, Philippines, 6017. 
            </p>


        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cordova Tourism. All rights reserved.</p>
    </footer>
</body>
</html>

