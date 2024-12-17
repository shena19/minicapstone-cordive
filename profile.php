<?php
// Start session and check if the user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Include the database connection
include '../db.php';

// Fetch user details
$user_id = $_SESSION['user_id'];
$query = "SELECT username, email, password FROM users WHERE id = :user_id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Initialize messages
$error_message = "";
$success_message = "";

// Handle password change request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change_password'])) {
    $current_password = trim($_POST['current_password']);
    $new_password = trim($_POST['new_password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Check if the current password is correct
    if ($user && password_verify($current_password, $user['password'])) {
        if ($new_password === $confirm_password) {
            // Hash the new password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            try {
                // Update the password in the database
                $update_stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
                $update_stmt->execute([$hashed_password, $user_id]);
                
                // Set success message and flag for JavaScript alert
                $success_message = "Password changed successfully!";
                echo "<script>
                    alert('Password changed successfully!');
                    window.location.href = 'profile.php';
                </script>";
                exit();
            } catch (PDOException $e) {
                $error_message = "Failed to update password. Please try again.";
                error_log("Password update error: " . $e->getMessage());
            }
        } else {
            $error_message = "New password and confirmation do not match.";
        }
    } else {
        $error_message = "Current password is incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../user/styles.css">
    <title>Your Profile</title>
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
    max-width:1000px;
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
</head>
<body>
    <header>
        <h1>Your Profile</h1>
        <nav>
            <ul>
                <li><a href="../homepage.php">Back</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <br>
        <div class="profile-container">
            <section class="profile-info">
                <h2>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</h2>
                <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
            </section>
            
            <section class="change-password">
    <h3>Change Password</h3>

    <?php if (!empty($error_message)): ?>
        <div class="error-message"><?php echo htmlspecialchars($error_message); ?></div>
    <?php endif; ?>
    
    <?php if (!empty($success_message)): ?>
        <div class="success-message"><?php echo htmlspecialchars($success_message); ?></div>
    <?php endif; ?>

    <form action="profile.php" method="POST">
        <label for="current_password">Current Password</label>
        <input type="password" id="current_password" name="current_password" required>

        <label for="new_password">New Password</label>
        <input type="password" id="new_password" name="new_password" required>

        <label for="confirm_password">Confirm New Password</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br>
        <button type="submit" name="change_password">Update Password</button>
    </form>
</section>
        </div>
    </main><script>
    // Script to show alert when password is successfully updated
    <?php if (!empty($success_message)) { ?>
        alert('<?php echo htmlspecialchars($success_message); ?>');
    <?php } ?>
</script>

    <br>
    <footer>
        <p>&copy; 2024 Cordova Tour Package System</p>
    </footer>
</body>
</html>
