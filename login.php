<?php
session_start();

// Include the database connection
require_once 'db.php';

// Initialize error message variable
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        // Collect form data
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = trim($_POST['password']);

        // Basic validation
        if (empty($email) || empty($password)) {
            $error_message = "Please fill in all fields.";
        } else {
            // Check if the user exists
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // User is authenticated, start session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];

                // Redirect based on user role
                if ($user['role'] == 'admin') {
                    header('Location: admin_dashboard.php');
                } elseif ($user['role'] == 'tourist_guide') {
                    header('Location: guide_dashboard.php');
                } else {
                    header('Location: homepage.php');
                }
                exit;
            } else {
                $error_message = "Invalid email or password.";
            }
        }
    } catch (PDOException $e) {
        $error_message = "An error occurred. Please try again later.";
        error_log("Login error: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: black;
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
    flex: 1;
    padding: 30px;
    max-width: 1000px;
    margin: 0 auto;
    width: 100%;
      }
        section {
            max-width: 500px;
            max-width: 500px;
            margin: 30px auto;
            padding: 20px;
            background: #111;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
        }

        h2 {
            text-align: center;
            color: #ffbb00;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #ffbb00;
            font-weight: 600;
        }

        input {
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #444;
            border-radius: 8px;
            background: #1e1e1e;
            color: #ffffff;
            font-size: 16px;
            transition: border-color 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }

        input:focus {
            border-color: #ffbb00;
            background-color: #2d2d2d;
            outline: none;
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


        .error-message {
            color: #ff4d4d;
            font-size: 14px;
            text-align: center;
            margin-bottom: 15px;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #ffbb00;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <main>
        <section>
        
            <h2>Login</h2>
            <form action="../minicapstone/login.php" method="POST">
                <?php if (!empty($error_message)): ?>
                    <p class="error-message"><?= htmlspecialchars($error_message) ?></p>
                <?php endif; ?>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>
            <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        </section>
    </main>
  
</body>
</html>
