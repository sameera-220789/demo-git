<?php
$uploadDir = "uploads/";

if (isset($_FILES["myfile"])) {
    $fileName = basename($_FILES["myfile"]["name"]);
    $targetFile = $uploadDir . $fileName;

    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
        echo "File uploaded successfully!";
    } else {
        echo "Upload failed!";
    }
}
echo "<br><a href='index.php'>Go Back</a>";
?>
