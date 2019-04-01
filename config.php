<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "hansbooks";
$mysql_database = "hb";

$bd = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database ) or die("Oops some thing went wrong");

?>
