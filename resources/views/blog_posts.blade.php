{{-- @foreach($posts as $post)
{{ $post }}<br>
@endforeach --}}
@foreach($posts as $post)
<div class="blog-post">
    <img src="https://popsters.ru/blog/content/all/mceu5sklqrkj9rfmasmi1o2fxyjdhx57l_small.png" alt="" class="blog-post__img">
    <div class="blog-post__info">
        <div class="title-date-desc">
            <div class="title-date-desc__title">{{ $post['title'] }}</div>
            <div class="title-date-desc__date">{{ $post['date'] }}</div>
            <div class="title-date-desc__desc">{{ $post['description'] }}</div>
        </div>
        <div class="btn-and-subject">
            <a href="" class="btn-and-subject__read-more">Read more<i class="fa fa-chevron-right t-overlay-icon"></i></a>
            <div class="btn-and-subject__subject">{{ $post['subject'] }}</div>
        </div>
    </div>
</div>
@endforeach