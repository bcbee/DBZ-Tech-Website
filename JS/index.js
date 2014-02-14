//JavaScript Document
$(window).scroll(function() {
    var scrollpos = $("body").scrollTop();
    if (scrollpos > 400) {
        $(".header").show();
    } else {
        $(".header").hide();
    }
});