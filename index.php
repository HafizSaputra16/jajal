<?php
session_start();

// Simple user data for demo
$users = ['hafiz02' => '123'];

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: home.php');
        exit();
    } else {
        $error = 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>hafiz02hosting</title>
<link rel="stylesheet" href="css.css" />
</head>
<body>
<div class="container">
    <form class="login-form" method="POST" action="">
        <h2>LOGIN</h2>
        <?php if ($error): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter username" required autofocus />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter password" required />
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
