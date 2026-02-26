<?php
require __DIR__ . '/../config/db.php';

$id = $_POST['user_id'] ?? '';
$username = $_POST['user'] ?? '';
$email = $_POST['email'] ?? '';

if (!$id || !$username || !$email) die("Missing data");
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) die("Invalid email");

$collection->updateOne(
    ["user_id" => $id],
    ['$set' => [
        "username" => strtolower(trim($username)),
        "email" => strtolower(trim($email))
    ]]
);

echo "User updated";
?>