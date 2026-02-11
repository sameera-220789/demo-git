<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>PHP File Handling Demonstration</h1>";

$filename = "demo.txt";
$folder = "testFolder";

echo "<h2>1. File Read / Write</h2>";

// fopen + fwrite
$file = fopen($filename, "w");
fwrite($file, "Hello World\n");
fwrite($file, "This is a PHP file handling demo.\n");
fclose($file);

// fopen + fread
$file = fopen($filename, "r");
$content = fread($file, filesize($filename));
fclose($file);

echo "<b>Content using fread():</b><br>";
echo nl2br($content);

// file_get_contents
echo "<br><b>Using file_get_contents():</b><br>";
echo nl2br(file_get_contents($filename));

// file_put_contents
file_put_contents($filename, "Updated using file_put_contents()\n");

// file() → reads into array
echo "<br><b>Using file():</b><br>";
print_r(file($filename));



echo "<h2>2. File Information</h2>";

echo "File Exists: " . (file_exists($filename) ? "Yes" : "No") . "<br>";
echo "File Size: " . filesize($filename) . " bytes<br>";
echo "File Type: " . filetype($filename) . "<br>";
echo "Last Access Time: " . date("d-m-Y H:i:s", fileatime($filename)) . "<br>";
echo "Last Modified Time: " . date("d-m-Y H:i:s", filemtime($filename)) . "<br>";
echo "Creation Time: " . date("d-m-Y H:i:s", filectime($filename)) . "<br>";
echo "Permissions: " . fileperms($filename) . "<br>";
echo "Owner: " . fileowner($filename) . "<br>";
echo "Group: " . filegroup($filename) . "<br>";
echo "Inode: " . fileinode($filename) . "<br>";


echo "<h2>3. File & Folder Management</h2>";

// copy
copy($filename, "copy.txt");
echo "File copied.<br>";

// rename
rename("copy.txt", "renamed.txt");
echo "File renamed.<br>";

// create folder
if (!is_dir($folder)) {
    mkdir($folder);
    echo "Folder created.<br>";
}

// check type
echo "Is demo.txt a file? " . (is_file($filename) ? "Yes" : "No") . "<br>";
echo "Is testFolder a directory? " . (is_dir($folder) ? "Yes" : "No") . "<br>";

// delete file
unlink("renamed.txt");
echo "File deleted.<br>";

// remove folder
rmdir($folder);
echo "Folder removed.<br>";



echo "<h2>4. Directory Handling</h2>";

echo "<b>Using scandir():</b><br>";
print_r(scandir("."));

echo "<br><b>Using opendir() / readdir():</b><br>";
$dir = opendir(".");
while (($file = readdir($dir)) !== false) {
    echo $file . "<br>";
}
closedir($dir);

echo "<br>Current Working Directory: " . getcwd() . "<br>";

echo "Changing directory (demo only)...<br>";
chdir(".");
echo "Now Current Directory: " . getcwd() . "<br>";



echo "<h2>5. File Locking</h2>";

$file = fopen($filename, "r+");
if (flock($file, LOCK_EX)) {
    fwrite($file, "Locked writing example\n");
    flock($file, LOCK_UN);
    echo "File locked, written, and unlocked successfully.<br>";
}
fclose($file);


echo "<h2>6. File Modes Demonstration</h2>";

$modes = ["r", "w", "a", "x", "r+", "w+", "a+", "x+"];

foreach ($modes as $mode) {

    echo "<b>Testing Mode: $mode</b><br>";
    $testFile = "mode_test.txt";

    if ($mode == "x" || $mode == "x+") {
        if (file_exists($testFile)) {
            unlink($testFile);
        }
    }

    $handle = @fopen($testFile, $mode);

    if ($handle) {
        fwrite($handle, "Testing mode $mode\n");
        fclose($handle);
        echo "Mode $mode executed successfully.<br><br>";
    } else {
        echo "Mode $mode failed.<br><br>";
    }
}

echo "<hr><h3>All Demonstrations Completed Successfully!</h3>";
?>

