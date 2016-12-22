<?php
include("connect.php");
session_start();
$u=$_SESSION['user'];
$uid=$_SESSION['user_id'];

$dat="";
$nn=$_POST['info']; //name that is being searched...

if($nn!=null && !empty($nn)){
	$info="<table border='1'>";
	$dat=mysql_query("SELECT * FROM persons WHERE name LIKE '%$nn%'");
	if(mysql_num_rows($dat)>0){
		while($row=mysql_fetch_array($dat)){

			//checking is already friendship status...
			$iden=$row['id'];
			$col="user_".$uid;
			$check=mysql_query("SELECT $col FROM frnd_graph WHERE id='$iden' ");
			$check_res=mysql_fetch_array($check);

			//fetching image...
			$imgq=mysql_query("SELECT img_path FROM images WHERE id='$iden' ");
			$imgp=mysql_fetch_array($imgq);
			$pro=$imgp['img_path'];

			if($uid!=$iden){
				if($check_res[$col]==0){
					$info.=	"<tr><td><img src='$pro' height='40' width='40'>".$row['name']." <button class='makefrnd' id='$iden'>Add Freind</button></tr></td> ";
				}
				else if($check_res[$col]==1){
					$info.=	"<tr><td><img src='$pro' height='40' width='40'>".$row['name']." <button  id='$iden'>Friends</button><button class='unf' id='$iden'>Unfriend?</button></tr></td> ";
				}
				else if($check_res[$col]==6){
					$info.=	"<tr><td><img src='$pro' height='40' width='40'>".$row['name']." <button  id='$iden'>Friend Request Sent</button></tr></td> ";
				}	
				else if($check_res[$col]==7){
					$info.=	"<tr><td><img src='$pro' height='40' width='40'>".$row['name']." <button class='accfrnd' id='$iden'>Respond to Request!</button></tr></td> ";
				}
			}

		}
	$info.="</table>";
	if($info=="<table border='1'></table>"){
		echo "No such person in community...";
	}
	else{
		echo $info;
	}
	
	}
	else{
		echo "No such person in community...";
	}
	
}
	

?>

