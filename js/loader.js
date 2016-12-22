$(document).ready(function() {
    function e() {
        for (var e = 0; e < arr.length; e++) {
            t(arr[e])
        }
    }

    function t(e) {
        ext = {
            ext: e
        };
        $.post("givemes.php", ext, function(t) {
            if (t != null) {
                var n = $("." + e).find("#box_mid_in");
                n.html(t);
                if (n[0] == undefined) {
                    return
                } else {
                    n.scrollTop(n[0].scrollHeight);
                    return
                }
            } else {
                return
            }
        });
        return
    }
    $(setInterval(function() {
        return e()
    }, 1e3))
})