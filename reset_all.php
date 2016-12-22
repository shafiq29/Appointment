<?php
include('connect.php');

			mysql_query("TRUNCATE TABLE `persons` ");
			mysql_query("ALTER TABLE `persons` AUTO_INCREMENT = 1");

			mysql_query("TRUNCATE TABLE `frnd_graph` ");
			$res_4=mysql_query("ALTER TABLE `frnd_graph` AUTO_INCREMENT = 1");

			mysql_query("TRUNCATE TABLE `images` ");
			$res_2=mysql_query("ALTER TABLE `images` AUTO_INCREMENT = 1");

			mysql_query("TRUNCATE TABLE `message` ");
			$res_4=mysql_query("ALTER TABLE `message` AUTO_INCREMENT = 1");
			
?>
