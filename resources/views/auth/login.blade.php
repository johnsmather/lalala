@extends('layouts.app')

@section('content')
    <div id="particles"></div>

    <div class="profile container login">
        <h1 class="profile__title">Авторизация</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            @error('email')
                <div class="invalid-feedback error" role="alert"><strong>Неверный email или пароль.</strong></div>
            @enderror
            @error('password')
                <div class="invalid-feedback error" role="alert"><strong>Неверный email или пароль.</strong></div>
            @enderror
            <label for="email" class="profile__text">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <label for="password" class="profile__text">{{ __('Пароль') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <div class="form-check hidden">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked="true">
                <label class="profile__text" for="remember">{{ __('Запомнить меня') }}</label>
            </div>
            <button type="submit" class="profile__btn">Войти</button>
            <div class="profile__r-links">
                <a href="{{ route('register') }}" class="btn">Ещё не зарегистрировались?</a>
            </div>
        </form>
    </div>
    <div class="links">
        <a href="{{ route('index') }}" class="links-item"><i class="fa-solid fa-house"></i></a>
    </div>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles', "{{ asset('/js/particles.json') }}", function() {
        });
    </script>

@endsection
