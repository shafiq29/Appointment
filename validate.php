<?php
  class  Validator{
    function checkLogin($u,$p){
      include("connect.php");
      $enc=md5($p);
      $check_exist="SELECT name,id from persons where email='$u' && pass='$enc'";
      //taking unique id...
      $fetch_id=mysql_query($check_exist);
      $uid_toosee=mysql_fetch_array($fetch_id);
      $user_id=$uid_toosee['id'];
      //creating session...
      if(mysql_num_rows(mysql_query($check_exist,$con))>0){
        session_start();
        $_SESSION['user']=$uid_toosee['name'];
        $_SESSION['user_id']=$user_id;
        mysql_query("UPDATE persons SET state=1 WHERE id='$user_id'",$con);
       // mysql_query("UPDATE persons SET noti_onl=1 WHERE id='$user_id'",$con);
        header("Location: index.php");
      }
      else{
       	echo "Incorrect username or password...";
        //echo $enc;
       }
    mysql_close();

    }
  }
?>