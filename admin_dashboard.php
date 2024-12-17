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
                            <a href = "../minicapstone/admin_dashboard.php" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "../minicapstone/managebooking.php" class = "nav-link">Manage Booking</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "../minicapstone/logout.php" class = "nav-link">Log out</a>
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