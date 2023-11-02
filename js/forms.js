
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