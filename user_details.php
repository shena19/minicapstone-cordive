<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: register.php");
    exit();
}

echo "<h1>Welcome, " . htmlspecialchars($_SESSION['email']) . "!</h1>";
echo "<a href='logout.php'>Logout</a>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
    <h2>Your Profile</h2>
    <p>Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
</body>
</html>
Logout Page (logout.php)
To allow users to log out, you can create a simple logout script:

php
Edit
Copy code
<?php
session_start();
session_destroy();
header("Location: register.php");
exit();
?>