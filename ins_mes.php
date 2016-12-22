<?php
	session_start();
	$me=$_SESSION['user'];
	include("connect.php");

	$ext=$_POST['who'];
	$text=$_POST['message'];
	//$ext=1;
	$q=mysql_query("SELECT * FROM persons where id=$ext ",$con);
	$res=mysql_fetch_array($q);
	$tod= $res['name'];
	$text = preg_replace('/\s+/', ' ', $text);

	if($text==" "){
		$text = preg_replace('/\s+/', '', $text);
	}
	
	if($text!=null ){
		$qu=mysql_query("INSERT INTO message (fr, tom, mes) VALUES ('$me', '$tod', '$text') ");
	}
	
	echo "success!";
	
?>