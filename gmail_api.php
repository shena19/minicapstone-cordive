<?php
require_once __DIR__ . '/vendor/autoload.php';

// Set up the Google Client
$client = new Google_Client();
$client->setClientId('YOUR_CLIENT_ID');  // Replace with your client ID from Google Cloud
$client->setClientSecret('YOUR_CLIENT_SECRET');  // Replace with your client secret from Google Cloud
$client->setRedirectUri('YOUR_REDIRECT_URI');  // Replace with your redirect URI
$client->addScope(Google_Service_Gmail::GMAIL_READONLY);  // You can add more scopes based on your needs
$client->setAccessType('offline');
$client->setApprovalPrompt('force');

// Start session
session_start();

// Handle the OAuth 2.0 callback and fetch the user's Gmail information
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;

    // Redirect to the home page or dashboard after successful authentication
    header('Location: index.php');
    exit;
}

// If there's an access token in session, set it for API requests
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);

    // Create the Gmail service
    $gmailService = new Google_Service_Gmail($client);

    try {
        // Get the authenticated user's profile information
        $profile = $gmailService->users->getProfile('me');
        $emailAddress = $profile->getEmailAddress();
        $name = $profile->getDisplayName();
        $pictureUrl = "https://www.google.com/s2/photos/profile/{$emailAddress}";

        // Save the user's data (for example, store in your database)
        saveUserData($emailAddress, $name, $pictureUrl);  // Implement this function as needed

        echo "Welcome, " . $name . "<br>";
        echo "Your Gmail address is: " . $emailAddress . "<br>";
        echo "<img src='{$pictureUrl}' alt='Profile Picture'><br>";

    } catch (Exception $e) {
        echo 'Error retrieving user profile: ' . $e->getMessage();
    }
} else {
    // Generate an OAuth URL and redirect user to Gmail's consent screen
    $authUrl = $client->createAuthUrl();
    echo "<a href='{$authUrl}'>Login with Gmail</a>";
}

// Function to save user data (example, adapt as needed)
function saveUserData($email, $name, $picture) {
    // Connect to your database
    require_once 'db.php';  // Your database connection

    // Check if user exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if (!$user) {
        // Insert user data if they don't exist
        $stmt = $pdo->prepare("INSERT INTO users (username, email, profile_picture) VALUES (:name, :email, :picture)");
        $stmt->execute(['name' => $name, 'email' => $email, 'picture' => $picture]);
    }
}
?>
