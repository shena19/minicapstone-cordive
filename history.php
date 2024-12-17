<?php
// Start session and check if the user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Include the database connection
require_once('../db.php');

// Add error reporting for debugging    
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // Fetch historical information
    $query = "SELECT title, description FROM history WHERE id = 1"; // Adjust based on your actual database structure
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $history = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$history) {
        $history = [
            'title' => 'History of Cordova',
            'description' => 'Historical information will be displayed here.'
        ];
    }
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cordova's History</title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: black;
            color: white;
        }

        header {
            background-color: #1a1a1a;
            padding: 20px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        header h1 {
            margin: 0;
            color: gold;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            border: 2px solid transparent;
        }

        nav ul li a:hover {
            border: 2px solid gold;
            border-radius: 5px;
        }

        main {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .history-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .history-section {
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .history-section h2 {
            color: gold;
            margin-top: 0;
        }

        .history-section p {
            line-height: 1.8;
        }

        .history-image {
            width: 100%;
            height: 300px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: 20px;
        }

        footer {
            text-align: center;
            background-color: #1a1a1a;
            color: gold;
            padding: 20px;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <header>
        <h1>Cordova's History</h1>
        <nav>
            <ul>
                <li><a href="../user/profile.php">Profile</a></li>
                <li><a href="../user/history.php">History</a></li>
                <li><a href="../tourist_spots.php">Tourist Spots</a></li>
                <li><a href="../user/reccomendation.php">Recommendation</a></li>
                
                <li><a href="../index.php">Home</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="history-container">
            <div class="history-section">
                <div class="history-image" style="background-image: url('../user/image/cordova\ logo\ raw.png');"></div>
                <h2>History of Cordova</h2>
                <p>
               Cordova, officially the Municipality of Cordova ( <a href="https://en.wikipedia.org/wiki/Cebuano_language">Cebuano:</a>Lungsod sa Cordova;
                <a href="https://en.wikipedia.org/wiki/Filipino_language">Filipino</a> Bayan ng Cordova),
                is a 1st class <a href="https://en.wikipedia.org/wiki/Municipalities_of_the_Philippines">Municipality</a> 
                 in the <a href="https://en.wikipedia.org/wiki/Provinces_of_the_Philippines">Province</a>of 
                 <a href="https://en.wikipedia.org/wiki/Cebu">Cebu</a>,
                 <a href="https://en.wikipedia.org/wiki/Philippines">Philippines</a>. According to the 2020 census, 
                it has a population of 70,595 people.
                <a href="https://en.wikipedia.org/wiki/Cordova,_Cebu#cite_note-PSA20%E2%80%9307-3">[3]</a>.

               </p>
               <br>
               <p>Also spelled Cordoba, most of the municipality lies on separate islands off the southern coast of
               <a href="https://en.wikipedia.org/wiki/Mactan">Mactan Island. </a>
               
                It is connected by two bridges to the main island of Mactan, 
                which itself is connected to mainland Cebu by the two bridges between 
                <a href="https://en.wikipedia.org/wiki/Mandaue">Mandaue </a>.
                 and<a href="https://en.wikipedia.org/wiki/Lapu-Lapu_City">Lapu Lapu city </a>.
                The
                <a href="https://en.wikipedia.org/wiki/Cebu%E2%80%93Cordova_Link_Expressway">Cebu–Cordova Link Expressway, </a>.
              opened in 2022, connects it directly to mainland Cebu in
              <a href="https://en.wikipedia.org/wiki/Cebu_City">Cebu City. </a>
              <a href="https://en.wikipedia.org/wiki/Cordova,_Cebu#cite_note-FOOTNOTECebu_Daily_News2016-5">[5] </a>
              
              <a href="https://en.wikipedia.org/wiki/Wikipedia:Verifiability">[failed verification] </a>
              <a href="https://en.wikipedia.org/wiki/Cordova,_Cebu#cite_note-FOOTNOTEPhilippine_Star2016-6">[6] </a>
              <a href="https://en.wikipedia.org/wiki/Wikipedia:Verifiability">[failed verification]
              </a>
              
               Cordova is bordered to the north by Lapu-Lapu City, 
                to the west by the Mactan Channel, to the east by the 
                <a href="https://en.wikipedia.org/wiki/Hilutangan_Channel">Hilutangan Channel </a>
                 and               <a href="https://en.wikipedia.org/wiki/Olango_Island_Group">  Olango Island,</a>
               
             and to the south by the 
             <a href="https://en.wikipedia.org/wiki/Cebu_Strait">Cebu Strait. </a>
             

                 Cordova is a part of               <a href="https://en.wikipedia.org/wiki/Metro_Cebu">Metro Cebu </a>
                 </p>
                 <br>
    
            
                <h2>Geography</h2>
                <p>On 22 May 1863, the Spanish Governor General of the Philippines Rafael Echagüe y Bermingham 
                    (San Sebastián, 1815 - Madrid, 1887) created a new town comprising the barrios of Gabi, Day‑as and Pilipul (now called Pilipog), 
                    all of which are located on the southeastern tip of Mactan Island. 
                    Some authors think he chose the name Cordoba which means "stark nakedness and bare", but they do not indicate in what language. 
                    The decree of becoming a municipality only became effective in 1864.</p>
                    <br>

                    <p>However, before being appointed Governor General, in 1858, 
                        Rafael Echagüe y Bermingham was representative in the Spanish Congress of Deputies for the province of Cordoba (Spain),
                         so he should have given that name in memory of his previous experiences.</p>
                         <br>
                         <p>In addition to Spain and the Philippines, 
                            there are other cities or provinces named Cordoba, 
                            Cordova or Las Cordobas in Argentina, Colombia, USA and Mexico,
                             all of them founded and named by Spanish, in memory of the Spanish Cordoba or the surname/family name of its founders.</p>
                             <br>

                             <p>Cordova became a municipality in 1864, and from 1913 up to the present, a total of 15 mayors governed the district.</p>
                             <br>
                             <p>The Cebu–Cordova Link Expressway, which was completed in 2022, connects the town to Cebu City in mainland Cebu. 
                                This is the third bridge connecting mainland Cebu to Mactan Island, after the Mactan–Mandaue Bridge and the Marcelo Fernan Bridge, 
                                both of which connect the cities of Mandaue in the mainland and Lapu-Lapu City in Mactan.</p>
                                

            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Cordova Tour Package System</p>
    </footer>
</body>

</html>
