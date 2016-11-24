<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') ?>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?= $this->Html->script('bootstrap.min.js') ?>
<script>
    $(function () {
        $("#search").bind('input', function () {
            $.ajax({
                url: "Search/",
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
</script>
