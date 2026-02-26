<?php
require __DIR__ . '/../config/db.php';

// get user_id from URL
$id = $_GET['id'] ?? '';
if (!$id) die("Missing user ID");

// fetch the user
$user = $collection->findOne(["user_id" => $id]);
if (!$user) die("User not found");
?>

<h2>Edit User</h2>

<form method="post" action="../actions/update_user.php">
    <input type="hidden" name="user_id" value="<?= htmlspecialchars($id) ?>">

    Username:<br>
    <input type="text" name="user" value="<?= htmlspecialchars($user['username'] ?? '') ?>"><br><br>

    Email:<br>
    <input type="email" name="email" value="<?= htmlspecialchars($user['email'] ?? '') ?>"><br><br>

    <button type="submit">Update</button>
</form>