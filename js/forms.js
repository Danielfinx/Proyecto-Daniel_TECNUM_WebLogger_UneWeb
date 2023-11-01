$(document).ready(function () {
    $("#chart-add1").click(function () {
        $("#form_1").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('slow', function () {
                    $(this).css("display", "none");
                });
            } else {
                $(this).fadeIn('slow', function () {
                    $(this).css("display", "block");
                });
            }
        });
    });
});