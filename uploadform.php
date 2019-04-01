<?php

include('lock.php');

?>
<!DOCTYPE html>
<html>
<title>HansBooks File Upload</title>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <input type="submit" value="Upload File" name="submit">
</form>

</body>
</html>
