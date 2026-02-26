<?php
require __DIR__ . '/../config/db.php';

$id = $_GET['id'] ?? '';
if (!$id) die("Missing ID");

$collection->deleteOne(["user_id" => $id]);

echo "User deleted";
?>