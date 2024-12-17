<?php
session_start();
require_once 'db.php';

// Initialize message variables
$error_message = '';
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs
    $username = trim($_POST['username']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $role = 'user'; // Set default role without form input
    
    try {
        // Check if email or username already exists
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ? OR username = ?");
        $stmt->execute([$email, $username]);
        
        if ($stmt->fetchColumn() > 0) {
            // Check specifically which one exists
            $stmt = $pdo->prepare("SELECT username, email FROM users WHERE username = ? OR email = ?");
            $stmt->execute([$username, $email]);
            $existing = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($existing['username'] === $username) {
                throw new Exception("Username already taken. Please choose a different username.");
            } else {
                throw new Exception("Email already registered.");
            }
        }
        
        // Rest of your validation code
        if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
            throw new Exception("All fields are required.");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Please enter a valid email address.");
        }
        if (strlen($password) < 8) {
            throw new Exception("Password must be at least 8 characters long.");
        }
        if ($password !== $confirm_password) {
            throw new Exception("Passwords do not match.");
        }
    
        // Hash password and insert user
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
        
        if ($stmt->execute([$username, $email, $hashed_password, $role])) {
            $success_message = "Registration successful! Redirecting to login...";
            header("refresh:2;url=login.php");
            exit();
        } else {
            throw new Exception("Registration failed. Please try again.");
        }
        
    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #000;
            color: #fff;
        }

        header {
            background: #111;
            padding: 10px 20px;
            border-bottom: 2px solid #f0a500;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
            color: #f0a500;
        }

        main {
            max-width: 500px;
            margin: 30px auto;
            padding: 20px;
            background: #111;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
        }

        section h2 {
            text-align: center;
            color: #f0a500;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            color: #f0a500;
            font-weight: bold;
        }

        input, select {
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #444;
            border-radius: 5px;
            background: #222;
            color: #fff;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #f0a500;
        }

        button {
            padding: 10px;
            background: #f0a500;
            color: #000;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #ffa500;
        }

        .message {
            text-align: center;
            margin: 10px 0;
            font-weight: bold;
        }

        .message.error {
            color: #ff4d4d;
        }

        .message.success {
            color: #4caf50;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: #111;
            border-top: 2px solid #f0a500;
            color: #fff;
        }

        a {
            color: #f0a500;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1 style="text-align: center;">Create an Account</h1>
    </header>
    <main>
        <section>
            <h2>Register</h2>

            <?php if (!empty($error_message)): ?>
                <div class="message error"><?php echo htmlspecialchars($error_message); ?></div>
            <?php endif; ?>
            
            <?php if (!empty($success_message)): ?>
                <div class="message success"><?php echo htmlspecialchars($success_message); ?></div>
            <?php endif; ?>

            <form action="register.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
   
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>

                <button type="submit">Register</button>
            </form>

            <div style="text-align: center; margin-top: 20px;">
                <p>If you already have an account, <a href="login.php">Login here</a>.</p>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Cordova Tour Package System</p>
    </footer>
</body>
</html>