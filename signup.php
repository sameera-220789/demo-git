<?php
include "db.php";

if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Clean input
    $username = ucwords(strtolower($username));
    $email = strtolower($email);

    if (strlen($username) < 3) {
        die("Username too short");
    }

    if (strlen($password) < 8) {
        die("Password must be at least 8 characters");
    }

    $username = addslashes($username);
    $email = addslashes($email);
    $password = addslashes($password);

    $query = "INSERT INTO signup (username, email, password)
              VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $query)) {
        echo "Signup successful";
    } else {
        die("Database error");
    }

} else {
    die("Invalid form submission");
}
?>
