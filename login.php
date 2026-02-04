<?php
include "db.php";

if (isset($_POST['email'], $_POST['password'])) {

    $email = strtolower(trim($_POST['email']));
    $password = trim($_POST['password']);

    $query = "SELECT * FROM signup WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed");
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (strcmp($row['password'], $password) == 0) {
            echo "Login successful";
            print "<br>Welcome, " . htmlspecialchars($row['username']);
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
    }

} else {
    die("Form not submitted");
}
?>
