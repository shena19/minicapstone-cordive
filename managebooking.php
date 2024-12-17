<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

include 'db.php';

// Fetch all bookings with user and tourist spot details
$query = "SELECT 
            b.id as booking_id,
            b.booking_date,
            b.payment_mode,
            b.created_at,
            u.username,
            ts.name as tourist_spot_name
          FROM bookings b
          JOIN users u ON b.user_id = u.id
          JOIN tourist_spots ts ON b.tourist_spot_id = ts.id
          ORDER BY b.created_at DESC";

$stmt = $pdo->prepare($query);
$stmt->execute();
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Bookings</title>
    <style>
      
    :root {
        --gold: #f0a500;
        --light-gold: #ffd700;
        --dark-gold: #b8860b;
        --black: #000000;
        --dark-gray: #1a1a1a;
        --light-gray: #2f2f2f;
        --white: #ffffff;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: var(--black);
        color: var(--white);
        font-family: 'Arial', sans-serif;
        line-height: 1.6;
    }
    
    main {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 2rem;
    }

    .main-nav {
        background-color: var(--dark-gray);
        padding: 15px 0;
        box-shadow: 0 2px 10px rgba(240, 165, 0, 0.3);
    }

    .main-nav ul {
        list-style: none;
        display: flex;
        justify-content: flex-start;
        gap: 30px;
        padding-left: 20px;
        max-width: 2000px;
        margin: 0 auto;
    }

    .main-nav ul li a {
        color: var(--gold);
        text-decoration: none;
        font-size: 18px;
        padding: 10px;
        transition: all 0.3s ease;
        border-radius: 5px;
    }

    .main-nav ul li a:hover {
        background-color: var(--gold);
        color: var(--black);
    }

    .booking-container {
        padding: 40px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .section-title {
        color: var(--gold);
        text-align: center;
        margin-bottom: 30px;
        font-size: 32px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .booking-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 10px;
        margin-top: 20px;
    }

    .booking-table th,
    .booking-table td {
        padding: 15px;
        text-align: left;
        border: none;
    }

    .booking-table th {
        background-color: var(--dark-gold);
        color: var(--black);
        font-weight: bold;
        text-transform: uppercase;
        font-size: 0.9em;
    }

    .booking-table tr {
        background-color: var(--dark-gray);
        transition: all 0.3s ease;
    }

    .booking-table tr:hover {
        background-color: var(--light-gray);
        transform: scale(1.02);
        box-shadow: 0 4px 15px rgba(240, 165, 0, 0.2);
    }

    .booking-table td {
        color: var(--white);
    }

    .status-badge {
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 0.8em;
        font-weight: bold;
        display: inline-block;
    }

    .status-pending {
        background-color: var(--light-gold);
        color: var(--black);
    }

    .status-confirmed {
        background-color: #4CAF50;
        color: var(--white);
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .main-nav ul {
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .booking-table {
            font-size: 14px;
        }

        .booking-table th,
        .booking-table td {
            padding: 10px;
        }

        .section-title {
            font-size: 24px;
        }
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: var(--dark-gray);
    }

    ::-webkit-scrollbar-thumb {
        background: var(--gold);
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: var(--dark-gold);
    }

    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="main-nav">
        <ul>
            <li><a href="admin_dashboard.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <div class="booking-container">
        <h1 class="section-title">Booking Management</h1>
        
        <table class="booking-table">
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>Customer</th>
                    <th>Tourist Spot</th>
                    <th>Booking Date</th>
                    <th>Payment Mode</th>
                    <th>Booked On</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookings as $booking): ?>
                    <tr>
                        <td>#<?php echo htmlspecialchars($booking['booking_id']); ?></td>
                        <td><?php echo htmlspecialchars($booking['username']); ?></td>
                        <td><?php echo htmlspecialchars($booking['tourist_spot_name']); ?></td>
                        <td><?php echo htmlspecialchars(date('F d, Y', strtotime($booking['booking_date']))); ?></td>
                        <td><?php echo htmlspecialchars(ucfirst(str_replace('_', ' ', $booking['payment_mode']))); ?></td>
                        <td><?php echo htmlspecialchars(date('F d, Y H:i:s', strtotime($booking['created_at']))); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>