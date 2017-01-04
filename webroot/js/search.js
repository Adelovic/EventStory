$(function () {
    $("#search").bind('input', function () {
        $.ajax({
            url: "/Christopher/EventStory/Search/",
            data: {
                search: $("#search").val()
            },
            dataType: 'html',
            type: 'post',
            success: function (html) {
                $("#search-res").html(html);
            }
        })

    });
})
