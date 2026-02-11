<?php
if (isset($_GET["file"])) {

    $file = $_GET["file"];
    $path = "uploads/" . $file;

    if (file_exists($path)) {

        header("Content-Disposition: attachment; filename=" . basename($path));
        header("Content-Type: application/octet-stream");
        header("Content-Length: " . filesize($path));

        readfile($path);
        exit;
    } else {
        echo "File not found.";
    }
}
?>
