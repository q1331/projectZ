var prev = $("a.active");
$(Document).ready(function () {
    $(".nav-pills a").click(function () {
        $(prev).css({"color": "coral", "background-color": "white"});
        $(this).css({"background-color": "coral", "color":"white"});
        prev = this;
    })
});