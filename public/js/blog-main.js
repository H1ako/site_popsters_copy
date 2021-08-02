$(document).ready(function () {
    let blog_posts = $('.blog-posts');
    let update_blog_url =  $('#update_blog_post-url').attr('value');
    let update_blog_pages_url = $("#update_blog_posts_pages-url").attr('value');
    let blog_pages = $(".pages");
    $.ajax({
        url: update_blog_url+'?post_subject=all&posts_page=1',
        cache: false,
        success: function(html){
            blog_posts.html(html);
            window.scroll(0, 0);
        }
    });
    $.ajax({
        url: `${update_blog_pages_url}?current_page=1&post_subject=all`,
        cache: false,
        success: function(html){
            blog_pages.html(html);
        }
    });
})

$(document).on('click', '.filters .filter:not(.current)', function () {
    let th = $(this);
    let filters = $('.filters .filter');
    for (let i=0; i < filters.length; i++){
        filters.eq(i).removeClass('current');
    }
    th.addClass('current');
    let subject = th.text();
    let blog_posts = $('.blog-posts');
    let update_blog_url =  $('#update_blog_post-url').attr('value');
    let update_blog_pages_url = $("#update_blog_posts_pages-url").attr('value');
    let blog_pages = $(".pages");
    $.ajax({
        url: `${update_blog_url}?post_subject=${subject}&posts_page=1`,
        cache: false,
        success: function(html){
            blog_posts.html(html);
            window.scroll(0, 0);
        }
    });
    $.ajax({
        url: `${update_blog_pages_url}?current_page=1&post_subject=${subject}`,
        cache: false,
        success: function(html){
            blog_pages.html(html);
        }
    });
})
$(document).on('click', ".page:not(.active)", function () {
    let th = $(this);
    let page_num = th.text();
    let subject = $('.filter.current').text();
    console.log(subject);
    let blog_posts = $('.blog-posts');
    let update_blog_url =  $('#update_blog_post-url').attr('value');
    let update_blog_pages_url = $("#update_blog_posts_pages-url").attr('value');
    let blog_pages = $(".pages");
    $.ajax({
        url: `${update_blog_url}?post_subject=${subject}&posts_page=${page_num}`,
        cache: false,
        success: function(html){
            blog_posts.html(html);
            window.scroll(0, 0);
        }
    });
    $.ajax({
        url: `${update_blog_pages_url}?current_page=${page_num}&post_subject=${subject}`,
        cache: false,
        success: function(html){
            blog_pages.html(html);
        }
    });
})
