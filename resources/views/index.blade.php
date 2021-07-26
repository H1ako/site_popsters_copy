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
            <main>
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
            </main>
        </div>
    </header>
    <main>
        <section class="section-partners">

        </section>
    </main>
    <footer>

    </footer>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
