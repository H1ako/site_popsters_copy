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
