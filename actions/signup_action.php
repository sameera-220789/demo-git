<?php
session_start();
require __DIR__ . '/../config/db.php';

$username = $_POST['user'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['pass'] ?? '';

if (!$username || !$email || !$password) die("All fields required");
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) die("Invalid email");
if (strlen($password) < 6) die("Password too short");

$username = strtolower(trim($username));
$email = strtolower(trim($email));
$hashed = password_hash($password, PASSWORD_DEFAULT);

// check duplicate
$existing = $collection->findOne([
    '$or' => [
        ['username' => $username],
        ['email' => $email]
    ]
]);
if ($existing) die("User exists");

// string user_id
$user_id = uniqid();

$collection->insertOne([
    "user_id" => $user_id,
    "username" => $username,
    "email" => $email,
    "password" => $hashed,
    "created_at" => date("Y-m-d H:i:s")
]);

echo "Signup success. Your ID: $user_id";
?>