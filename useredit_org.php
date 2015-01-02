<?php

include("config.php");

// are we the rsult of a Submit click then try to login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and comment sent from Form 
  $myusername=$_POST['username']; 
  $mycomment=$_POST['comment']; 

  $sql="UPDATE users SET comment = '$mycomment' WHERE username = '$myusername'";
  $result=mysql_query($sql);

  // If result matched $myusername and $mypassword, table row must be 1 row
  if ($result === TRUE) {
    header("location: users.php");
  }
  else 
  {
    $error="SQL Error";
  }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Useredit Page</title>

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
<label>Comment:</label><input type="text" name="comment" /><br/><br />
<input type="submit" value=" Edit "/><br />

</form>
<div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
</div>
</div>
</div>

</body>
</html>
