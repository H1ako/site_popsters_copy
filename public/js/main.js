const cont= $('.container');
$('.select-arrow').on('click', function () {
    $(this).toggleClass('selected');
})

$('#language').on('change', function () {
    var th = $(this);
    var post_url = $('#url-home_post').attr('action');
    console.log(post_url);
    var data = $('#url-home_post').serialize();
    console.log(data);
    var posting = $.post(post_url, data, function(err, result) {
        if (err){
            console.log(err);
        }
        window.location.reload();
    });
})
