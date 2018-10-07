$(document).ready(function () {

    $('#messageForm').submit(function (e) {

        e.preventDefault();

        $.ajax({

            type: "GET",
            url: "message/",
            data: $("#messageForm").serialize(),
            success: function (data) {
                window.alert(data);
            }
        })
    });
});