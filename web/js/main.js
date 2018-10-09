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

    $('#movieName').keyup(function () {
        var input, filter, table, tr, td, i;
        input = document.getElementById("movieName");
        filter = input.value.toUpperCase();
        table = document.getElementById("movie_list");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    });

});

function linkckicked(link) {
    if(link == '%23') {
        console.log('done');
        return;
    }
    $.post('clicks',
        {
            url: link
        },
        function (data, status) {
               console.log(data);
    });
}