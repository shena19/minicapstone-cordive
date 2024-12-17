<?php
// Assuming you have the spot ID and user ID to manage comments
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include '../minicapstone/db.php';

$user_id = $_SESSION['user_id'];
$spot_id = $_POST['spot_id'];
$comment = $_POST['comment'];

// Insert comment into comments table
$query = "INSERT INTO comments (user_id, spot_id, comment) VALUES (:user_id, :spot_id, :comment)";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':user_id', $user_id);
$stmt->bindParam(':spot_id', $spot_id);
$stmt->bindParam(':comment', $comment);
$stmt->execute();

echo "Comment added!";
?>
