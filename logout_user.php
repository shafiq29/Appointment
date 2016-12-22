<?php
	session_start();
	$uid=$_SESSION['user_id'];
	include("connect.php");
	mysql_query("UPDATE persons SET state=0 WHERE id='$uid'",$con);
	unset($_SESSION['user']);
	unset($_SESSION['user_id']);
	header("Location: login_user.php");
?>