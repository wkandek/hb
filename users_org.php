<?php

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
  $sql="SELECT id, username, comment FROM users ORDER BY id DESC LIMIT 20";
  $result=mysql_query($sql);
  echo "<TABLE border=1>";
  while ( $row=mysql_fetch_array($result)) {
    // output encoding example
    $myid = mb_convert_encoding( $row["id"], 'UTF-8', 'UTF-8' );
    $myid = htmlentities( $myid, ENT_QUOTES, 'UTF-8' );
    $myname = mb_convert_encoding( $row["username"], 'UTF-8', 'UTF-8' );
    $myname = htmlentities( $myname, ENT_QUOTES, 'UTF-8' );
    $mycomment = mb_convert_encoding( $row["comment"], 'UTF-8', 'UTF-8' );
    $mycomment = htmlentities( $mycomment, ENT_QUOTES, 'UTF-8' );
//    echo "<TR><TD>".$myid."</TD><TD>".$myname."</TD><TD>".$mycomment."</TD></TR>";
    echo "<TR><TD>".$row["id"]."</TD><TD>".$row["username"]."</TD><TD>".$row["comment"]."</TD></TR>";
  }
  echo "</TABLE>";
?>
<a href="useredit.php">Edit One</a> or
<a href="welcome.php">Back</a> or
<a href="logout.php">Sign Out</a>
</body>
</html>
