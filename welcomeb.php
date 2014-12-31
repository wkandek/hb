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
Welcome <?php echo $login_session; ?>

<UL>
<LI><A href=l1b.html>Link 1</A>
<LI><A href=l2b.html>Link 2</A>
<LI><A href=l3b.html>Link 3</A>
</UL>
<a href=userqueryb.php>Find a user</a> or <a href=usersb.php>Userlist</a> or <a href="logoutb.php">Sign Out</a>
</body>
</html>
