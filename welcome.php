<?php

include('lock.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome</title>
</head>

<body>
Welcome to HansBooks, user <?php echo $login_session; ?>

<UL>
<LI><A href=l1.php>Transactions</A>
<LI><A href=l2.php>Books</A>
<LI><A href=l3.php>To Do</A>
<LI><A href=listdir.php>List Files</A>
</UL>
<a href=userquery.php>Find a user</a> or <a href=users.php>Userlist</a> or <a href=uploadform.php>Upload a File</a> or
<a href=logout.php>Sign Out</a>
</body>
</html>
