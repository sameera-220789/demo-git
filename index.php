<?php
$folder = "uploads/";

// Create uploads folder if not exists
if (!is_dir($folder)) {
    mkdir($folder);
}

// Handle Upload
if (isset($_POST["upload"])) {

    $fileName = time() . "_" . basename($_FILES["file"]["name"]);
    $tmpName = $_FILES["file"]["tmp_name"];
    $path = $folder . $fileName;

    if (move_uploaded_file($tmpName, $path)) {
        $success = "File Uploaded Successfully!";
    } else {
        $error = "Upload Failed!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini File Manager</title>
</head>
<body>

<h2>Upload File</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit" name="upload">Upload</button>
</form>

<hr>

<?php
if (isset($success)) {
    echo "<p style='color:green;'>$success</p>";
}

if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>

<h2>Uploaded Files</h2>

<table border="1" cellpadding="10">
<tr>
    <th>File Name</th>
    <th>Size (KB)</th>
    <th>Type</th>
    <th>Last Modified</th>
    <th>Action</th>
</tr>

<?php
$files = scandir($folder);

foreach ($files as $file) {

    if ($file != "." && $file != "..") {

        $path = $folder . $file;

        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>" . round(filesize($path)/1024,2) . " KB</td>";
        echo "<td>" . filetype($path) . "</td>";
        echo "<td>" . date("d-m-Y H:i:s", filemtime($path)) . "</td>";
        echo "<td><a href='download.php?file=$file'>Download</a></td>";
        echo "</tr>";
    }
}
?>

</table>

</body>
</html>
