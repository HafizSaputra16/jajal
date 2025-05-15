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
<title>Home - Simple PHP App</title>
<link rel="stylesheet" href="css.css" />
</head>
<body>
<div class="container">
    <div class="home">
        <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <p>nama : muhamad hafiz edi saputra
		   kelas: XI TKJ 2
		   no   : 02</p>
        <nav class="nav-links">
            <a href="user.php" class="button">User Profile</a>
            <a href="logout.php" class="button button-logout">Logout</a>
        </nav>
    </div>
</div>
</body>
</html>
