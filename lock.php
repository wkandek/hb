<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql = $bd->query("select username from users where username='$user_check' ");
$row=$ses_sql->fetch_array(MYSQLI_ASSOC);
$login_session=$row['username'];

if(!isset($login_session)) {
  header("Location: loginp.php");
}
?>
