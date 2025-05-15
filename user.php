<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>User Profile - Simple PHP App</title>
<link rel="stylesheet" href="css.css" />
</head>
<body>
<div class="container">
    <div class="user-profile">
        <h2>User Profile</h2>
        <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
        <p>seorang pelajar</p>
        <a href="home.php" class="button">Back to Home</a>
        <a href="logout.php" class="button button-logout">Logout</a>
    </div>
</div>
</body>
</html>
