<?php
	include("connect.php");
	session_start();
	$who=$_POST['uid'];
	$me=$_SESSION['user_id'];
	$col_me="user_".$me;
	$col_who="user_".$who;
	
	//maintaining I sent to whom, to check frnd req sent...
	$q=mysql_query("UPDATE frnd_graph SET $col_me=6 WHERE id='$who'",$con);
	mysql_query("UPDATE noti_frnd_req SET $col_me=6 WHERE id='$who'",$con);
	
	//maintaining who recieved frnd req from me...
	
	mysql_query("UPDATE frnd_graph SET $col_who=7 WHERE id='$me' ",$con);
	mysql_query("UPDATE noti_frnd_req SET $col_who=7 WHERE id='$me' ",$con);
	
	echo 'Freind request sent !';	
	
?>