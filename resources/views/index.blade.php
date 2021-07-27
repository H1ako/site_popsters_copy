<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popsters</title>
    <link rel="stylesheet" href="/css/index.css">
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
                        <img src="/Images/slider/screen1_ru.jpg" alt="" class="slider__slides__slide active">
                        <img src="/Images/slider/screen2_ru.jpg" alt="" class="slider__slides__slide">
                        <img src="/Images/slider/screen3_ru.jpg" alt="" class="slider__slides__slide">
                        <img class="mask" src='/Images/slider/mask.jpg'></img>
                        <img class="mask" src='/Images/slider/mask.jpg'></img>
                    </div>
                    <div class="slider__arrows">
                        <img src="/Images/slider/left-arrow.svg" alt="" class="slider__arrows__arrow">
                        <img src="/Images/slider/right-arrow.svg" alt="" class="slider__arrows__arrow">
                    </div>
                    <div class="slider__btns">
                        <input type="radio" class='slide_radio' checked name="slide_radio">
                        <input type="radio" class='slide_radio' name="slide_radio">
                        <input type="radio" class='slide_radio' name="slide_radio">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
