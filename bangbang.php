<?php
// Sample Barangay Page Template

// Set the barangay name dynamically (you can change this for each file)
$barangay_name = "Bangbang"; // Example: Update this for each barangay
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
        <p><?php echo $barangay_name; ?> is a barangay (village) located in the municipality of Cordova, Cebu, Philippines. It is known for its beautiful beaches and resorts, making it a popular tourist destination.</p>
        <p>The history of Alegria is intertwined with the history of Cordova. Cordova was founded in 1864 and has a rich cultural heritage, influenced by both Spanish and indigenous cultures. The area was once known for its fishing industry and shipbuilding. In recent years, it has emerged as a major tourist destination, with many resorts and hotels catering to both local and international visitors.</p>

        <h3>Featured Tourist Spots</h3>
        <div class="card">
            <h4><i class="fas fa-hotel"></i> Barangaay Hall</h4>
            <div class="image-gallery">
                <img src="../user/image/Bangbang Barangay Hall1.jpg" alt="Barangaay Hall 1">
                <img src="../user/image/Bangbang Barangay Hall2.jpg" alt="Barangaay Hall 2">
                
            </div>
            <p>The Bangbang Barangay Hall in Cordova, Cebu, is a two-story building that serves the residents of Barangay Bangbang. Completed in 2013, it replaced an earlier structure and is designed for accessibility and sustainability, featuring open-air ventilation and a comfort room for Persons with Disabilities (PWD). The hall reflects the barangay's history and culture, with a mural of Mariano Suma Gang and mangrove designs that emphasize the local ecosystem's importance. Serving as a central hub for local governance and community services, the Bangbang Barangay Hall symbolizes the barangay's resilience and commitment to its residents' well-being.</p>
        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i> Gaisano Grand Cordova</h4>
            <div class="image-gallery">
            <img src="../user/image/bangbang Gaisano Grand Cordova1.jpg" alt="">
            <img src="../user/image/bangbang Gaisano Grand Cordova2.jpg" alt="">
            </div>
            <p>Gaisano Grand Cordova is a convenient shopping destination for residents and visitors of Cordova, offering a variety of goods and services under one roof.</p>

        </div>

        <div class="card">
            <h4><i class="fas fa-hotel"></i> Villa Asela A Garden Resort</h4>
            <div class="image-gallery">
            <img src="../user/image/bangbang Villa Asela A Garden Resort1.jpg" alt="">
            <img src="../user/image/bangbang Villa Asela A Garden Resort2.jpg" alt="">
            <img src="../user/image/bangbang Villa Asela A Garden Resort3.jpg" alt="">
            <img src="../user/image/bangbang Villa Asela A Garden Resort4.jpg" alt="">
            </div>
            <p>Villa Asela A Garden Resort is a budget-friendly resort located in Bangbang, Cordova, Cebu. It offers a fun and relaxing atmosphere for families and friends, with amenities like swimming pools, a water slide, a videoke machine, a canteen, and a children's playground. The resort also caters to events, celebrations, and conferences, with spacious facilities and services to accommodate large groups. They offer various accommodation options, including native-style rooms, air-conditioned rooms, and cottages.</p>


        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cordova Tourism. All rights reserved.</p>
    </footer>
</body>
</html>

