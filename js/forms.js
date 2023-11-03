
$(document).ready(function () {
    $("#chart-add").click(function () {
        $("#insert_form").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            } else {
                $(this).delay(150).fadeIn('fast', function () {
                    $(this).css("display", "block");
                    window.scrollTo(0, document.body.scrollHeight);
                });
            }
        });

        $("#delete_form").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            }
        });

        $("#modify_form").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            }
        });
    });
});

$(document).ready(function () {
    $("#chart-delete").click(function () {
        $("#delete_form").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            } else {
                $(this).delay(150).fadeIn('fast', function () {
                    $(this).css("display", "block");
                    window.scrollTo(0, document.body.scrollHeight);
                });
            }
        });

        $("#insert_form").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            }
        });

        $("#modify_form").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            }
        });
    });
});

$(document).ready(function () {
    $("#chart-modify").click(function () {
        $("#modify_form").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            } else {
                $(this).delay(150).fadeIn('fast', function () {
                    $(this).css("display", "block");
                    window.scrollTo(0, document.body.scrollHeight);
                });
            }
        });

        $("#insert_form").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            }
        });

        $("#delete_form").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            }
        });
    });
});

if (($("#insert_form").css("display") == "block") 
|| ($("#delete_form").css("display") == "block") 
|| ($("#modify_form").css("display") == "block")) {
    window.scrollTo(0, document.body.scrollHeight);
}