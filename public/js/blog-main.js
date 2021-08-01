$(document).ready(function () {
    let blog_posts = $('.blog-posts');
    let update_blog_url =  $('#update_blog_post-url').attr('value');
    $.ajax({
        url: update_blog_url+'?post_subject=all',
        cache: false,
        success: function(html){
            blog_posts.html(html);
        }
    });
})

$('.filters .filter').on('click', function () {
    let th = $(this);
    let subject = th.attr('value');
    let blog_posts = $('.blog-posts');
    let update_blog_url =  $('#update_blog_post-url').attr('value');
    $.ajax({
        url: update_blog_url+'?post_subject='+subject,
        cache: false,
        success: function(html){
            blog_posts.html(html);
        }
    });
})