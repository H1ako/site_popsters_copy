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
    <noscript>Enable scripts to see this page correctly</noscript>
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
    <footer>
        <div class="contacts">
            <div class="info">
                <div class="popsters">
                    <strong>Popsters</strong> - social media content analytics tool
                </div>
                <div class="email">
                    <strong>Support@popsters.com</strong> - support and proposals
                </div>
            </div>
            <div class="socials">
                <div class="social twitter"><img src="/Images/socials-colored/tw.svg" alt=""></div>
                <div class="social facebook"><img src="/Images/socials-colored/fb.svg" alt=""></div>
                <div class="social vk"><img src="/Images/socials-colored/vk.svg" alt=""></div>
                <div class="social ok"><img src="/Images/socials-colored/ok.svg" alt=""></div>
                <div class="social telegram"><img src="/Images/socials-colored/tg.svg" alt=""></div>
            </div>
        </div>
        <div class="credentials">
            <span>Popsters terms</span>
            <span class='privacy'>Privacy Policy</span>
            <span>© Popsters 2021. All rights reserved.</span>
        </div>
    </footer>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/blog-main.js?<?=$date?>"></script>
</body>
</html>
