<?php
$dir    = '/var/www/html/uploads/';
$files = scandir($dir);

echo "<h3>HansBooks Uploaded Files</h3>";
foreach ($files as &$value) {
    echo "<a href=uploads/".$value.">".$value."</a><br>";
}
echo "<br><a href=welcome.php>Back</a>";
?>

