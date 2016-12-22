<?php
include("connect.php");
	$te="";
	
	$res=mysql_query("SELECT persons.name, images.*, user_comments.*
FROM persons
inner join user_comments
on user_comments.user_id=persons.id
inner join images
on user_comments.user_id=images.id order by user_comments.id desc");
	
	while ($row=mysql_fetch_array($res)) {
		$rp=$row['img_path'];
		$te.="<img src=$rp height='40' width='40'>"."<strong>".$row['name'].": </strong><br>".$row['status']."<p style='color:green'>Time: ".$row['dt']."</p><hr>";
	}





	$la = array(">:D", ":-D", ":D");
			$cry = array(":;(");
			$vex = array(":P");
			$surp = array(":o",":O");
			$sad = array(":(");
			$ang = array(":@");
			$kiss = array(":*");
			$dev = array("3:)");
			$wink = array(";)");
			$cool = array("B)");
			$ns = array(":)");

			$las = "<img src='emo/emotion_grin.png' height=30 width=30>";
			$crys = "<img src='emo/emotion_too_sad.png' height=30 width=30>";
			$vexs = "<img src='emo/emotion_tongue.png' height=30 width=30>";
			$surps = "<img src='emo/emotion_suprised.png' height=30 width=30>";
			$sads = "<img src='emo/emotion_sad.png' height=30 width=30>";
			$angs = "<img src='emo/emotion_mad.png' height=30 width=30>";
			$kisss = "<img src='emo/emotion_kiss.png' height=30 width=30>";
			$devs = "<img src='emo/emotion_devil.png' height=30 width=30>";
			$winks = "<img src='emo/emotion_wink.png' height=30 width=30>";
			$cools = "<img src='emo/emotion_cool.png' height=30 width=30>";
			$nss = "<img src='emo/emotion_bigsmile.png' height=30 width=30>";
			
			$te = str_replace($la,$las,$te);
			$te = str_replace($cry,$crys,$te);
			$te = str_replace($vex,$vexs,$te);
			$te = str_replace($surp,$surps,$te);
			$te = str_replace($sad,$sads,$te);
			$te = str_replace($ang,$angs,$te);
			$te = str_replace($wink,$winks,$te);
			$te = str_replace($kiss,$kisss,$te);
			$te = str_replace($dev,$devs,$te);
			$te = str_replace($cool,$cools,$te);
			$te = str_replace($ns,$nss,$te);
	
	echo $te;
?>