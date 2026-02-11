<?php
$uploadDir = "uploads/";
$file = $_GET["file"];
$filePath = $uploadDir . $file;

if (file_exists($filePath)) {
    unlink($filePath);
    echo "File deleted successfully!";
} else {
    echo "File not found.";
}

echo "<br><a href='index.php'>Go Back</a>";
?>
