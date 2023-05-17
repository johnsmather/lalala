@extends('layouts.app')

@section('content')
    <div id="particles"></div>
    <div class="lesson-single practice container">
        @if($complited == 1)
            <h1 class="lesson_error error">Задача уже решена. Вы не получите очков.</h1>
        @endif
        <div class="lesson__container" id="lesson">
            <h1 class="lesson__title">{{ $logical->name }}</h1>
            <div class="lesson__container" id="lesson">
                <h1 class="lesson__text" id="logic_text">{!! $logical->text !!}</h1>
                <h1 id="multiplier" class="hidden">{{ $logical->points_multiplier }}</h1>
                <div class="lesson-single__list">
                    <h1 class="lesson__error success hidden" id="logic_success">Задача решена</h1>
                    <input class="lesson__input" placeholder="Ответ на вопрос" id="logic_ans">
                    <h1 class="lesson__input hidden" id="logic_completed_answer"></h1>
                    <h1 class="lesson__text timer" id="logic_timer" style="font-weight: 800">Затраченное время: <span>0:00</span></h1>
                    @if($complited != 1)
                        <h1 class="lesson__text hidden total_points" id="logic_total_points">1</h1>
                    @endif
                    <div id="logic_real_ans" class="hidden" data-ans="{{ $logical->answer }}"></div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.includes.header')
    <script src="{{ asset('js/logic.js') }}"></script>
    @if($complited == 1)
        <script>
            console.log(228)
            function finishLogical() {
                console.log(1)
            }
        </script>
    @else
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            function finishLogical() {
                let points = Math.floor({{ $logical->points_multiplier }} / time)
                console.log({{ $logical->points_multiplier }}, time, points)
                $.post({
                    url:  "{{ route('admin.ComplitedTasks.store') }}",
                    data: {
                        'test_id': {{ $logical->id }},
                        'user_id': {{ Auth::user()->id }},
                        'name': "{{ $logical->name }}",
                        'category': 3,
                        'points': points,
                        'time': time,
                        'correct_count': 1,
                    }
                });
            }
        </script>
    @endif
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles', "{{ asset('/js/particles.json') }}", function() {
        });
    </script>
@endsection
