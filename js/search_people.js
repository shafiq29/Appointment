$(document).ready(function() {
    $.post("show_req.php", "", function(e) {
        if (e != "null") {
            $(".requests").html(e)
        }
    });
    $("#tt").focus();
    $("#tt").keyup(function() {
        $('.loader').css("visibility","visible");  
        var e = $("#tt").val();
        if(e==''){
            $('.loader').css("visibility","hidden");  
        }
       
        post_data = {
            info: e
        };
        $.post("search.php", post_data, function(e) {
            $(".loader").html(e)
        })
    });
    $(document).on("click", ".makefrnd", function() {
        user_id = {
            uid: this.id
        };
        $.post("frnd_req.php", user_id, function(e) {
            $(".loader").html(e)
        })
    });
    $(document).on("click", ".accfrnd", function() {
        reci_id = {
            uid: this.id
        };
        $.post("reci_req.php", reci_id, function(e) {
            $(".requests").html(e)

        })
    })

      $(document).on("click", ".unf", function() {
        reci_id = {
            uid: this.id
        };
        $.post("unfriend.php", reci_id, function(e) {
            $(".loader").html(e)

        })
    })
})