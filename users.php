<?php
require __DIR__ . '/../config/db.php';

// fetch only documents that have username, email, and user_id
$users = $collection->find([
    'username' => ['$exists' => true],
    'email' => ['$exists' => true],
    'user_id' => ['$exists' => true]
]);
?>

<h2>Users List</h2>

<table>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php foreach ($users as $u): ?>
    <tr>
        <td><?= htmlspecialchars($u['username'] ?? 'N/A') ?></td>
        <td><?= htmlspecialchars($u['email'] ?? 'N/A') ?></td>
        <td>
        <a href="edit_users.php?id=<?= urlencode($u['user_id'] ?? '') ?>">Edit</a>
        <a href="../actions/delete_user.php?id=<?= urlencode($u['user_id'] ?? '') ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<style>
    table {
        border-collapse: collapse;
        width: 80%;
    }
    th, td {
        border: 1px solid black;
        padding: 8px 12px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    a {
        text-decoration: none;
        color: blue;
    }
</style>