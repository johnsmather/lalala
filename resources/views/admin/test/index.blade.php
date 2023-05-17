@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Тестовые уроки:</h1>
    <div class="admin__content">
        <a href="{{ route('admin.test.create') }}" class="btn">Добавить</a>
        <h1>Добавленные уроки:</h1>
        <table>
            <thead>
            <td>ID</td>
            <td>Name</td>
            <td>multiplier</td>
            <td>Action</td>
            </thead>
            <tbode>
                @foreach($tests as $lesson)
                    <tr>
                        <td>{{ $lesson->id }}</td>
                        <td>{{ $lesson->name }}</td>
                        <td>{{ $lesson->points_multiplier }}</td>
                        <td class="flex">
                            <a href="{{ route('admin.test.show', $lesson->id) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.test.edit', $lesson->id) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.test.delete', $lesson->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbode>
        </table>
    </div>

@endsection
