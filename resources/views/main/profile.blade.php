@extends('layouts.app')

<h1 style="margin-top: 120px"></h1>
@section('content')
    <div id="particles"></div>

    <div class="profile container">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1744932300291496"
                crossorigin="anonymous"></script>
        <!-- ismath 1 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-1744932300291496"
             data-ad-slot="4029750827"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" style="position:absolute; right: 5px;" class="navbar__button"><div class="navbar__item"><span>Выйти</span> <i class="fa-solid fa-right-from-bracket"></i></div></button>
        </form>
        <h1 class="profile__title">{{Auth::user()->name}}</h1>
        <h2 class="profile__text">Общее кол-во очков: <span>{{ $points }}</span></h2>
        <h2 class="profile__text" style="margin-left: 20px;" >·Общее кол-во очков за тестовые задания: <span class="r">{{ $test_points }}</span></h2>
        <h2 class="profile__text" style="margin-left: 20px;" >·Общее кол-во очков за практические задания: <span class="b">{{ $practice_points }}</span></h2>
        <h2 class="profile__text" style="margin-left: 20px;" >·Общее кол-во очков за задания на логику: <span class="g">{{ $logic_points }}</span></h2>
        <h2 class="profile__text">Общее кол-во пройденных заданий: <span>{{ $length }}</span></h2>
        <h2 class="profile__text" style="margin-left: 20px;" >·Общее кол-во пройденных тестовых заданий: <span class="r">{{ $test_length }}</span></h2>
        <h2 class="profile__text" style="margin-left: 20px;" >·Общее кол-во пройденных практических заданий: <span class="b">{{ $practice_length }}</span></h2>
        <h2 class="profile__text" style="margin-left: 20px;" >·Общее кол-во пройденных логических заданий: <span class="g">{{ $logic_length }}</span></h2>
        @if($length > 0)
            <h2 class="profile__text">В среднем очков за задание: <span>{{ intdiv($points, $length) }}</span></h2>
        @endif
        <div class="chartDiv" style="max-width:400px; max-height:400px;"><canvas class="profile__chart" id="chart"></canvas></div>
    </div>
    @include('layouts.includes.header')

    <table class="profile__table">
        <thead>
        <td>Категория</td>
        <td style="padding: 10px;">ID</td>
        <td>Название</td>
        <td>Количество очков</td>
        <td>Правильные ответы</td>
        <td>Дата</td>
        </thead>
        <tbody>
        @foreach($complited_tasks as $lesson)
            <tr>
                <td>
                    @if($lesson->category == 1)
                        {{ 'Тест' }}
                    @elseif($lesson->category == 2)
                        {{ 'Практика' }}
                    @elseif($lesson->category == 3)
                        {{ 'Логика' }}
                    @endif
                </td>
                <td>{{ $lesson->id }}</td>
                <td>{{ $lesson->name }}</td>
                <td>{{ $lesson->points }}</td>
                <td>{{ $lesson->correct_count }}</td>
                <td>{{ $lesson->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const white6 = "rgba(255, 255, 255, .6)"
        const data = [{{ $test_points }}, {{ $practice_points }}, {{ $logic_points }}]
        const ctx = document.getElementById('chart');

        Chart.defaults.color = "#fefefe"

        let MyChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: ['Тесты', 'Практика', 'Логика'],
                datasets: [{
                    label: 'Успеваемость(Очки)',
                    data: data,
                    borderWidth: 1,
                    clip: {left: 5, top: -4, right: -2, bottom: 0},
                    backgroundColor: [
                        'rgba(255, 99, 132, .5)',
                        'rgba(54, 162, 235, .5)',
                        'rgba(40, 167, 69, .5)'
                    ],
                    borderColor:[
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(40, 167, 69, 1)'
                    ],
                }]
            },
            options: {
                scales: {
                    y: {
                        display: false,
                    },
                    r: {
                        grid: {
                            color: white6
                        },
                        ticks: {
                            backdropColor: "rgba(0, 0, 0, 0)",
                            color: "#fefefe"
                        }
                    }
                }
            }
        });
    </script>
    <style>
    </style>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles', "{{ asset('/js/particles.json') }}", function() {
        });
    </script>
@endsection
