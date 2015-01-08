<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
$ip_check=$_SESSION['ipaddress'];
$ses_sql = $bd->query("select username from users where username='$user_check' ");
$row=$ses_sql->fetch_array(MYSQLI_ASSOC);
$login_session=$row['username'];

if(!isset($login_session)) {
  header("Location: login.php");
}
if ( $ip_check !== $_SERVER['REMOTE_ADDR'] ) {
  header("Location: login.php");
}
?>
