<?php
// Start session and check if the user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Include the database connection
include '../db.php';

// Initialize variables for error handling
$error = '';
$success = '';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $tourist_spot_id = $_POST['tourist_spot'];
    $user_id = $_SESSION['user_id'];
    $booking_date = $_POST['booking_date'];
    $payment_mode = $_POST['payment_mode'];
    $price = $_POST['price'];

    // Validate input data
    if (empty($tourist_spot_id) || empty($booking_date) || empty($payment_mode)) {
        $error = 'Please fill in all fields, including mode of payment.';
    } else {
        // Insert the booking into the database
        $query = "INSERT INTO bookings (user_id, tourist_spot_id, booking_date, payment_mode, price) VALUES (:user_id, :tourist_spot_id, :booking_date, :payment_mode, :price)";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':tourist_spot_id', $tourist_spot_id, PDO::PARAM_INT);
        $stmt->bindParam(':booking_date', $booking_date);
        $stmt->bindParam(':payment_mode', $payment_mode);
        $stmt->bindParam(':price', $price);

        if ($stmt->execute()) {
            $success = 'Booking successfully placed!';
        } else {
            $error = 'Failed to place the booking. Please try again later.';
        }
    }
}

// Fetch all tourist spots from the database for the form dropdown
$query = "SELECT id, name, price FROM tourist_spots";
$stmt = $pdo->prepare($query);
$stmt->execute();
$spots = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<style>
  /* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Root Variables */
:root {
    --gold: #f0a500;
    --black: #000000;
    --white: #ffffff;
    --dark-gold: #c88a00;
    --red: #ff4444;
    --green: #00C851;
}

/* Body Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #222;
    color: var(--gold);
    line-height: 1.6;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

/* Header Styling */
header {
    background-color: var(--black);
    color: var(--gold);
    padding: 20px 0;
    text-align: center;
}

header h1 {
    font-size: 2rem;
    margin-bottom: 15px;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 20px;
}

nav ul li a {
    color: var(--gold);
    text-decoration: none;
    padding: 8px 15px;
    transition: all 0.3s ease;
}

nav ul li a:hover {
    background-color: var(--gold);
    color: var(--black);
    border-radius: 5px;
}

/* Main Content Styling */
main {
    flex: 1;
    padding: 30px;
    max-width: 1000px;
    margin: 0 auto;
    width: 100%;
}

.container {
    background-color: var(--black);
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(240, 165, 0, 0.2);
}

/* Form Styling */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

form label {
    color: var(--gold);
    font-weight: bold;
}

form input,
form select {
    padding: 10px;
    border: 1px solid var(--gold);
    border-radius: 5px;
    background-color: var(--black);
    color: var(--gold);
}

form input:focus,
form select:focus {
    outline: none;
    border-color: var(--dark-gold);
    box-shadow: 0 0 5px rgba(240, 165, 0, 0.5);
}

button {
    background-color: var(--gold);
    color: var(--black);
    padding: 12px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: all 0.3s ease;
}

button:hover {
    background-color: var(--dark-gold);
}

/* Messages Styling */
.error-message {
    color: #ff4444;
    background-color: rgba(255, 68, 68, 0.1);
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
}

.success-message {
    color: #00C851;
    background-color: rgba(0, 200, 81, 0.1);
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
}

/* Profile Container Styling */
.profile-container {
    background-color: var(--black);
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(240, 165, 0, 0.2);
}

.profile-info {
    margin-bottom: 30px;
}

.profile-info h2 {
    color: var(--gold);
    margin-bottom: 15px;
}

/* Footer Styling */
footer {
    background-color: var(--black);
    color: var(--gold);
    text-align: center;
    padding: 15px 0;
    margin-top: auto;
}

/* Responsive Design */
@media (max-width: 768px) {
    main {
        padding: 15px;
    }
    
    .container {
        padding: 15px;
    }
    
    header h1 {
        font-size: 1.5rem;
    }
    
    nav ul {
        flex-direction: column;
        gap: 10px;
    }
}
</style>
<script>
function updatePrice() {
    const selectElement = document.getElementById('tourist_spot');
    const priceInput = document.getElementById('price');
    const selectedOption = selectElement.options[selectElement.selectedIndex];
    
    if (selectedOption.value !== "") {
        const price = selectedOption.getAttribute('data-price');
        priceInput.value = price;
        console.log('Selected price:', price);
    } else {
        priceInput.value = "";
    }
}
</script>
<body>
    <header>
        <h1>Book Your Adventure</h1>
        <nav>
            <ul>
                <li><a href="../homepage.php">Home</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <div class="container">
        <section>
            <h2>Plan Your Visit</h2>
            <p>Secure your spot at the best tourist attractions and experiences in Cordova.</p>

            <?php if ($error): ?>
                <p class="error-message"><?php echo htmlspecialchars($error); ?></p>
            <?php endif; ?>

            <?php if ($success): ?>
                <p class="success-message"><?php echo htmlspecialchars($success); ?></p>
            <?php endif; ?>

            <form action="booking.php" method="POST">
                <label for="tourist_spot">Select a Tourist Spot:</label>
                <select id="tourist_spot" name="tourist_spot" required onchange="updatePrice()">
                    <option value="">Select a Spot</option>
                    <?php foreach ($spots as $spot): ?>
                        <option value="<?php echo htmlspecialchars($spot['id']); ?>" 
                                data-price="<?php echo htmlspecialchars($spot['price']); ?>">
            <?php echo htmlspecialchars($spot['name']); ?>
        </option>
    <?php endforeach; ?>
</select>
                <label for="price">Price (PHP):</label>
                <input type="number" id="price" name="price" min="0" step="0.01" required placeholder="Enter amount in PHP" readonly>

                <label for="booking_date">Booking Date:</label>
                <input type="date" id="booking_date" name="booking_date" required>

                <label for="payment_mode">Mode of Payment:</label>
                <select id="payment_mode" name="payment_mode" required>
                    <option value="">Select Payment Mode</option>
                    <option value="cash_on_site">Cash on Site</option>
                </select>

                <button type="submit">Book Now</button>
            </form>
        </section>
    </div>
    </main>
    <br>
    <br>
    <footer>
        <p>&copy; 2024 Cordova Tour Package System</p>
    </footer>
</body>
</html>
