@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Тестовые задачи:</h1>
    <div class="admin__content">
        <a href="{{ route('admin.testTasks.create') }}" class="btn">Добавить</a>
        <h1>Добавленные уроки:</h1>
        <table>
            <thead>
                <td style="padding: 10px;">ID</td>
                <td>Name</td>
                <td>Answer 1</td>
                <td>Answer 2</td>
                <td>Answer 3</td>
                <td>Answer 4</td>
                <td>Test ID</td>
                <td>Correct</td>
                <td>Action</td>
            </thead>
            <tbody>
                @foreach($testTasks as $lesson)
                    <tr>
                        <td>{{ $lesson->id }}</td>
                        <td>{{ $lesson->name }}</td>
                        <td>{{ $lesson->answer_1 }}</td>
                        <td>{{ $lesson->answer_2 }}</td>
                        <td>{{ $lesson->answer_3 }}</td>
                        <td>{{ $lesson->answer_4 }}</td>
                        <td>{{ $lesson->test_id }}</td>
                        <td>{{ $lesson->correct }}</td>
                        <td class="flex">
                            <a href="{{ route('admin.testTasks.show', $lesson->id) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.testTasks.edit', $lesson->id) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.testTasks.delete', $lesson->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
