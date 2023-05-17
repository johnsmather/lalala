@extends('layouts.app')

@section('content')
    <div id="correct_answers"></div>
    <div id="particles"></div>
    <div class="lesson-single practice container">
        <div class="lesson__container" id="lesson">
            <h1 class="lesson__title">{{ $test->name }}</h1>
            <h1 class="lesson__text timer" id="test_timer" style="font-weight: 800">Затраченное время: <span>0:00</span></h1>
            <div id="tasks">
                @foreach($test_tasks as $index=>$task)
                    <div class="lesson__task">
                        <h1>{{ $task->name }}</h1>
                            <ul class="lesson__test-list">
                                @if(rand(0, 1) == 0)
                                    <li>
                                        <input type="checkbox" id="task-{{ $index }}-answer-1">
                                        A) <span id="task-{{ $index }}-1">{{ $task->answer_1 }}</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="task-{{ $index }}-answer-2">
                                        B) <span id="task-{{ $index }}-2">{{ $task->answer_2 }}</span>
                                    </li>
                                @else
                                    <li>
                                        <input type="checkbox" id="task-{{ $index }}-answer-2">
                                        A) <span id="task-{{ $index }}-2">{{ $task->answer_2 }}</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="task-{{ $index }}-answer-1">
                                        B) <span id="task-{{ $index }}-1">{{ $task->answer_1 }}</span>
                                    </li>
                                @endif
                                @if(rand(0,1) == 1)
                                    <li>
                                        <input type="checkbox" id="task-{{ $index }}-answer-3">
                                        C) <span id="task-{{ $index }}-3">{{ $task->answer_3 }}</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="task-{{ $index }}-answer-4">
                                        D) <span id="task-{{ $index }}-4">{{ $task->answer_4 }}</span>
                                    </li>
                                @else
                                    <li>
                                        <input type="checkbox" id="task-{{ $index }}-answer-4">
                                        C) <span id="task-{{ $index }}-4">{{ $task->answer_4 }}</span>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="task-{{ $index }}-answer-3">
                                        D) <span id="task-{{ $index }}-1">{{ $task->answer_3 }}</span>
                                    </li>
                                @endif
                                <h1 class="hidden" id="correct-{{ $index }}">{{ $task->correct }}</h1>
                            </ul>
                    </div>
                @endforeach
            </div>
            <h1 class="lesson__text timer hidden" id="test_total_points" style="font-weight: 800">Очков получено: <span>0</span></h1>
            <h1 class="lesson__text timer hidden" id="test_total_answers" style="font-weight: 800">Правильных ответов: <span>0</span></h1>
            <button class="lesson__start" id="test_finish">Завершить</button>
            <button class="lesson__start hidden" onClick="window.location.reload();" id="test_reload">Начать заново</button>
            <div class="lesson__table lesson-table hidden" id="test_table">
                <h1 class="lesson-table__ans" id="test_table_0"></h1>
                <h1 class="lesson-table__ans" id="test_table_1"></h1>
                <h1 class="lesson-table__ans" id="test_table_2"></h1>
                <h1 class="lesson-table__ans" id="test_table_3"></h1>
                <h1 class="lesson-table__ans" id="test_table_4"></h1>
                <h1 class="lesson-table__ans" id="test_table_5"></h1>
                <h1 class="lesson-table__ans" id="test_table_6"></h1>
                <h1 class="lesson-table__ans" id="test_table_7"></h1>
                <h1 class="lesson-table__ans" id="test_table_8"></h1>
                <h1 class="lesson-table__ans" id="test_table_9"></h1>
            </div>
        </div>
    </div>
    <div class="hidden" id="test_id">{{ $test->id }}</div>
    <div class="hidden" id="user_id">{{ Auth::user()->id }}</div>
    <div class="hidden" id="points_multiplier">{{ $test->points_multiplier }}</div>
    <div class="hidden" id="route">{{ route('admin.ComplitedTasks.store') }}</div>
    @include('layouts.includes.header')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{ asset('js/test.js') }}"></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles', "{{ asset('/js/particles.json') }}", function() {
        });
    </script>
@endsection
