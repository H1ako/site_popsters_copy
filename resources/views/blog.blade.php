<?php $date = Date('c'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <script src="https://use.fontawesome.com/8e72230c14.js"></script>
    <link rel="stylesheet" href="/css/blog.css?<?=$date?>">
</head>
<body>
    <header>
        <div class="topbar">
            <div class="section-inner">
                <div class="logo">
                    <img src="/Images/logohdpi.svg" alt="" class="">
                </div>
                <nav>
                    <ul>
                        <li>Main</li>
                        <li>Rates</li>
                        <li>FAQ</li>
                        <li>BLOG</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="about">
            <div class="wrapper">
                <div class="wrapper__title">Блог Popsters</div>
                <div class="wrapper__desc">
                    Полезные материалы о сервисе и работе в социальных сетях
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="section-inner">
            <div class="filters">
                <div class="filter current" value='all'>all</div>
                @foreach ($filters as $filter)
                    <div class="filter">{{ $filter }}</div>
                @endforeach
            </div>
            <input type="hidden" id='update_blog_post-url' value='{{ route('update_blog_post') }}'>
            <div class="blog-posts">
                
            </div>
            <input type="hidden" id='update_blog_posts_pages-url' value='{{ route('update_blog_post_pages') }}'>
            <div class="pages">

            </div>
        </div>
    </main>
    <footer></footer>
    <div class="fixed-about" style='display: none;'>
        <div class="section-inner">
            <span class="popsters">Popsters - сервис аналитики сообществ социальных сетей</span>
            <a href="" class="">Learn more</a>
            <div class="socials">
                <div class="social vk"><img src="" alt=""></div>
                <div class="social fb"><img src="" alt=""></div>
            </div>
        </div>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/blog-main.js?<?=$date?>"></script>
</body>
</html>
