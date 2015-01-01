<?php

include("config.php");

// are we the rsult of a Submit click then try to login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $mytest=addslashes($_POST['test']); 
  if ( $mytest == "9" ) {
    $sql="DROP TABLE IF EXISTS users";
    $result=mysql_query($sql);
    if ( $result === TRUE ) {
      $sql="CREATE TABLE users (ID MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR(60), password VARCHAR(60), comment VARCHAR(60))";
      $result=mysql_query($sql);
      $sql="INSERT INTO users (username, password) VALUES( 'qscanner', Password('qscanner'))";
      $result=mysql_query($sql);
    }
    else 
    {
      $error="SQL Error";
    }
  }
  else 
  {
    $error="Not Human?";
  }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CDB Page</title>

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
<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Drop and Recreate DB</b></div>


<div style="margin:30px">

<form action="" method="post">
<label>Result of 4 + 5</label><input type="text" name="test" /><br/><br />
<input type="submit" value=" Submit "/><br />

</form>
<div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
</div>
</div>
</div>

</body>
</html>
