<?php
session_start();
require 'db.php';

// Ensure admin access
if ($_SESSION['user_type'] !== 'admin') {
    header("Location: index.php");
    exit;
}

// Fetch data for dashboard
$spots = $pdo->query("SELECT * FROM tourist_spots")->fetchAll(PDO::FETCH_ASSOC);
$users = $pdo->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
        <a href="logout.php">Logout</a>
    </header>
    <main>
        <section>
            <h2>Tourist Spots</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Barangay</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($spots as $spot): ?>
                    <tr>
                        <td><?= $spot['name'] ?></td>
                        <td><?= $spot['location'] ?></td>
                        <td><?= $spot['barangay'] ?></td>
                        <td>
                            <a href="edit_spot.php?id=<?= $spot['id'] ?>">Edit</a> |
                            <a href="delete_spot.php?id=<?= $spot['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
        <section>
            <h2>Users</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Type</th>
                </tr>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $user['name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['user_type'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </main>
</body>
</html>
