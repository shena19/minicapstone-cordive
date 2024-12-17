<?php
// Sample Barangay Page Template

// Set the barangay name dynamically (you can change this for each file)
$barangay_name = "Ibabao"; // Example: Update this for each barangay
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
        <p><?php echo $barangay_name; ?>is known for its beautiful scenery, rich culture, and friendly locals. Discover what makes this barangay a must-visit destination.</p>


        <h3>Featured Tourist Spots</h3>
        <div class="card">
            <h4><i class="fas fa-hotel"></i> Barangay Hall</h4>
            <div class="image-gallery">
            <img src="../user/image/ibabao barangayhall2jpg.jpg" alt="">
            <img src="../user/image/ibabao barangayhall1.jpg" alt="">


            </div>
            <p>

Nestled in the heart of Cordova, Cebu, the **Ibabao Barangay Hall** serves as a central hub for the community of Barangay Ibabao. This hall stands as a testament to the barangay's commitment to providing accessible and efficient local governance, offering essential services and a welcoming space for its residents.  

With its strategic location and well-maintained facilities, the Ibabao Barangay Hall accommodates a variety of administrative functions, including the processing of documents, community meetings, and public programs aimed at improving the quality of life in the area. The hall reflects the spirit of unity and collaboration among the people of Ibabao, fostering a sense of belonging and pride within the community.  

The Ibabao Barangay Hall is not just a center for governance but also a symbol of the barangay's vibrant culture and dedication to progress. Visitors and residents alike will find it an integral part of Cordova's rich heritage and dynamic future.
                .</p>

        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i>CENTZ Travel and Tours</h4>
            <div class="image-gallery">
            <img src="../user/image/ibabao CENTZ Travel and Tours1.jpg" alt="">
            <img src="../user/image/ibabao CENTZ Travel and Tours2.jpg" alt="">


            </div>
            <p>Discover the beauty of Cordova, Cebu, with Ibabao Centz Travel and Tours**, your trusted partner for unforgettable travel experiences. We offer personalized travel packages highlighting Cordova's pristine beaches, vibrant marine life, historical landmarks, and rich cultural heritage.  

Committed to exceptional service and customer satisfaction, we ensure every journey is memorable and meaningful. Let us make your dream getaway a reality and guide you through the wonders of Cordova.  

Explore. Experience. Enjoy with Ibabao Centz Travel and Tours  .</p>

        </div>
        <div class="card">
            <h4><i class="fas fa-hotel"></i>Lanners Backyard </h4>
            <div class="image-gallery">
            <img src="../user/image/ibabao lanners backyard 1.jpg" alt="">
            <img src="../user/image/ibabao lanners backyard 2.jpg" alt="">



            </div>
            <p>Located in Ibabao, Cordova, Cebu, the **Lanners Backyard** is a peaceful retreat offering a blend of natural beauty and local charm. Surrounded by lush greenery, it’s an ideal spot for relaxation, family gatherings, and special events. This serene sanctuary invites visitors to experience the warmth of Cordova’s community while enjoying a tranquil and picturesque setting..</p>

        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i>Parkcare Play School, Inc.</h4>
            <div class="image-gallery">
            <img src="../user/image/ibabao Parkcare Play School, Inc. 1.jpg" alt="">
            <img src="../user/image/ibabao Parkcare Play School, Inc. 2.jpg" alt="">


            </div>
            <p>is dedicated to early childhood education, providing a safe, inclusive, and engaging environment for young learners. The school emphasizes holistic development through play-based learning, strong academic foundations, and values education.

With skilled educators and thoughtfully designed programs, it nurtures creativity, curiosity, and social-emotional growth. Partnering with families, the school prepares children for future academic success while fostering a lifelong love for learning. Known for its child-friendly facilities and focus on individual growth, it remains a cherished institution in the Cordova community.</p>

        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cordova Tourism. All rights reserved.</p>
    </footer>
</body>
</html>

