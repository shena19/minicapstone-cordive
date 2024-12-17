<?php
// Sample Barangay Page Template

// Set the barangay name dynamically (you can change this for each file)
$barangay_name = "Cogon"; // Example: Update this for each barangay
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
        <p><?php echo $barangay_name; ?> Dapitan is a vibrant barangay (village) nestled within the municipality of Cordova, Cebu, Philippines. Situated on the picturesque island of Cordova, Dapitan offers a peaceful and welcoming environment for its residents. With a population of 3,386 as of the 2020 census, Dapitan is a testament to the strong sense of community that thrives within its borders.  Known for its thriving fishing community, Dapitan has witnessed steady growth over the years, making it a charming and dynamic part of Cordova. </p>

      <h3>Featured Tourist Spots</h3>
        <div class="card">
            <h4><i class="fas fa-hotel"></i>Health Center</h4>
            <div class="image-gallery">
            <img src="../user/image/dapitan  Health Center1.jpg" alt="">
            <img src="../user/image/dapitan  Health Center2.jpg" alt="">

             </div>
                <p>The Dapitan Barangay Health Station in Cordova, Cebu is a government-run healthcare facility that provides essential medical services to the residents of the Dapitan barangay.
                <br> located on  Dapitan, Cordova, Cebu.

            </p>



        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i>Alta Cebu Resort</h4>
            <div class="image-gallery">
            <img src="../user/image/dapitan Alta Cebu Resort1.jpg" alt="">
            <img src="../user/image/dapitan Alta Cebu Resort2.jpg" alt="">

        </div>
            <p>The ambiance at Alta Cebu Resort is truly unique - with the feel of a tropical rain forest, modern cozy facilities, genuine service. With 50 rooms, it has the feel of a casual, intimate estate in a tropical paradise. Alta is a place where guests can meet liked-minded travelers from around the world; this includes families on vacation, couples seeking a romantic hideaway and those who want to experience a new culture. Alta also offers sustainable tourism or volunteer programs.
                <br> located on Pilipog, Cordova 6017 Philippines.
            </p>




        </div>
        <div class="card">
            <h4><i class="fas fa-hotel"></i> Barangay Hall</h4>
            <div class="image-gallery">
            <img src="../user/image/Dapitan Barangay Hall1.jpg" alt="">
            <img src="../user/image/Dapitan Barangay Hall2.jpg" alt="">


            </div>
            <p>The Dapitan Barangay Hall in Cordova, Cebu is a two-story building that serves as the administrative center for the Dapitan barangay. It is located in Cordova, Cebu, Philippines, and its coordinates are 10.2662° N, 123.94927° E. The hall is operated by the Dapitan barangay government and is situated near the Catleya Memorial Park and the Cogon Barangay Hall. It is also close to the Cordova Cemetery and the Upen Cable Asia viewpoint.</p>

        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i> Daily Treat Cakeshop</h4>
            <div class="image-gallery">
            <img src="../user/image/dapitan Daily Treat Cakeshop1.jpg" alt="">
          <img src="../user/image/dapitan Daily Treat Cakeshop2.jpg" alt="">


            </div>
            <p>making cakes on your special events or occassion.
                <br> located on Purok 3, Barangay, Purok 3 Dapitan, Cordova, 6017 Cebu.
            </p>


        </div>
        <div class="card">
            <h4><i class="fas fa-hotel"></i> Don Macchiatos Dapitan Cordova</h4>
            <div class="image-gallery">
            <img src="../user/image/dapitan Don Macchiatos Dapitan Cordova1.jpg" alt="">
          <img src="../user/image/dapitan Don Macchiatos Dapitan Cordova2.jpg" alt="">
          <img src="../user/image/dapitan Don Macchiatos Dapitan Cordova3.jpg" alt="">


            </div>
            <p>Don macchiatos are the newly opened at dapitan cordova so waht you waiting for try to taste it now!</p>


        </div>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cordova Tourism. All rights reserved.</p>
    </footer>
</body>
</html>

