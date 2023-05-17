@extends('layouts.app')

@section('content')
    <div id="particles"></div>
    <div class="lesson">
        <h1 class="lesson__title">Практические задания</h1>
        <div class="lesson__container container">
            <div class="lesson__list">
                @foreach($lessons as $lesson)
                    <a href="/practices/{{ $lesson->id }}" class="lesson__link">{{ $lesson->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
    @include('layouts.includes.header')
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles', "{{ asset('/js/particles.json') }}", function() {
        });
    </script>
@endsection
