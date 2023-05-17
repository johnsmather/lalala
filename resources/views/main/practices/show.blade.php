@extends('layouts.app')

@section('content')
    <script>console.log(window.MathJax)</script>
    <h1 class="hidden" id="practice_id"> {{ $practice->id }}</h1>
    <h1 class="hidden" id="user_id"> {{ Auth::user()->id }}</h1>
    <h1 class="hidden" id="route"> {{ route('admin.ComplitedTasks.store') }}</h1>
    <div id="particles"></div>
    <div class="lesson-single practice container">
        <div class="lesson__container" id="lesson">
            <div class="error hidden" id="practice_error"></div>
            <h1 class="lesson__title">{{ $practice->name }}</h1>
            <div class="lesson__list">
                <h1 class="lesson__error error hidden" id="practice_error"></div>
                <input class="lesson__input" type="number" placeholder="Минимальное число" id="practice_min" type="number">
                <input class="lesson__input" type="number" placeholder="Максимальное число" id="practice_max" type="number">
                <button class="lesson__start" id="practice_start">Начать</button>
                <button class="lesson__start hidden" id="practice_start2">Начать заново</button>
                <h2 class="lesson__area hidden" id="practice_que"></h2>
                <input class="lesson__input hidden" type="number" id="practice_ans">
                <button class="lesson__start hidden" id="practice_next">Пропустить</button>
                <div class="lesson__table lesson-table hidden" id="practice_table">
                    <h1 class="lesson-table__ans" id="practice_table_1"></h1>
                    <h1 class="lesson-table__ans" id="practice_table_2"></h1>
                    <h1 class="lesson-table__ans" id="practice_table_3"></h1>
                    <h1 class="lesson-table__ans" id="practice_table_4"></h1>
                    <h1 class="lesson-table__ans" id="practice_table_5"></h1>
                    <h1 class="lesson-table__ans" id="practice_table_6"></h1>
                    <h1 class="lesson-table__ans" id="practice_table_7"></h1>
                    <h1 class="lesson-table__ans" id="practice_table_8"></h1>
                    <h1 class="lesson-table__ans" id="practice_table_9"></h1>
                    <h1 class="lesson-table__ans" id="practice_table_10"></h1>
                </div>
                <h1 class="lesson__text hidden timer" id="practice_timer" style="font-weight: 800">Затраченное время: <span>0:00</span></h1>
                <h1 class="lesson__text hidden total_answers" id="practice_total"></h1>
                <h1 class="lesson__text hidden total_points" id="practice_total_points"></h1>
                <h1 id="action" style="display:none;">{{ $practice->action }}</h1>
            </div>
        </div>
    </div>
    @include('layouts.includes.header')

    @if($practice->script == null)
        <script src="{{ asset('js/practice/practice.js') }}"></script>
    @else
        <script src="{{ asset('js/practice/' . $practice->script . '.js') }}"></script>
    @endif
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles', "{{ asset('/js/particles.json') }}", function() {
        });
    </script>

    <style>
        .MathJax {
            height: 50px !important;
            display: flex !important;
            align-items: center;
        }
    </style>
@endsection
