<?php
// Start session and check if the user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Include the database connection
include '../db.php';

// Fetch recommendations from the database with details from the tourist_spots table
$query = "SELECT r.spot_id, s.name, s.description, r.created_at 
          FROM recommendations r
          JOIN tourist_spots s ON r.spot_id = s.id";  
$stmt = $pdo->prepare($query);
$stmt->execute();
$recommendations = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Recommendations</title>
    <style>
        /* General Styles */
        body {
            background-color: #0a0a0a;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #212121;
            padding: 20px;
            color: white;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin: 10px 0 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #f1f1f1;
            text-decoration: none;
            font-size: 1rem;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #ffcc00;
        }

        main {
            padding: 20px;
        }

        .title-wrap {
            text-align: center;
            margin-bottom: 20px;
        }

        .title-wrap .sm-title {
            font-size: 1.2rem;
            color: #f0a500;
            text-transform: uppercase;
        }

        .title-wrap .lg-title {
            font-size: 2.5rem;
            margin-top: 10px;
            color: white;
        }

        .featured-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .featured-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s;
        }

        .featured-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .featured-item:hover img {
            transform: scale(1.05);
        }

        .featured-item-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.8));
            color: #f0a500;
            padding: 15px;
            transform: translateY(100%);
            transition: transform 0.3s;
        }

        .featured-item:hover .featured-item-content {
            transform: translateY(0);
        }

        .featured-item-content span {
            display: block;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .featured-item-content p {
            font-size: 0.9rem;
            margin: 0;
            color: #f0a500;
        }

        footer {
            background-color: #212121;
            padding: 10px;
            text-align: center;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Top Recommendations</h1>
        <nav>
            <ul>
                <li><a href="../user/profile.php">Profile</a></li>
                <li><a href="../user/history.php">History</a></li>
                <li><a href="../tourist_spots.php">Tourist Spots</a></li>
                <li><a href="../user/recommendation.php">Recommendation</a></li>
                <li><a href="../user/booking.php">Booking</a></li>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="featured">
            <div class="title-wrap">
                <span class="sm-title">Know about some places before your travel</span>
                <h2 class="lg-title">Featured Places</h2>
            </div>
            <div class="featured-row">
                <?php foreach ($recommendations as $recommendation): ?>
                <div class="featured-item">
                    <img src="../images/placeholder.jpg" alt="<?php echo htmlspecialchars($recommendation['name']); ?>">
                    <div class="featured-item-content">
                        <span><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($recommendation['name']); ?></span>
                        <p><?php echo htmlspecialchars($recommendation['description']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Cordova Tour Package System</p>
    </footer>
</body>
</html>
