<?php $date = Date('c'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popsters</title>
    <link rel="stylesheet" href="/css/index.css?<?=$date?>">
</head>
<body>
    <header>
        <div class="section-inner">
            <div class="top-bar">
                <div class="top-bar__logo">
                    <img src="/Images/logohdpi.svg" alt="Popsters">
                </div>
                <nav>
                    <ul>
                        <li>{{ trans('message.header_nav_mainPage') }}</li>
                        <li>{{ trans('message.header_nav_faq') }}</li>
                        <li>{{ trans('message.header_nav_pricing') }}</li>
                        <li><a href="{{ route('blog'); }}">{{ trans('message.header_nav_blog') }}</a></li>
                    </ul>
                </nav>
                <label for="language" class='select-arrow'>
                    <form id='url-home_post' action="{{ route('home_post') }}" method='post'>
                        @csrf
                        <select id='language' class="top-bar__lang" name="locale">
                            @if (App::getLocale() == 'ru')
                            <option id='locale-ru' value="ru" selected>RU</option>
                            <option id='locale-en' value="en">ENG</option>
                            @else
                            <option id='locale-ru' value="ru">RU</option>
                            <option id='locale-en' value="en" selected>ENG</option>
                            @endif
                        </select>
                    </form>
                </label>
            </div>
            <div class='bottom-part'>
                <div class="info">
                    <div class="info__slogan">
                        {{ trans('message.header_about') }}
                    </div>
                    <div class="info__dscrp">
                        {{ trans('message.header_about_subtitle') }}
                    </div>
                    <button>{{ trans('message.header_button') }}</button>
                </div>
                <div class="img">
                    <img src="/Images/arts/main.svg" alt="">
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="section-partners">
            <div class="title">Trusted Clients & Partners</div>
            <div class="partners">
                <img src="/Images/partners/bbdo.svg" alt="">
                <img src="/Images/partners/restore.svg" alt="">
                <img src="/Images/partners/eset.svg" alt="">
                <img src="/Images/partners/traffic.svg" alt="">
                <img src="/Images/partners/raif.svg" alt="">
                <img src="/Images/partners/Greenpeace.svg" alt="">
                <img src="/Images/partners/burda.png" alt="">
            </div>
        </section>
        <section class="section-features">
            <div class="section-outer">
                <div class="feature">
                    <div class="feature__about">
                        <div class="feature__about__title">Check popularity of different posts</div>
                        <div class="feature__about__desc">
                            Analyze what type of posts attract the audience. Sort posts by popularity, text length, engagement, date or any other attribute.
                        </div>
                        <a href="" class="feature__about_getStarted">GET STARTED</a>
                    </div>
                    <img src="/Images/arts/w1.svg" alt="" class="feature__img">
                </div>
                <div class="feature">
                    <div class="feature__about">
                        <div class="feature__about__title">Monitor performance indicators</div>
                        <div class="feature__about__desc">
                            Look at the total data and an average efficiency of posts published at the different time with different hashtags or attachments. Check statistics of page activity and dynamics.
                        </div>
                        <a href="" class="feature__about_getStarted">GET STARTED</a>
                    </div>
                    <img src="/Images/arts/w2.svg" alt="" class="feature__img">
                </div>
                <div class="feature">
                    <div class="feature__about">
                        <div class="feature__about__title">Compare everything you want</div>
                        <div class="feature__about__desc">
                            Analyze pages of different companies from different social media, load data about hashtags or start batch load to see all the data at once
                        </div>
                        <a href="" class="feature__about_getStarted">GET STARTED</a>
                    </div>
                    <img src="/Images/arts/w3.svg" alt="" class="feature__img">
                </div>
                <div class="feature">
                    <div class="feature__about">
                        <div class="feature__about__title">Generate quick reports</div>
                        <div class="feature__about__desc">
                            Export data from Popsters to any file you want: XLSX, PDF, PNG, JPG, CSV or PPTX with possibility to edit data and styles
                        </div>
                        <a href="" class="feature__about_getStarted">GET STARTED</a>
                    </div>
                    <img src="/Images/arts/w4.svg" alt="" class="feature__img">
                </div>
            </div>
        </section>

        <section class="section-slider">
            <div class="wrapper">
                <div class="wrapper__title">Make your work more efficient</div>
                <div class="wrapper__desc">
                    Use Popsters to improve your experience and to make really cool posts and ads.
                </div>
            </div>

            <div class="slider" id="slider">
                <div class="section-inner">
                    <div class="slider__slides">
                        <div class="slider__slides__slide">
                            <img src="/Images/slider/screen1_ru.jpg" alt="">
                        </div>
                        <div class="slider__slides__slide">
                            <img src="/Images/slider/screen2_ru.jpg" alt="">
                        </div>
                        <div class="slider__slides__slide">
                            <img src="/Images/slider/screen3_ru.jpg" alt="">
                        </div>
                        <img class="mask" src='/Images/slider/mask.jpg'>
                        <img class="mask" src='/Images/slider/mask.jpg'>
                    </div>
                    <div class="slider__arrows">
                        <img src="/Images/slider/left-arrow.svg" alt="PREV" id='slider-left-arrow' class="slider__arrows__arrow">
                        <img src="/Images/slider/right-arrow.svg" alt="NEXT" id='slider-right-arrow' class="slider__arrows__arrow">
                    </div>
                    <div class="slider__btns">
                        <input type="radio" class='slide_radio' name="slide_radio">
                        <input type="radio" class='slide_radio' name="slide_radio">
                        <input type="radio" class='slide_radio' name="slide_radio">
                    </div>
                </div>
            </div>
        </section>
        <section class="section-offers">
            <div class="wrapper">
                <div class="wrapper__title">Pricing</div>
                <div class="wrapper__desc">
                    Low prices for fast and convenient tool that helps to thousands users save time and make their job easier
                </div>
                <a href="" class="wrapper__all_plans">SEE ALL PLANS</a>
            </div>
            <div class="offers">
                <div class="offer_free">
                    <h2>Free</h2>
                    <ul class="offer_free__options">
                        <li><span class="highlighted">7</span> days for test</li>
                        <li><span class="highlighted">10</span> analyzes in trial</li>
                        <li><span class="highlighted">15</span> posts in favorites</li>
                    </ul>
                </div>
                <div class="offer_paid">
                    <h2>$9.99</h2>
                    <ul class="offer_paid__options">
                        <li>For <span class="highlighted">1</span> social network</li>
                        <li><span class="highlighted">Unlimited</span> count of analyzes of any interested pages</li>
                        <li><span class="highlighted">Reports</span> generating</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section-video">
            <div class="wrapper">
                <div class="wrapper__title">Look at a short explainer video about Popsters</div>
                <div class="wrapper__desc">
                    Cartoon story about one of the cases of using Popsters at work.
                </div>
            </div>
            <div class="youtube-player">
                <lite-youtube videoid="V1SqQDNAGzg" style="background-image: url('/Images/etc/cover.jpg');"></lite-youtube>
            </div>
        </section>

        <section class="section-socials">
            <div class="social-circles">
                <div class="social-circle tw"><img src="../Images/socials/tw.svg" alt=""></div>
                <div class="social-circle vk"><img src="../Images/socials/vk.svg" alt=""></div>
                <div class="social-circle ok"><img src="../Images/socials/ok.svg" alt=""></div>
                <div class="social-circle fk"><img src="../Images/socials/fk.svg" alt=""></div>
                <div class="social-circle pn"><img src="../Images/socials/pn.svg" alt=""></div>
                <div class="social-circle tb"><img src="../Images/socials/tb.svg" alt=""></div>
                <div class="social-circle gp"><img src="../Images/socials/gp.svg" alt=""></div>
                <div class="social-circle cb"><img src="../Images/socials/cb.svg" alt=""></div>
                <div class="social-circle tg"><img src="../Images/socials/tg.svg" alt=""></div>
                <div class="social-circle fb"><img src="../Images/socials/fb.svg" alt=""></div>
                <div class="social-circle ig"><img src="../Images/socials/ig.svg" alt=""></div>
                <div class="social-circle yt"><img src="../Images/socials/yt.svg" alt=""></div>
            </div>
            <div class="wrapper">
                <div class="wrapper__title">12 social networks for analyzing in one place</div>
                <div class="wrapper__desc">
                    Don't need to have a big count of different tools and windows for work. Log In using interested social media and analyze it all at one window in the same feed, graphs and charts
                </div>
                <a class="wrapper__try">TRY FOR FREE</a>
                <div class="card">No credit card required</div>
            </div>
            <a class="to_top" id="btn-to_top"><span><img src="/Images/etc/small-arrow-up.svg" alt=""></span><span class="text">BACK TO TOP</span></a>
        </section>
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
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/main.js?<?=$date?>"></script>
    <script type="text/javascript" src="/js/slider.js?<?=$date?>"></script>
    <script type="text/javascript" src="/js/lite-youtube-embed.js?<?=$date?>"></script>
</body>
</html>
