$(document).ready(function() {
    function e() {
        $.getJSON("check_onl.php", function(e) {
            $("#box_mid_in").html(e.a);
            $(".num").html("Online Now (" + e.b + ")")
        });
        return poll();
        return t();
       
    }

    function t() {
        $.getJSON("my_notice.php", "", function(e) {
            if (e.update == true) {
                //alert(count);
                count++;
               // $(".notifier").load('load_notice.php');
                $(".requests").load("show_req.php")
                $('.info_mes').fadeIn( "slow", function() {
    // Animation complete
  });
                $('.inner_noti').load('load_notice.php');
            }
        })
    }
    count = 0;
    $(setInterval(function() {
        return e()
    }, 5e3))
})