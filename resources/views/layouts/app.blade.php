<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="description" content="Изучайте математику онлайн бесплатно с нашим сайтом! У нас вы найдете курсы и уроки для начинающих и продвинутых, задания для самостоятельной работы, тесты и многое другое. Погрузитесь в мир математики вместе с нами и достигайте новых высот в своих знаниях и навыках!">
    <meta name="keywords" content="Ismath, ISMATH, ismath, исмас, математика, курсы математики, уроки математики, задания по математике, тесты по математике, алгебра, геометрия, тригонометрия, математические формулы">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/a5c8a4418a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Scripts -->
</head>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<body>
    <script>
        MathJax = {
            tex: {
                inlineMath: [['$', '$'], ['\\(', '\\)']]
            },
            startup: {
                ready() {
                    var CHTMLmath = MathJax._.output.chtml.Wrappers.math.CHTMLmath;
                    delete CHTMLmath.styles['mjx-container[jax="CHTML"][display="true"]'].margin;
                    delete CHTMLmath.styles['mjx-container[jax="CHTML"][display="true"]'].font;
                    MathJax.startup.defaultReady();
                }
            },
            options: {
                enableMenu: false
            }
        };
    </script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script type="text/javascript" id="MathJax-script"
            src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
    </script>
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({
          messageStyle: "none"
        });
    </script>
    @yield('content')

    <script src="{{ asset('js/header.js') }}"></script>
</body>
</html>
