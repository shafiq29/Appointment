<?php
	include("connect.php");
	session_start();
	$un=$_SESSION['user'];
	$uid=$_SESSION['user_id'];

	$qu=mysql_query("SELECT name,id FROM persons WHERE state='1' ",$con);
	$onl="";
	$count=0;
	if(mysql_num_rows($qu)>0){
		while($res=mysql_fetch_array($qu)){
		$uni=$res['id'];
		$qu2=mysql_query("SELECT img_path FROM images WHERE id='$uni'",$con);
		$path=mysql_fetch_array($qu2);
		$path_real=$path['img_path'];

		//checking frnd or not....
		$col="user_".$uid;
		$q=mysql_query("SELECT  $col from frnd_graph where id='$uni'");
		$chkfrnd=mysql_fetch_array($q);
		$chkfrnd_ornot=$chkfrnd[$col];

		if($res['id']!=$uid && $chkfrnd_ornot==1 ){
			$onl.="<div class='decor' id='$uni'><img src='$path_real' height='40' width='40'>".$res['name']."</div>";
			$count=$count+1;
		}
		
	}
	 
	echo json_encode(array("a" => "$onl", "b" => "$count"));
	// mysql_query("UPDATE persons SET noti_onl=0 WHERE id='$uni'",$con);
	}
	else{
		echo json_encode(array("a" => "", "b" => "0"));
	}
	
?>