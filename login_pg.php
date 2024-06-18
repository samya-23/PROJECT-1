<?php
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    include('database/connection.php');

    // Query to check if the user exists
    $query = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $query->bindParam(':username', $username);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Start the session and store user information
        session_start();
        $_SESSION['user'] = $user;
        header("Location: afterlogin.php"); // Redirect to dashboard
        exit();
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaQuest Login</title>
    <link rel="stylesheet" href="login_styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>PharmaQuest</h1>
            <h2>Navigating the Future of Pharmacy Management</h2>
            <?php if (!empty($error_message)): ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <form action="/login_pg.php" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
                <p class="signup-link">Don't have an account? <a href="/signup">Sign up</a></p>
            </form>
        </div>
    </div>
</body>
</html>
