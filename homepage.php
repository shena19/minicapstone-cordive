<?php
// Start session and check if the user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if the user is not logged i n
    header("Location: login.php");
    exit();
}

// Include the database connection
include 'db.php';

// Fetch user details
$user_id = $_SESSION['user_id'];
$query = "SELECT username FROM users WHERE id = :user_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DIVING CORDOVAS BEAUTY AND ICONIC ATTRACTIONS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "../minicapstone/user/font.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "../minicapstone/user/normalize.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "../minicapstone/user/utility.css">
        <link rel = "stylesheet" href = "../minicapstone/styles.css">
        <link rel = "stylesheet" href = "../minicapstone/user/responsive.css">
    </head>
    <body>
        <!-- navbar  -->
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.php" class = "site-brand">
                    COR<span>DIVE</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "../minicapstone/user_dashboard.php" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#featured" class = "nav-link">Recommendation</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#testimonials" class = "nav-link">History</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#services" class = "nav-link">Tourist Spots</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "../minicapstone/user/booking.php" class = "nav-link">Booking</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "../minicapstone/user/profile.php" class = "nav-link">Profile</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "../minicapstone/logout.php" class = "nav-link">Logout</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of navbar  -->

        <!-- header -->
        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>DIVING CORDOVAS BEAUTY AND ICONIC ATTRACTIONS</h1>
                    <p>Discover the breathtaking charm of Cordova, Cebu! From vibrant marine sanctuaries to cultural landmarks, 
                        immerse yourself in unforgettable experiences that showcase the town's natural splendor and rich heritage. 
                        Dive deep into adventure and explore the best of Cordova's scenic wonders!</p>
</div>
            </div>
        </header>
        <!-- header -->

        <!-- featured section -->
        <section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
              
                  <span class = "sm-title ">Know about some places before your travel</span>
                    <h2 class = "lg-title">Featured places</h2>
                </div>

                    <div class = "featured-row">
                    <div class = "featured-item my-2 shadow">
                        <img src = "../minicapstone/user/image/day as 10k 2.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Day-as, Cordova,Cebu
                            </span>
                            <div>
                                <p class = "text">Fields of 10,000 glowing white roses illuminate the night, 
                                    captivating the hearts of all who see them. This extraordinary man-made marvel in Day-as, Cordova, 
                                    has become one of the island's most beloved attractions, enchanting visitors with the mesmerizing radiance of its luminous blooms.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "../minicapstone/user/image/gabi happy world museum.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Gabi, Cordova, Cebu
                            </span>
                            <div>
                                <p class = "text">Children and adults with vivid imaginations will delight in the Cebu Happy World Museum, 
                                    where a vibrant array of three-dimensional artworks and illusions captivate the senses. With over 85 stunning pieces on display,
                                     the museum offers a playful and immersive experience that sparks joy in every visitor.</p>
                            </div>

                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "../minicapstone/user/image/pilipog cclex.webp" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Pilipog, Cordova, Cebu
                            </span>
                            <div>
                                <p class = "text">Spanning elegance and innovation, 
                                    the Cebu-Cordova Link Expressway (CCLEX) stands as an iconic symbol of progress, 
                                    connecting communities and offering breathtaking views of the Cebu skyline.</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "../minicapstone/user/image/buagsong bakhaw.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Buagsong, Cordova, Cebu
                            </span>
                            <div>
                                <p class = "text">Craving the beach? If you’re looking for a quick getaway with friends that’s 
                                    budget-friendly and close to home, 
                                    this trending paradise in Cordova is the perfect escape!</p>
                            </div>
                        </div>
                    </div>
                    </nav>

                    <div class = "featured-item my-2 shadow">
                        <img src = "../minicapstone/user/image/poblacion plaza.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Poblacion, Cordova, Cebu
                            </span>
                            <div>
                                <p class = "text">Discover the heart of Cordova at the iconic plaza, where history, culture, 
                                    and leisure come together amidst a serene and welcoming ambiance.</p>
                            </div>

                            
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "../minicapstone/user/image/day-as cordova sungka.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Day-as, Cordova, Cebu
                            </span>
                            <div>
                                <p class = "text">Sungka Native Restaurant in Cordova, Cebu, offers a unique dining experience that blends
                                     traditional Filipino charm with modern comforts. Nestled amidst lush surroundings, 
                                    the restaurant showcases Cordova’s rich heritage through its native design and warm ambiance. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of featured section -->
<!-- testimonials section -->
<section id = "testimonials" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">what is the history of Cordova</span>
                    <h2 class = "lg-title">HISTORY</h2>
                </div>

                <div class = "test-row">
                    <div class = "test-item">
                        <p class = "text">Cordova is a coastal municipality in the island province of Cebu.
                        In 1863, Spanish Governor General Rafael Echagüe y Bermingham established the town of Cordova on the southeastern tip of Mactan Island. The town was formed from the barrios of Gabi, Day‑as, and Pilipul. 
                        The name Cordova may have come from the Spanish word for "stark nakedness and bare". 

</p>
                        <div class = "test-item-info">
                            <img src = "../minicapstone/user/image/cordova logo raw.png" alt = "testimonial">
                            <div>
                                <h3>MUNICIPALITY OF CORDOVA</h3>
                                <p class = "text">Cordova Cebu Philippines</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">On May 22, 1863, the Cordoba Parish was presented to the Cebu District
                             and was designated San Roque Parish of Cordoba,
                             proclaiming Sr. San Roque as the patron saint.</p>
                        <div class = "test-item-info">
                            <img src = "../minicapstone/user/image/san roque logo.jpg" alt = "testimonial">
                            <div>
                                <h3>SR. SAN ROQUE</h3>
                                <p class = "text">Patron Saint of Cordova</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">Dinagat Festival in Cordova is a popular festival that is yearly held to exhibit the work and angling society of this region. 
                            Dinagat is praised with religious relationship by holding it amid the devour of the town's benefactor holy person – San Roque.</p>
                        <div class = "test-item-info">
                            <img src = "../minicapstone/user/image/dinagat festival logo.jpg" alt = "testimonial">
                            <div>
                                <h3>DINAGAT FESTIVAL</h3>
                                <p class = "text">Fiesta in Cordova</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of testimonials section -->
        <!-- services section -->
        <section id = "services" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    
                    <h2 class = "lg-title"></h2>
                </div>


                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "far fa-map"></i>
                        </span>
                        <h3>Tourist Spots</h3>
                        <p class = "text">Discover the hidden gems of Cordova, Cebu, where history meets natural beauty. Nestled on the scenic shores of the island, Cordova offers an array of breathtaking attractions, from pristine beaches and lush mangroves to captivating cultural landmarks
                              </p>
                        <a href = "../minicapstone/tourist_spots.php" class = "btn">Visits</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of services section -->


        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.php" class = "site-brand">
                        Cor<span>DIVE</span>
                    </a>
                    <p class = "text">Thank You!
                    We deeply appreciate your support and trust. Your kindness and encouragement inspire us to strive for excellence every day. Thank you for being a part of our journey!</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "https://www.facebook.com">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://www.instagram.com">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://www.twitter.com">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://www.pinterest.com">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://www.google.com">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "./user/day-as.php">Day-as</a></li>
                        <li><a href = "./user/pilipog.php">Gabi</a></li>
                        <li><a href = "./user/pilipog.php">Pilipog</a></li>
                        <li><a href = "../minicapstone/user/buagsong.php">Buagsong</a></li>
                        <li><a href = "../minicapstone/user/poblacion.php">Poblacion</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for CorDIVE!</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
        <script src = "../minicapstone/user/script.js"></script>
        <script>
            // play/pause video
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('click', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
    </body>
</html>