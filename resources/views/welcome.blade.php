@extends('layouts.app')

@section('content')
<div class="banner">
    <canvas id="c"></canvas>
    <div class="banner__container">
        <div class="container banner__con">
            <h1 class="banner__title">МАТЕМАТИКУ УЧИТЬ <span>ЛЕГКО</span></h1>
            <h2 class="banner__subtitle">Ismath: математика- это просто. Благодаря нашему сайту ваш устный счет выйдет на новый уровень. Сборник правил, трюков и практических занятия для улучшения вашего счёта в уме.</h2>
        </div>
    </div>
</div>

<div class="about" id="about">
{{--    <h3 class="bg-img" id="formula1">(a+b)²=a²+2ab+b²</h3>--}}
{{--    <h3 class="bg-img" id="formula2">a²-b²=(a+b)(a-b)</h3>--}}
{{--    <h3 class="bg-img" id="formula3">xᵃ*xᵇ=xᵃ⁺ᵇ</h3>--}}
{{--    <h3 class="bg-img" id="formula4">(xᵃ)ᵇ=xᵃᵇ</h3>--}}
{{--    <h3 class="bg-img" id="formula5">xᵃ*yᵃ=(xy)ᵃ</h3>--}}
{{--    <h3 class="bg-img" id="formula6">logₐx=b => aᵇ=x</h3>--}}
{{--    <h3 class="bg-img" id="formula7">logₐ(xy)=logₐx + logₐy</h3>--}}
{{--    <h3 class="bg-img" id="formula8">(a-b)²=a²-2ab+b²</h3>--}}
{{--    <h3 class="bg-img" id="formula9">a³+b³=(a+b)(a²-ab+b²)</h3>--}}
{{--    <h3 class="bg-img" id="formula10">(a+b)³=a³+3a²b+3ab²+b³</h3>--}}
    <div class="container about__container">
        <h1 class="about__title">Про нас</h1>
        <ul class="about__list about-list">
            <li class="about-list__item ali">
                <h1 class="ali__title">Номер 1</h1>
                <h2 class="ali__text">Первый в своём роде проект, который позволяет тренировать устный счет для конкретных правил, закреплять теорию практикой.</h2>
            </li>
            <li class="about-list__item ali">
                <h1 class="ali__title">Развитие</h1>
                <h2 class="ali__text">Несмотря на то, что имеющаяся база на нашем сайте уже улучшит ваш счёт, материал постоянно дополняется.</h2>
            </li>
            <li class="about-list__item ali">
                <h1 class="ali__title">Необходимость</h1>
                <h2 class="ali__text">В век цифровых технологий каждому, кто хочет связать свою жизнь с этой сферой необходимо обладать навыка счёта, но даже простым людям в жизни всегда поможет быстрый счёт.</h2>
            </li>
            <li class="about-list__item ali">
                <h1 class="ali__title">Будующее</h1>
                <h2 class="ali__text">В настоящее время сайт посвящён улучшению счёта в уме, но в будующем появится база для полного изучения математики, информатики и других наук.</h2>
            </li>
        </ul>
    </div>
</div>

<div class="line">
    <h1 class="line__title">Социальные сети:</h1>
    <ul>
        <li><a href="#">Telegram</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">TikTok</a></li>
    </ul>
</div>

<div class="stats">
<h1 class="stats__title">Статистика</h1>
    <div id="particles"></div>
    <div class="stats__container container">
    <div class="sitem sitem-1">
    <div class="bg"></div>
    <div>
        <h1 class="sitem__title">1</h1>
        <h2 class="sitem__text">Школа уже внедрила наш сайт для обучения</h2>
    </div>
    <div class="sitem__img">
        <img src="img/school.webp" alt="">
    </div>
    </div>
    <div class="sitem">
    <div class="bg"></div>
    <div class="sitem__img">
        <img src="img/book.webp" alt="">
    </div>
    <div>
        <h1 class="sitem__title">300+</h1>
        <h2 class="sitem__text">Уроков разной направленности и сложности добавлено</h2>
    </div>
    </div>
    <div class="sitem">
    <div class="bg"></div>
    <div>
        <h1 class="sitem__title">1000+</h1>
        <h2 class="sitem__text">Учеников уже пользуются нашим сайтом, постоянно прогресируя</h2>
    </div>
    <div class="sitem__img">
        <img src="img/graduating-student.webp" alt="">
    </div>
    </div>
    <div class="sitem">
    <div class="bg"></div>
    <div class="sitem__img">
        <img src="img/calendar.webp" alt="">
    </div>
    <div>
        <h1 class="sitem__title">7</h1>
        <h2 class="sitem__text">Дней регулярных занятий, и вы заметите значительный прогресс</h2>
    </div>
    </div>
</div>
</div>

<div class="info">
<h1 class="info__title">Информация</h1>
<div class="info__container container">
    <div class="iitem">
    <div class="iitem__img">
        <img src="img/theory.webp" alt="">
    </div>
    <div>
        <h1 class="iitem__title">ТЕОРИЯ</h1>
        <h2 class="iitem__text">100 задач</h2>
        <a href="#" class="iitem__link">ПОСМОТРЕТЬ</a>
    </div>
    </div>
    <div class="iitem">
    <div class="iitem__img">
        <img src="img/practice.webp" alt="">
    </div>
    <div>
        <h1 class="iitem__title">ПРАКТИКА</h1>
        <h2 class="iitem__text">100 задач</h2>
        <a href="#" class="iitem__link">ПОСМОТРЕТЬ</a>
    </div>
    </div>
    <div class="iitem">
    <div class="iitem__img">
        <img src="img/test.webp" alt="">
    </div>
    <div>
        <h1 class="iitem__title">ТЕСТЫ</h1>
        <h2 class="iitem__text">100 задач</h2>
        <a href="#" class="iitem__link">ПОСМОТРЕТЬ</a>
    </div>
    </div>
    <div class="iitem">
    <div class="iitem__img">
        <img src="img/logic.webp" alt="">
    </div>
    <div>
        <h1 class="iitem__title">ЛОГИКА</h1>
        <h2 class="iitem__text">100 задач</h2>
        <a href="#" class="iitem__link">ПОСМОТРЕТЬ</a>
    </div>
    </div>
</div>
</div>

<div class="questions">
    <img src="img/free-icon-graduation-hat-3279772.webp" alt="" id="img-hat">
    <h1 class="questions__title">Вопросы</h1>
    <div class="questions__container container">
        <div class="questions__left">
            <img src="img/free-icon-question-sign-5705272.webp" alt="">
        </div>
        <div class="questions__right">
            <ul class="questions__list">
                <li class="quetions__item qitem active-q" id="que_1">
                    <div class="arrow">❯</div>
                    <h1 class="qitem__que">
                        Вопрос
                        <img src="img/question.webp" alt="">
                    </h1>
                    <h2 class="qitem__ans active-q">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati recusandae officia quas animi delectus vero incidunt repellendus laborum assumenda iusto.</h2>
                </li>
                <li class="quetions__item qitem" id="que_2">
                    <div class="arrow">❯</div>
                    <h1 class="qitem__que">
                        Вопрос
                        <img src="img/question.webp" alt="">
                    </h1>
                    <h2 class="qitem__ans">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati recusandae officia quas animi delectus vero incidunt repellendus laborum assumenda iusto.</h2>
                </li>
                    <li class="quetions__item qitem" id="que_3">
                    <div class="arrow">❯</div>
                    <h1 class="qitem__que">
                        Вопрос
                        <img src="img/question.webp" alt="">
                    </h1>
                    <h2 class="qitem__ans">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati recusandae officia quas animi delectus vero incidunt repellendus laborum assumenda iusto.</h2>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="js/particles.min.js"></script>
<script>
/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles', '/js/particles.json', function() {
});
</script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/matrix.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@endsection
