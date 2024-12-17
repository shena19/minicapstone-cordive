<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=cor_dive', 'username', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Guides</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tourist Guides</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Featured Guides</h2>
            <div class="card">
                <h3>Guide Name</h3>
                <p>Experience: 5+ years</p>
                <p>Languages: English, Cebuano</p>
                <p>Contact: +63 123 456 7890</p>
            </div>
            <!-- Add more cards dynamically with PHP or manually -->
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Cordova Tour Package System</p>
    </footer>
</body>
</html>
