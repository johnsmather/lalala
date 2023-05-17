@extends('layouts.app')

@section('content')
    <div id="particles"></div>
    <div class="profile container login">
        <div class="profile__title" >Регистрация</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name" class="profile__text">{{ __('Name') }}</label>
            @error('name')
                <div class="error" role="alert">Попробуйте другое имя</div>
            @enderror
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('email')
                <div class="error" role="alert">Неверный email</div>
            @enderror
            <label for="email" class="profile__text">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('password')
                <div class="error" role="alert">Пароль неверный</div>
            @enderror
            <label for="password" class="profile__text">Пароль</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <label for="password-confirm" class="profile__text">Подтвердите пароль</label>
            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
            <button type="submit" class="profile__btn">Регистрация</button>
            <div class="profile__r-links">
                <a href="{{ route('login') }}" class="btn">Уже есть аккаунт?</a>
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
