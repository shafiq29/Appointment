<?php
include("connect.php");
session_start();
//saving the username...and id...
$un=$_SESSION['user'];
$uid=$_SESSION['user_id'];
//track id for div...
$var=1;
//the appropriate query from three tables...
$q=mysql_query("SELECT persons.name, frnd_graph.*,images.*
FROM persons
INNER JOIN frnd_graph
ON frnd_graph.id=persons.id
inner join images
on frnd_graph.id=images.id");

$friendlist="";

while ($res= mysql_fetch_array($q)){
	$col="user_".$uid;
	if($res[$col]=="1"){
		$na=$res['name'];
		$im=$res['img_path'];
		$friendlist.="<div class='decor' id='$var'><img src='$im' height='40' width='40'> <strong>".$na."</strong></div>";
	}
	$var=$var+1;	//track of id of design...
}
if($friendlist==""){
echo "Currently no friends...";
}
else{
echo $friendlist;	
}

?>