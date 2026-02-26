<?php
session_start();
require __DIR__ . '/../config/db.php';

$email = $_POST['email'] ?? '';
$password = $_POST['pass'] ?? '';

if (!$email || !$password) die("Missing fields");

$user = $collection->findOne(["email" => $email]);

if (!$user) die("Invalid email");

if (!password_verify($password, $user["password"])) {
    die("Invalid password");
}

$_SESSION["user"] = $user["username"];
echo "Login success. Welcome " . $user["username"];
?>