<?php
include('config.php');
$ses_sql = $bd->query("select username from users");
$row=$ses_sql->fetch_array(MYSQLI_ASSOC);
$login_session=$row['username'];

?>
