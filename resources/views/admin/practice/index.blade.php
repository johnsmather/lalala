@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Практические уроки:</h1>
    <div class="admin__content">
        <a href="{{ route('admin.practice.create') }}" class="btn">Добавить</a>
        <h1>Добавленные уроки:</h1>
        <table>
            <thead>
            <td>ID</td>
            <td>Name</td>
            <td>Action</td>
            <td>script</td>
            <td>Action(CRUD)</td>
            </thead>
            <tbode>
                @foreach($practices as $lesson)
                    <tr>
                        <td>{{ $lesson->id }}</td>
                        <td>{{ $lesson->name }}</td>
                        <td>{{ $lesson->action }}</td>
                        <td>{{ $lesson->script }}</td>
                        <td class="flex">
                            <a href="{{ route('admin.practice.show', $lesson->id) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.practice.edit', $lesson->id) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.practice.delete', $lesson->id) }}" method="POST">
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
