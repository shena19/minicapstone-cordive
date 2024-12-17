<?php
// Start session
session_start();

// Include the database connection
include 'db.php';

// Initialize user variable
$user = null;

// Check if user is logged in
if(isset($_SESSION['user_id'])) {
    // Fetch user details only if user_id exists in session
    $user_id = $_SESSION['user_id'];
    $query = "SELECT username FROM users WHERE id = :user_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
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
        <link rel = "stylesheet" href = "../minicapstone/style.css">
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
                            <a href = "../minicapstone/login.php" class = "nav-link">Login</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "../minicapstone/register.php" class = "nav-link">Sign up</a>
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
        </html>