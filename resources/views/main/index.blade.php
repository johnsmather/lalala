@extends('layouts.app')

@section('content')
    <div class="main">
        <div id="particles"></div>
        <div class="zzz">
            <div class="container">
                <h1 class="title">IS<span>MATH</span></h1>
                <div class="list">
                    <a href="{{ route('theories') }}" class="list__item litem">
                        <div>
                            <h1 class="litem__title">Теория</h1>
                            <h2>{{ $theories }} урок(ов)</h2>
                        </div>
                    </a>
                    <a href="{{ route('practices') }}" class="list__item litem">
                        <div>
                            <h1 class="litem__title">Практика</h1>
                            <h2>{{ $practices }} урок(ов)</h2>
                        </div>
                    </a>
                    <a href="{{ route('tests') }}" class="list__item litem">
                        <div>
                            <h1 class="litem__title">Тесты</h1>
                            <h2>{{ $tests }} урок(ов)</h2>
                        </div>
                    </a>
                    <a href="{{ route('logicals') }}" class="list__item litem">
                        <div>
                            <h1 class="litem__title">Логика</h1>
                            <h2>{{ $logicals }} урок(ов)</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="nav">
        <ul class="nav__list navbar">
            @if($auth != null)
                <a href="{{ route('profile') }}" class="navbar__item"><span>Профиль</span> <i class="fa-regular fa-user"></i></a>
                @if($auth->role == 'admin')
                    <a href="{{ route('admin') }}" class="navbar__item"><span>Админ</span> <i class="fa-regular fa-user"></i></a>
                @endif
            @else
                <a href="{{ route('login') }}" class="navbar__item"><span>Войти</span> <i class="fa-regular fa-user"></i></a>
                <a href="{{ route('register') }}" class="navbar__item"><span>Регистрация</span> <i class="fa-solid fa-right-to-bracket"></i></a>
            @endif

        </ul>
    </div>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles', "{{ asset('/js/particles.json') }}", function() {
        });
    </script>

@endsection

