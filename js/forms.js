
$(document).ready(function () {
    $("#chart-add").click(function () {
        $("#form_1").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            } else {
                $(this).delay(150).fadeIn('fast', function () {
                    $(this).css("display", "block");
                });
            }
        });

        $("#form_2").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            }
        });

        $("#form_3").each(function () {
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
        $("#form_2").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            } else {
                $(this).delay(150).fadeIn('fast', function () {
                    $(this).css("display", "block");
                });
            }
        });

        $("#form_1").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            }
        });

        $("#form_3").each(function () {
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
        $("#form_3").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            } else {
                $(this).delay(150).fadeIn('fast', function () {
                    $(this).css("display", "block");
                });
            }
        });

        $("#form_1").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            }
        });

        $("#form_2").each(function () {
            displaying = $(this).css("display");
            if (displaying == "block") {
                $(this).fadeOut('fast', function () {
                    $(this).css("display", "none");
                });
            }
        });
    });
});