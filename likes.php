<?php
// Assuming you have the spot ID and user ID to manage likes
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../minicapstone/db.php';

$user_id = $_SESSION['user_id'];
$spot_id = $_POST['spot_id'];

// Check if the user has already liked the spot
$query = "SELECT * FROM likes WHERE user_id = :user_id AND spot_id = :spot_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':user_id', $user_id);
$stmt->bindParam(':spot_id', $spot_id);
$stmt->execute();

if ($stmt->rowCount() == 0) {
    // If not liked, insert into likes table
    $insertQuery = "INSERT INTO likes (user_id, spot_id) VALUES (:user_id, :spot_id)";
    $insertStmt = $pdo->prepare($insertQuery);
    $insertStmt->bindParam(':user_id', $user_id);
    $insertStmt->bindParam(':spot_id', $spot_id);
    $insertStmt->execute();
    echo "Liked successfully!";
} else {
    echo "You have already liked this spot.";
}
?>
