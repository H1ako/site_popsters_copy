const cont= $('.container');
$('.select-arrow').on('click', function () {
    $(this).toggleClass('selected');
})
$('#blog-add-post-form').submit(function (e) {
    e.preventDefault();
    var th = $(this);
    var update_blog_url =  th.find('#update_blog_post-url').attr('value');
    var form_action = th.attr('action');
    var form_data = th.serialize();
    var posting = $.post(form_action, form_data, function () {
        $.ajax({
            url: update_blog_url,
            cache: false,
            success: function(html){
                cont.html(html);
            }
        });
    });
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
