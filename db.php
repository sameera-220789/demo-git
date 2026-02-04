<?php
$conn = mysqli_connect("localhost", "root", "", "intro");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

echo "Database connected successfully";
?>
