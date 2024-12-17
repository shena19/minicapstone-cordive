<?php
// Sample Barangay Page Template

// Set the barangay name dynamically (you can change this for each file)
$barangay_name = "Buagsong"; // Example: Update this for each barangay
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
        <p><?php echo $barangay_name; ?> Buagsong is a small but significant barangay in the municipality of Cordova, Cebu. Renowned for its abundant seafood, particularly the "bakasi" eel, it has a strong fishing industry. The barangay's residents, influenced by Spanish and American cultures, celebrate an annual fiesta featuring traditional festivities like "Retreta" and "bayle."

Despite its modest size, Buagsong plays a vital role in the local economy. Many residents, especially women, contribute to the livelihood by selling fresh seafood, particularly "bakasi," in local markets and even in Cebu City's Carbon Market. This economic activity not only supports the community but also highlights the importance of fishing in the barangay's heritage. </p>

        <h3>Featured Tourist Spots</h3>
        <div class="card">
            <h4><i class="fas fa-hotel"></i>Bakhaw</h4>
            <div class="image-gallery">
            <img src="../user/image/buagsong bakhaw.jpg" alt="">
            <img src="../user/image/buagsong bakhaw 2.jpg" alt="">
            <img src="../user/image/buagsong bakhaw 3.jpg" alt="">

                
            </div>
            <p>"Bakhaw" is the Cebuano word for mangrove trees. While Buagsong is known for its seafood, there's no specific information about bakhaw (mangrove) trees in Buagsong. It's possible that the term "bakhaw" is used in a broader sense, referring to the coastal environment where the fishing community thrives.</p>

        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i> Casa Rugina</h4>
            <div class="image-gallery">
            <img src="../user/image/buagsong Casa Rugina1.jpg" alt="">
            <img src="../user/image/buagsong Casa Rugina2.jpg" alt="">
            <img src="../user/image/buagsong Casa Rugina3.jpg" alt="">

            </div>
            <p>Place to relax with your family and friends <br>
            Perfect for your future events.</p>

        </div>

        <div class="card">
            <h4><i class="fas fa-hotel"></i> Health Center</h4>
            <div class="image-gallery">
            <img src="../user/image/buagsong Health Center1.jpg" alt="">

            </div>
            <p>Day-As Health Center is a Community health center located at Sambag, Day-as Barangay Rd, Cordova, Cebu  6013, PH.</p>



        </div>
   
    <div class="card">
            <h4><i class=" fas fa-umbrella-beach"></i>Villa Loromar</h4>
            <div class="image-gallery">
            <img src="../user/image/buagsong Villa Loromar1.jpg" alt="">
        </div>
            <p>VILLA LOROMAR HOME AWAY FROM HOME, WELCOMES YOU BACK! Previous guests & new guests, we are now open & operational. Safety protocol in place. Entire house accommodates 8 guests. Air conditioning, Free use of kitchen. Hot shower. 15mins from Mactan Airport. Mins to beaches, hotels, Malls/Museum. Walk to Lantaw Floating Restaurant & 10K Roses. 45 mins to Cebu City. Start your island hopping here. Car/Van & family drivers negotiated/rented on the spot & takes you wherever you go. Free Parking/WiFi.
            </p>
         </div>
    
    <div class="card">
            <h4><i class="fas fa-hotel"></i> Eventesia Gardens</h4>
            <div class="image-gallery">
            <img src="../user/image/buagsong Eventesia Gardens1.jpg" alt="">
            <img src="../user/image/buagsong Eventesia Gardens2.jpg" alt="">
         </div>
            <p>Place to chill and enjoy the view, 
                <br> make fun of swimming pool with friends and family.</p>
            </div>
    
    <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i> Sungka Native Restuarant/h4>
            <div class="image-gallery">
            <img src="../user/image/buagsong Sungka Native Restuarant1.jpg" alt="">
            <img src="../user/image/buagsong Sungka Native Restuarant2.jpg" alt="">
            <img src="../user/image/buagsong Sungka Native Restuarant3.jpg" alt="">

         </div>
         <p>Sungka Native Restaurant is a newly opened dining establishment in Cordova, Cebu, located in Day-as near RR Dress Shop and 10,000 Roses. It offers a serene atmosphere by a koi pond, creating an intimate dining experience. The restaurant specializes in traditional Filipino comfort food, particularly fresh seafood, with a menu featuring dishes like pork BBQ, scallops, guso, and sinigang na baboy. Additionally, they serve desserts and local beers. Sungka Native Restaurant is popular among locals and tourists alike, providing a memorable experience while enjoying the tranquility of the koi pond and the flavors of Filipino cuisine.</p>

            </div>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cordova Tourism. All rights reserved.</p>
    </footer>
</body>
</html>

