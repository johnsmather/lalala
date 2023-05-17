@extends('layouts.app')

@section('content')
    <main>
        <div id="particles"></div>
        <div class="lesson-single practice container">
            <div class="lesson__container" id="lesson">
                <h1 class="lesson__title">{{ $theory->name }}</h1>
                <h2 class="lesson__line">{!! $theory->text !!}</h2>
            </div>
        </div>
    </main>
    @include('layouts.includes.header')
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles', "{{ asset('/js/particles.json') }}", function() {
        });
    </script>
    <style>
        .MathJax {
            height: 30px !important;
            display: flex !important;
            align-items: center;
            font-size: 14px !important;
        }
    </style>
@endsection
