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
<LI><A href=l1.html>Link 1</A>
<LI><A href=l2.html>Link 2</A>
<LI><A href=l3.html>Link 3</A>
</UL>
<a href=users.php>Userlist</a> or <a href="logout.php">Sign Out</a>
</body>
</html>
