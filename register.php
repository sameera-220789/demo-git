<?php
include 'db.php';

$message = "";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $message = "Passwords do not match!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if email already exists
        $check = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $result = $check->get_result();

        if ($result->num_rows > 0) {
            $message = "Email already registered!";
        } else {
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt->execute()) {
                $message = "Registration successful!";
            } else {
                $message = "Error: " . $stmt->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Registration</title>
    <link rel="stylesheet" href="spotify.css">
</head>
<body>

<div class="form-container">
    <h2>Create Your Spotify Account</h2>
    <p class="subtitle">Sign up to enjoy your favorite music</p>

    <form method="POST" action="">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter username" required>

        <label>Email</label>
        <input type="email" name="email" placeholder="Enter email" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Create password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="Confirm password" required>

        <button type="submit" name="register">Sign Up</button>
    </form>

    <p style="color:green;"><?php echo $message; ?></p>

    <p class="switch">
        Already have an account? <a href="login.php">Log In</a>
    </p>
</div>

</body>
</html>