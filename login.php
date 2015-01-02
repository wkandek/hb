<?php

include("config.php");

// make sure cookie are for HTTPOnly and Secure
// $cp = session_get_cookie_params();
// session_set_cookie_params( $cp["lifetime"], $cp["path"], $cp["domain"], true, true );
session_start();

// are we the rsult of a Submit click then try to login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from Form 
  $myusername=$_POST['username']; 
  //$myusername=addslashes($_POST['username']); 
  $mypassword=addslashes($_POST['password']); 

  $sql = "SELECT id FROM users WHERE username= ? and password = PASSWORD( ? )";
  $stmt = $bd->prepare( $sql );
  if ( $stmt->bind_param( "ss", $myusername, $mypassword )) {
    $stmt->execute();
    $stmt->store_result();
    $count = $stmt->num_rows;
    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($count >= 1) {
      session_register("myusername");
      $_SESSION['login_user']=$myusername;

      header("location: welcome.php");
    }
    else 
    {
      $error="Your Login Name or Password is invalid $count";
    }
  }
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Page</title>

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
<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>


<div style="margin:30px">

<form action="" method="post">
<label>UserName:</label><input type="text" name="username" /><br /><br />
<label>Password:</label><input type="password" name="password" /><br/><br />
<input type="submit" value=" Submit "/><br />

</form>
<div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
You can register <a href=register.php>here</a> if needed.<br>
</div>
</div>
</div>

</body>
</html>
