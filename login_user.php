<?php
session_start();
$uname="";
if(isset($_SESSION['reg'])){
$uname=$_SESSION['reg'];
}

?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link type="text/css" rel="stylesheet" href="css/others.css"/>
		<script type="text/javascript" src="js/update.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#typing').focus();
			});
		</script>
	</head>
	<body>
	<div class="login_form">
		<?php if(!empty($uname)){echo "Username registered as $uname , please login to continue.."; unset($_SESSION['reg']);}?>
	<img src="img_icon/logo.png" height"300" width="400">
	<form action="check_log.php" method="post">
	<table>
		<tr>
			<td>
				 <input type="text" size="51"  name="ema" id="typing" placeholder=" email" /><br>
			</td>
		</tr>
		<tr>
			<td>
			 <input type="password" size="51" name="pa" placeholder=" password" /><br>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" value="Login"/>

			</td></tr>
	</table>
	<a href="signup_user.php">No account ? Click to signup!</a>
	</form>
</div>
<br>
	<div class="footer">Copyright &copy 2014 SHAFIQUL ISLAM, BRAC University. All rights reserved.</div>
	</body>
</html>








