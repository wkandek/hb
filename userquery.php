<?php

include("lock.php");

// are we the result of a Submit click then try to login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // username sent from Form 
  $myusername=$_POST['username']; 

// prepared stmt follwos
/* 
  $sql="SELECT id, username, comment FROM users WHERE username = ?";
  $stmt = $bd->prepare( $sql );
  if ( $stmt->bind_param( "s", $myusername )) {
    $stmt->execute();
    $stmt->bind_result($id,$un,$co);
    echo "<TABLE border=1>";
    while ( $stmt->fetch()) {
      echo "<TR><TD>".$id."</TD><TD>".$un."</TD><TD>".$co."</TD></TR>";
    }
  }
  echo "</TABLE>";
*/

// normal SQL follows has SQL injection wkandek' or 'a'='a
  $sql="SELECT id, username, comment FROM users WHERE username = '$myusername'";
  echo $sql;
  echo "<TABLE border=1>";
  $result = $bd->query($sql);
  while ( $row = $result->fetch_array(MYSQLI_ASSOC)) {
    // output encoding example
    //$myid = mb_convert_encoding( $row["id"], 'UTF-8', 'UTF-8' );
    //$myid = htmlentities( $myid, ENT_QUOTES, 'UTF-8' );
    //$myname = mb_convert_encoding( $row["username"], 'UTF-8', 'UTF-8' );
    //$myname = htmlentities( $myname, ENT_QUOTES, 'UTF-8' );
    //$mycomment = mb_convert_encoding( $row["comment"], 'UTF-8', 'UTF-8' );
    //$mycomment = htmlentities( $mycomment, ENT_QUOTES, 'UTF-8' );
//    echo "<TR><TD>".$myid."</TD><TD>".$myname."</TD><TD>".$mycomment."</TD></TR>";
   echo "<TR><TD>".$row["id"]."</TD><TD>".$row["username"]."</TD><TD>".$row["comment"]."</TD></TR>";
  }
  echo "</TABLE>";

  echo "<a href=welcome.php>Back</a> or";
  echo "<a href=logout.php>Sign Out</a>";
  echo "</body>";
  echo "</html>";
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Userquery Page</title>

<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;

}
label
{
font-weight:bold;

width:100px;
font-size:14px;

}
</style>
</head>
<body bgcolor="#FFFFFF">

<div align="center">
<div style="width:300px; border: solid 1px #333333; " align="left">
<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Useredit</b></div>


<div style="margin:30px">

<form action="" method="post">
<label>UserName:</label><input type="text" name="username" /><br /><br />
<input type="submit" value=" Find "/><br />

</form>
<div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
</div>
</div>
</div>

</body>
</html>
