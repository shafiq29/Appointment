<?php
$host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'login_user.php';
session_start();
include('connect.php');
if(isset($_POST['reg'])){
	if(!empty($_POST['un']) && !empty($_POST['pa']) && !empty($_POST['ema']) ){
		$uname=$_POST['un'];
		$email=$_POST['ema'];
		$pass=md5($_POST['pa']);
		//checking if previous
		$test=mysql_query("SELECT email from persons where email='$email'");

		if(mysql_num_rows($test)>0){
			echo "This email has already been registered! Try a new one... ";
		}
		else{
			$number=mysql_num_rows(mysql_query("SELECT name from persons"));
			$number=$number+1;
			$coln="user_"."$number";

			$ins=mysql_query("INSERT into persons (name,pass,email) values('$uname','$pass','$email')");
			if($ins){
				$addgraph=mysql_query("ALTER TABLE `frnd_graph` ADD `$coln` VARCHAR( 255 ) DEFAULT '0'");
				$addgraph=mysql_query("ALTER TABLE `noti_frnd_req` ADD `$coln` VARCHAR( 255 ) DEFAULT '0'");
				$addgraph=mysql_query("ALTER TABLE `noti_new_mes` ADD `$coln` VARCHAR( 255 ) DEFAULT '0'");
				$addgraph=mysql_query("ALTER TABLE `noti_new_post` ADD `$coln` VARCHAR( 255 ) DEFAULT '0'");
				$addrow=mysql_query("INSERT into frnd_graph (id) values('0')");
				$addrow=mysql_query("INSERT into noti_frnd_req (id) values('0')");
				$addrow=mysql_query("INSERT into noti_new_mes (id) values('0')");
				$addrow=mysql_query("INSERT into noti_new_post (id) values('0')");
				mysql_query("INSERT into images (img_path,img_path_two) values('img_icon/blank_pic.jpg','img_icon/blank_pic2.jpg')");
			if($ins){
				$_SESSION['reg']=$uname;

        echo $host;
        echo $uri;
        header("Location: http://$host$uri/$extra");
				//header("Location: login_user.php");
			}

			}
			else{
				echo "The username already exists...Enter differnt!";
			}
			mysql_close();
		}


	}
}
?>
