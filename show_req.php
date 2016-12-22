<?php
session_start();
$u=$_SESSION['user'];
$me=$_SESSION['user_id'];
$col="user_".$me;
$dat="";
include("connect.php");
$info="";
$dat=mysql_query("SELECT id FROM frnd_graph WHERE $col='7'");
if(mysql_num_rows($dat)>0){
	$info.="<p>Pending requests...</><table border='1'>";
	while($row=mysql_fetch_array($dat)){
		$iden=$row['id'];
		$dat2=mysql_query("SELECT name FROM persons WHERE id='$iden'");
		$row2=mysql_fetch_array($dat2);

		$im=mysql_query("SELECT img_path FROM images where id=$iden ",$con);
			$pa= mysql_fetch_array($im);
			$pro=$pa['img_path'];
		
			$info.=	"<tr><td><img src='$pro' height='40' width='40'>".$row2['name']." <button class='accfrnd' id='$iden'>Accept</button></tr></td> ";
		
	}
$info.="</table>";
}
	

echo $info;
?>

