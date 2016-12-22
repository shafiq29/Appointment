<?php
include('connect.php');
session_start();
if(!isset($_SESSION['user'])){
header("Location: login_user.php");


}
$usid=$_SESSION['user_id'];
$prof_que=mysql_query("SELECT img_path_two FROM images where id='$usid' ",$con);
      $prof_path= mysql_fetch_array($prof_que);
      $rpp=$prof_path['img_path_two'];

?>
<html >
  <head >
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="css/design.css"/>
    <link type="text/css" rel="stylesheet" href="css/decoration.css"/>
    <script type="text/javascript" src="js/update.js"></script>
    <script type="text/javascript" src="js/chatbox.js"></script>
    <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript" src="js/send_mes.js"></script>
    <script type="text/javascript" src="js/search_people.js"></script>
    <script type="text/javascript" src="js/monitor_all.js"></script>
    <script type="text/javascript" >
    function see() {
        $("#box_mid").hide();
        $.getJSON("check_onl.php", function(e) {

            $("#box_mid_in").html(e.a);
            $(".num").html("Online Now (" + e.b + ")")
        })

       $(".inner_noti").load('load_notice.php');
    }
    function poll() {
        $(".show_status_up").load('retrieve_status.php');
       

    }
      $(document).ready(function() {
          $(document).on("click", "#close_noti", function() {
            $('.info_mes').fadeOut( "slow", function() {
             });
          });
          $(document).on("click", ".see_note", function() {
            $('.info_mes').fadeIn( "slow", function() {
             });
          });

        $(document).on("click", ".frnd_who", function() {
             $('.loader').css("visibility","visible");  
            $(".loader").load("frnd_list.php")
        });
        $(document).on("click", ".post_status", function() {

          if ($('.status_up').html().trim()) {
            var status=$('.status_up').html();


            $('.status_up').empty();
            ext = {
            ext: status
            };
             $.post("ins_status.php", ext, function(t) {
                    poll();
              });
            } else {
              
            }
            
        });
        $(document).on("click", ".decor", function() {
            open_chat(this.id, this.innerHTML)
        });
        $(document).on("click", ".cro", function() {
            var e = arr.indexOf(this.id);
            if (e != -1) {
                arr.splice(e, 1)
            }
            $(".rem" + this.id).parent("div#box").remove();
            old = this.id * 100 + 3
        });
        var e = 0;
        $(document).on("click", ".holder", function() {
            $("#box_mid").slideToggle();
            if (e == 0) {
                e = 1;
                   $(".holder").css("background-image", "url(img_icon/comments_delete.png)")
                
            } else {
                e = 0;
             $(".holder").css("background-image", "url(img_icon/comments_add.png)")
            }
        })
      })  
    </script>
  </head>
  <body  onload="see(), poll()">

<div class="info_mes"><p style="color:white; display :inline;">NOTIFICATIONS:</p><a id="close_noti" href="#"></a><div class="inner_noti"></div></div>


<div id="main">
      <div id="top">
        <div class="pro_ima"><img src='<?php echo $rpp;?>' ></div> Welcome <?php echo $_SESSION['user']; ?> !
      </div>
      <div id="leftme">
        <ul>
          <li>
             <a href="index.php">Home </a>
          </li>
          <li>
            <a href="#" class="frnd_who">Friend List</a>
          </li>
          <li>
            <a href="update_pro.php">Change Profile Picture</a>
          </li>
          <li>
            <a href="logout_user.php">Logout </a> 
          </li>
           <li>
            <a href="#" class="see_note">My Notifications </a> 
          </li>
        </ul>
        <input type="text" id="tt" name="tt" placeholder="Search people..."/>
        <div class="loader"></div>
    <div class="requests"></div>
        
      </div>
      <div id="rightme">
       

         <div class="hold_post"><div class="status_up" contenteditable="true" data-placeholder="Say something ...?"> </div>
        <button class="post_status">Post Status</button></div>
        
          <div class="show_status_up"></div>

      </div>

        

      </div>

    </div>
    
    <div id="box" >
      <div id="box_top"><div class="num">Online Now (0)</div>
        
        <div class="holder">
        </div>

      </div> 
      
      <div id="box_mid" >

        <div id="box_mid_in" class="box_mid">
        </div>

      </div>
    
    </div>

  </body>
</html>