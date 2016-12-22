<?php
include("connect.php");
session_start();
$u=$_SESSION['user'];
$uid=$_SESSION['user_id'];

$note="";

$dat=mysql_query("SELECT * from all_noti where track=$uid order by id desc");
if(mysql_num_rows($dat)>0){
	while($row=mysql_fetch_array($dat)){
		$note.="<hr>".$row['notice'];
	}
}
echo $note;
?>

