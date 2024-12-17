<?php
// Start session and check if the user is logged in
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location:login.php");
    exit();
}

// Include the database connection
include '../minicapstone/db.php';  // Changed to look for db.php in parent directory
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
// $data = json_decode(file_get_contents('php://input'), true);
if (isset($data['spot_id'])) {
    $spotId = $data['spot_id'];
    // $likes = $data['likes'];
    
    $query = "SELECT * FROM tourist_spots";
    $stmt = $pdo->prepare($query);
    // $stmt->bindParam(':likes', $likes, PDO::PARAM_INT);
    $stmt->bindParam(':id', $spotId, PDO::PARAM_INT);

try {
    $stmt->execute();
    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
}
}
$query = "SELECT ts.*, COUNT(l.id) as like_count,
          EXISTS(SELECT 1 FROM likes WHERE user_id = ? AND spot_id = ts.id) as user_liked
          FROM tourist_spots ts
          LEFT JOIN likes l ON ts.id = l.spot_id
          GROUP BY ts.id";
$stmt = $pdo->prepare($query);
$stmt->execute([$_SESSION['user_id']]);
$tourist_spots = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Fetch tourist spots details
$query = "SELECT * FROM tourist_spots"; // Add your specific query here
$stmt = $pdo->prepare($query);
$stmt->execute();
$tourist_spots = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Tourist Spots - Cordova</title>
    <style>
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

    header {
        background-color: var(--light-gray);
        padding: 2rem;
        text-align: center;
        box-shadow: 0 2px 10px rgba(255, 215, 0, 0.3);
    }

    header h1 {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
        color: var(--gold);
    }

    nav {
        background-color: var(--gold);
        padding: 1rem;
        box-shadow: 0 2px 10px rgba(255, 215, 0, 0.3);
        overflow-x: auto;
        white-space: nowrap;
    }

    nav ul {
        list-style: none;
        padding: 0;
        display: flex;
        justify-content: center;
    }

    nav ul li {
        margin: 0 15px;
    }

    nav ul li a {
        color: var(--black);
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
        display: inline-block;
        padding: 0.5rem 1rem;
        border-radius: 5px;
    }

    nav ul li a:hover {
        background-color: var(--dark-gold);
        color: var(--light-gold);
    }

    main {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 2rem;
    }


        /* Additional styles for barangay grid */
        .barangay-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }

        .barangay-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .barangay-card:hover {
            transform: translateY(-5px);
        }

        .barangay-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .barangay-image-description {
            width: 100%;
            height: 60px;
            object-fit: cover;
        }
        .barangay-content {
            padding: 1.5rem;
        }

        .barangay-title {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .barangay-description {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .read-more-btn {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            background-color: #ffcc00;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .read-more-btn:hover {
            background-color: #f1a500;
        }
        .barangay-image-container {
        position: relative;
        width: 100%;
    }

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
        <h1>Tourist Spots in Cordova</h1>
        <nav>
            <ul>
               
                <li><a href="../minicapstone/homepage.php">Back</a></li>
                <li><a href="../minicapstone/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="barangay-grid">
                <!-- Alegria -->
                <div class="barangay-card">
                    <div class="barangay-image-container">
                        <img src="../minicapstone/user/image/alegria barangayhall1.jpg" alt="Alegria" class="barangay-image">
                        <!-- <button class="heart-btn" data-spot-id="1">
                            <i class="heart-icon far fa-heart"></i>
                            <span class="like-count">0</span>
                        </button> -->
                    </div>

                    <div class="barangay-content">
                        <h3 class="barangay-title">Alegria</h3>
                        <p class="barangay-description">Known for its pristine beaches and rich marine biodiversity, Alegria offers a perfect escape for nature lovers and diving enthusiasts.</p>
                        <a href="../minicapstone/user/alegria.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- Bang-bang -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/Bangbang Barangay Hall1.jpg" alt="Bang-bang" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">Bang-bang</h3>
                        <p class="barangay-description">Home to traditional fishing communities and scenic coastal views, Bang-bang showcases the authentic lifestyle of Cordova's fisherfolk.</p>
                        <a href="../minicapstone/user/bangbang.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- Buagsong -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/buagsong barangayhall1.jpg" alt="Buagsong" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">Buagsong</h3>
                        <p class="barangay-description">Famous for its mangrove sanctuary and eco-tourism initiatives, Buagsong is a testament to environmental conservation efforts.</p>
                        <a href="../minicapstone/user/buagsong.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- Catarman -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/catarman barangayhall1.jpg" alt="Catarman" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">Catarman</h3>
                        <p class="barangay-description">A historical district featuring colonial-era architecture and cultural landmarks that tell stories of Cordova's past.</p>
                        <a href="../minicapstone/user/catarman.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- Cogon -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/Cogon Barangay Hall 1.jpg" alt="Cogon" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">Cogon</h3>
                        <p class="barangay-description">Known for its lush vegetation and agricultural heritage, Cogon offers a glimpse into rural life and farming traditions.</p>
                        <a href="../minicapstone/user/cogon.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- Day-as -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/day-as barangayhall1.jpg" alt="Day-as" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">Day-as</h3>
                        <p class="barangay-description">Home to the famous 10,000 Roses Café and modern attractions, Day-as represents the perfect blend of tradition and innovation.</p>
                        <a href="../minicapstone/user/day-as.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- Dapitan -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/Dapitan Barangay Hall1.jpg" alt="Dapitan" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">Dapitan</h3>
                        <p class="barangay-description">A vibrant community known for its local markets and traditional crafts, showcasing the best of Cordovan artisanship.</p>
                        <a href="../minicapstone/user/dapitan.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- Gabi -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/Gabi Barangay Hall1.jpg" alt="Gabi" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">Gabi</h3>
                        <p class="barangay-description">Features the Cebu Happy World Museum and various entertainment venues, making it a hub for family-friendly activities.</p>
                        <a href="../minicapstone/user/gabi.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- Gilutongan -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/gilutongan barangay hall1.jpg" alt="Gilutongan" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">Gilutongan</h3>
                        <p class="barangay-description">An island barangay offering pristine waters and rich marine sanctuaries, perfect for snorkeling and diving adventures.</p>
                        <a href="../minicapstone/user/gilutungan.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- Ibabao -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/ibabao barangayhall1.jpg" alt="Ibabao" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">Ibabao</h3>
                        <p class="barangay-description">A residential area with developing tourism potential, featuring local eateries and traditional Filipino hospitality.</p>
                        <a href="../minicapstone/user/ibabao.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- Pilipog -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/pilipog barangayhall1.jpg" alt="Pilipog" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">Pilipog</h3>
                        <p class="barangay-description">Gateway to the CCLEX bridge, offering stunning views of modern infrastructure alongside traditional coastal living.</p>
                        <a href="../minicapstone/user/pilipog.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- Poblacion -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/poblacion barangayhall2.jpg" alt="Poblacion" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">Poblacion</h3>
                        <p class="barangay-description">The town center featuring the municipal hall, church, and plaza, representing the heart of Cordova's community life.</p>
                        <a href="../minicapstone/user/poblacion.php" class="read-more-btn">Read More</a>
                    </div>
                </div>

                <!-- San Miguel -->
                <div class="barangay-card">
                    <img src="../minicapstone/user/image/sanmiguel barangayhall1.jpg" alt="San Miguel" class="barangay-image">
                    <div class="barangay-content">
                        <h3 class="barangay-title">San Miguel</h3>
                        <p class="barangay-description">Known for its peaceful atmosphere and developing residential areas, offering a glimpse of modern suburban life in Cordova.</p>
                        <a href="../minicapstone/user/sanmiguel.php" class="read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
            <!-- <?php foreach ($tourist_spots as $spot): ?>
        <!-- <div class="spot-card">
            <h3><?php echo htmlspecialchars($spot['name']); ?></h3> -->
            
            </div>
            
        </div>
    <?php endforeach; ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Cordova Tour Package System</p>
    </footer>

    <script>
        
        // Handle likes and comments actions (Example)
        document.querySelectorAll('.heart-btn').forEach(button => {
            const likes = JSON.parse(localStorage.getItem('spotLikes')) || {};

function toggleLike(spotId, button) {
    const heartBtn = button;
    const likeCount = document.getElementById(`likes-${spotId}`);
    const currentLikes = parseInt(likeCount.textContent);
    const newLikes = heartBtn.classList.contains('active') ? currentLikes - 1 : currentLikes + 1;
    
fetch('tourist_spots.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({ spot_id: spotId, likes: newLikes })
})

    if (!likes[spotId]) {
        likes[spotId] = 0;
    }
    
    if (heartBtn.classList.contains('active')) {
        heartBtn.classList.remove('active');
        likes[spotId]--;
    } else {
        heartBtn.classList.add('active');
        likes[spotId]++;
    }
    
    likeCount.textContent = likes[spotId];
    localStorage.setItem('spotLikes', JSON.stringify(likes));

    // Optional: Send to server
    updateLikeInDatabase(spotId, likes[spotId]);
}

// Initialize likes on page load
function initializeLikes() {
    Object.keys(likes).forEach(spotId => {
        const heartBtn = document.getElementById(`heart-${spotId}`);
        const likeCount = document.getElementById(`likes-${spotId}`);
        
        if (likes[spotId] > 0) {
            heartBtn.classList.add('active');
        }
        likeCount.textContent = likes[spotId] || 0;
    });
}

// Optional: Function to update likes in database
function updateLikeInDatabase(spotId, likeCount) {
    fetch('update_likes.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            spot_id: spotId,
            likes: likeCount
        })
    })
    .then(response => response.json())
    .then(data => console.log('Success:', data))
    .catch(error => console.error('Error:', error));
}

// Call initialize function when page loads
document.addEventListener('DOMContentLoaded', initializeLikes);
        });
    </script>
</body>
</html>
  