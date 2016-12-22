<?php
	session_start();
	$me=$_SESSION['user'];
	$my_id=$_SESSION['user_id'];
	include("connect.php");
	$ext=$_POST['ext'];
	
	
	// $ext = preg_replace('/\s+/', ' ', $ext);
	// if($ext==" "){
	// 	$ext = preg_replace('/\s+/', '', $ext);
	// }
	if($ext!=null ){
		$qu=mysql_query("INSERT INTO user_comments (user_id,status) VALUES ('$my_id', '$ext') ");
	}
	
	echo "success!";
	
?>