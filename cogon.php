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
        <p><?php echo $barangay_name; ?> Cogon is a vibrant barangay (village) situated in the municipality of Cordova, Cebu, Philippines. This peaceful community is known for its strong sense of community and is a part of the beautiful island of Cordova.  With a population of 2,914 as of the 2020 census, Cogon represents 4.13% of Cordova's total population, making it a significant part of the municipality.  Cogon is a place where residents enjoy a close-knit atmosphere and a sense of belonging. </p>


        <h3>Featured Tourist Spots</h3>
        <div class="card">
            <h4><i class="fas fa-hotel"></i>Barangay Hall</h4>
            <div class="image-gallery">
            <img src="../user/image/Cogon Barangay Hall 1.jpg" alt="">
            

                </div>
                <p>The Cogon Barangay Hall in Cordova, Cebu is a public building that serves as the administrative center for the Cogon barangay. It is located in Cordova, Cebu, Philippines,
            It's a two-story building operated by the Cogon barangay government.It also part of the community, serving as a hub for local government services and community activities.

            </p>



        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i> Cordova Municipal Cemetery</h4>
            <div class="image-gallery">
            <img src="../user/image/cogon Cordova Municipal Cemetery1.jpg" alt="">
            <img src="../user/image/cogon Cordova Municipal Cemetery2.jpg" alt="">


            </div>
            <p>a place of quiet contemplation and remembrance, stands as a testament to the passage of time and the enduring bonds of life. Rows of headstones, each bearing a name and a story, mark the final resting place of those who have gone before us. The air is often heavy with a sense of peace and solemnity, as visitors come to pay their respects and reflect on the lives of loved ones. Whether adorned with flowers or simply weathered by the elements, these hallowed grounds serve as a reminder of the preciousness of life and the enduring legacy we leave behind.
            </p>



        </div>
        <div class="card">
            <h4><i class="fas fa-hotel"></i> Covered Court</h4>
            <div class="image-gallery">
            <img src="../user/image/Cogon Covered Court1.jpg" alt="">
            <img src="../user/image/Cogon Covered Court2.jpg" alt="">


            </div>
            <p>Cogon Covered Court is a building in Córdova, Metro Cebu, Central Visayas, Davao Region. Cogon Covered Court is situated nearby to the town hall Cogon Barangay Hall, as well as near the cemetery CATLEYA MEMORIAL PARK.</p>
        </div>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cordova Tourism. All rights reserved.</p>
    </footer>
</body>
</html>

