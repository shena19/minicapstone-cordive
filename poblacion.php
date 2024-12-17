<?php
// Sample Barangay Page Template

// Set the barangay name dynamically (you can change this for each file)
$barangay_name = "Poblacion"; // Example: Update this for each barangay
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
        <p><?php echo $barangay_name; ?> Poblacion, the historic core of Cordova, Cebu, dates back to the Spanish colonial era. It served as the town's administrative center, housing key institutions.

Over centuries, Poblacion witnessed significant historical events, including its role in the Galleon Trade. Its strategic location on Mactan Island also made it a focal point of historical conflicts.

Today, Poblacion thrives as a vibrant community hub, blending historical landmarks with modern amenities. Its rich history and contemporary appeal attract both locals and tourists.</p>

        <h3>Featured Tourist Spots</h3>
        <div class="card">
            <h4><i class="fas fa-hotel"></i> Empress Beauty Salon and Spa Massage</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion Empress beauty salon and spa massage1.jpg" alt="">
           

            </div>
            <p>**Ibabao Empress Beauty Salon and Spa Massage – Cordova, Cebu**  

Ibabao Empress Beauty Salon and Spa Massage is a premier destination for relaxation, beauty, and wellness in Cordova, Cebu. Located in the heart of Ibabao, our salon offers a serene and luxurious environment designed to rejuvenate your mind, body, and spirit.  

We offer a wide range of beauty and wellness services, including massages, facials, and expert hairstyling, all delivered with care and precision by our skilled professionals. Experience the soothing ambiance, top-notch treatments, and personalized attention that make Empress Beauty Salon and Spa Massage the go-to choice for relaxation and beauty enhancement in Cordova, Cebu. Step into a world of tranquility and feel your best with Empress.</p>
        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i>Bantayan Bay Cordova</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion Bantayan Bay Cordova1.jpg" alt="">
            <img src="../user/image/poblacion Bantayan Bay Cordova2.jpg" alt="">
            <img src="../user/image/poblacion Bantayan Bay Cordova3.jpg" alt="">

            </div>
            <p>Poblacion in Bantayan Bay, Cordova, Cebu, is a charming coastal area known for its stunning views of Bantayan Bay. Surrounded by traditional fishing communities, it blends natural beauty and rich cultural heritage. Poblacion serves as Cordova’s heart, offering scenic beaches, fresh seafood, and access to local commerce, tourism, and activities like snorkeling and island hopping. With its coastal charm and warm hospitality, Poblacion Bantayan Bay remains a treasured destination in Cordova, Cebu.</p>
        </div>
        <div class="card">
            <h4><i class="fas fa-hotel"></i> Cordova Municipal Hall</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion Cordova Municipal Hall1.jpg" alt="">

            </div>
            <p>The Poblacion Cordova Municipal Hall, located in the heart of Cordova, Cebu, serves as the central hub for local governance and community services. As a historic landmark, it embodies the town’s cultural heritage and commitment to public service. The hall houses essential government offices providing permits, licenses, and public information, while also serving as a venue for key meetings and events that drive Cordova’s development. With its strategic location, the Municipal Hall promotes transparency and strengthens relationships between government officials and the community, playing a vital role in Cordova’s growth and progress.</p>
        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i> Cordova Reef Village Resort</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion Cordova Reef Village Resort1.jpg" alt="">
            <img src="../user/image/poblacion Cordova Reef Village Resort2.jpg" alt="">

            </div>
            <p>Poblacion Cordova Reef Village Resort in Cordova, Cebu, offers a serene escape with stunning white sandy beaches, crystal-clear waters, and breathtaking views of the Mactan Channel. With modern amenities, well-appointed rooms, and friendly hospitality, it caters to both leisure and adventure seekers. Guests can enjoy snorkeling, diving, island hopping, or relax by the pool and watch the sunset. Conveniently located near Mactan Island’s attractions, it’s ideal for exploration or relaxation, promising an unforgettable experience.</p>
        </div>
        <div class="card">
            <h4><i class="fas fa-hotel"></i> Cordova Sports Complex</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion Cordova Sports Complex1.jpg" alt="">
            <img src="../user/image/poblacion Cordova Sports Complex2.jpg" alt="">

            </div>
            <p>The Poblacion Cordova Sports Complex, located in Cordova, Cebu, is a hub for athletic excellence and community engagement. With state-of-the-art facilities like basketball courts, football fields, and a track and field area, it supports athletes of all ages. The complex hosts local events, tournaments, and training programs, promoting physical fitness and fostering community spirit, contributing to Cordova’s vibrant sports culture.</p>
        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i> Cordova Townsquare market</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion Cordova Townsquare market1.jpg" alt="">
            <img src="../user/image/poblacion Cordova Townsquare market2.jpg" alt="">


            </div>
            <p> located in Cordova, Cebu, serves as a vibrant hub for the local community. Nestled in the heart of Poblacion, this bustling market offers a rich mix of fresh produce, local delicacies, and handmade crafts that highlight the town’s rich cultural heritage. Visitors can explore a variety of fresh fruits, vegetables, seafood, and traditional Filipino goods, making it a perfect destination for both locals and tourists looking to experience the authentic flavors of Cordova. The market’s lively atmosphere, combined with the warm hospitality of its vendors, makes it a key gathering place for the Cordova community, fostering connections and preserving the town’s vibrant cultural identity.</p>
        </div>
        <div class="card">
            <h4><i class="fas fa-hotel"></i> Island Hopping in Cordova</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion Island Hopping in Cordova 1.jpg" alt="">
            <img src="../user/image/poblacion Island Hopping in Cordova 2.jpg" alt="">
            <img src="../user/image/poblacion Island Hopping in Cordova 3.jpg" alt="">

            </div>
            <p> Poblacion Island Hopping in Cordova, Cebu, is a captivating adventure that offers visitors a glimpse into the stunning natural beauty of the surrounding islands. Located just off the coast of Cebu, Cordova boasts pristine waters, breathtaking islets, and rich marine biodiversity. This island-hopping experience takes travelers to some of the most picturesque destinations, including Nalusuan Island, Gilutungan Island, and Caohagan Island, each offering unique charm, tranquil beaches, and vibrant coral reefs perfect for snorkeling. Whether you're seeking relaxation, adventure, or a chance to explore Cordova’s hidden gems, Poblacion Island Hopping provides an unforgettable journey into the heart of Cebu’s coastal wonders..</p>
        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i> Parola Seaview Restaurant</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion Parola Seaview Restaurant1.jpg" alt="">
            <img src="../user/image/poblacion Parola Seaview Restaurant2.jpg" alt="">

            </div>
            <p>  Parola Seaview Restaurant in Poblacion, Cordova, Cebu, offers a serene dining experience with stunning ocean views. Located near the iconic Parola Lighthouse, it’s the perfect spot for enjoying both local and international cuisines. With its elevated position, guests can enjoy panoramic coastal views, making it ideal for family gatherings, romantic dinners, or evening cocktails. Indulge in fresh seafood and savor the rich flavors while soaking in the picturesque setting of Cordova, Cebu.</p>
        </div>
        <div class="card">
            <h4><i class="fas fa-hotel"></i>Plaza</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion plaza.jpg "alt="">
            <img src="../user/image/poblacion plaza2.jpg" alt="">
            </div>
            <p>Poblacion Plaza is the vibrant heart of Cordova, Cebu, showcasing the town’s rich cultural heritage and modern charm. Surrounded by lush greenery, traditional structures, and the iconic Cordova Municipal Hall, the plaza serves as a gathering place for locals and visitors alike. With local eateries, markets, and small businesses nearby, Poblacion Plaza offers a glimpse into Cordova’s culinary traditions and community spirit. Whether you're a tourist or a resident, it’s a peaceful yet lively spot that captures the essence of Cordova’s heritage and laid-back coastal lifestyle.</p>
        </div>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i>Red Gate Inn</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion Red Gate Inn1.jpg" alt="">
            <img src="../user/image/poblacion Red Gate Inn2.jpg" alt="">
            </div>
            <p>Poblacion Red Gate Inn is a charming and tranquil retreat nestled in the heart of Cordova, Cebu. Known for its warm hospitality, comfortable accommodations, and convenient access to the beautiful coastal attractions of Cordova, this inn offers a serene escape for both travelers and locals alike. Whether you're visiting for leisure, business, or a quick getaway, Red Gate Inn provides a cozy and inviting atmosphere, ensuring a pleasant stay. Its prime location in Poblacion, Cordova makes it the perfect base to explore nearby beaches, tourist spots, and the vibrant local culture. Experience genuine Cordova hospitality at Red Gate Inn – where comfort meets convenience.</p>
        </div>
        <div class="card">
            <h4><i class=" fas fa-hotel"></i>Roro Port Rd</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion Roro Port Rd1.jpg" alt="">
             <img src="../user/image/poblacion Roro Port Rd2.jpg" alt="">
            </div>
            <p> Poblacion Roro Port Rd is a key road in Cordova, Cebu, connecting the Poblacion area to the Roro port, facilitating the movement of people and goods. It plays a vital role in enhancing regional connectivity, linking Cordova to neighboring islands and boosting trade and transportation. Lined with local businesses, markets, and eateries, the road reflects the vibrant culture and economic activity of Cordova. Whether for travelers exploring the town’s beaches or locals conducting daily business, Poblacion Roro Port Rd serves as a crucial gateway to Cordova’s cultural and economic life.</p>
        <div class="card">
            <h4><i class="fas fa-umbrella-beach"></i>San Roque Parish Church</h4>
            <div class="image-gallery">
            <img src="../user/image/poblacion San Roque Parish Church1.jpg" alt="">
            <img src="../user/image/poblacion San Roque Parish Church2.jpg" alt="">
            </div>
            <p>The San Roque Parish Church in Poblacion, Cordova, Cebu, is a historic landmark honoring Saint Roch (San Roque), known for his compassion. Built during the Spanish colonial period, it blends architectural styles and features a grand façade and bell tower. Serving as a place of worship and a symbol of Cordova’s rich cultural heritage, the church continues to foster community spirit and preserve local traditions.</p>
        </div>
    </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cordova Tourism. All rights reserved.</p>
    </footer>
</body>
</html>




       
        