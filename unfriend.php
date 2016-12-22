<?php
	include("connect.php");
	session_start();
	$who=$_POST['uid'];
	$me=$_SESSION['user_id'];
	$col_me="user_".$me;
	$col_who="user_".$who;
	
	//maintaining I sent to whom, to check frnd req sent...
	$q=mysql_query("UPDATE frnd_graph SET $col_me=0 WHERE id='$who'",$con);

	
	//maintaining who recieved frnd req from me...
	
	mysql_query("UPDATE frnd_graph SET $col_who=0 WHERE id='$me' ",$con);
	echo 'You removed a friend ...';	
?>