$(document).ready(function () {
    $('form').submit(function (event) {
        event.preventDefault();
        var formData = {
            username: $("#username").val(),
            message: $("#message").val(),
        };

        $.ajax({
            type: "POST",
            url: "publish",
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            console.log(data);
        });

    });
});
