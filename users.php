<?php

include('config.php');
include('lock.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Users</title>
</head>
<body>
<h3>Userlist</h3>
<?php
  $sql="SELECT id, username FROM users ORDER BY id DESC LIMIT 20";
  $result=mysql_query($sql);
  echo "<TABLE>";
  while ( $row=mysql_fetch_array($result)) {
    echo "<TR><TD>".$row["id"]."</TD><TD>".$row["username"]."</TD></TR>";
  }
  echo "</TABLE>";
?>
<a href="welcome.php">Back</a> or
<a href="logout.php">Sign Out</a>
</body>
</html>
