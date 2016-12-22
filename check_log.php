<?php
	include("validate.php");
	$email="";
	$pass="";
	if(!empty($_POST['ema'])&&!empty($_POST['pa'])){
		$email=$_POST['ema'];
		$pass=$_POST['pa'];
		$checker= new Validator;
		$checker->checkLogin($email,$pass);
	}
	else{
		echo "Empty username or password!";
	}
?>