@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Логические уроки:</h1>
    <div class="admin__content">
        <a href="{{ route('admin.logical.create') }}" class="btn">Добавить</a>
        <h1>Добавленные уроки:</h1>
        <table>
            <thead>
            <td>ID</td>
            <td>Name</td>
            <td>Text</td>
            <td>Answer</td>
            <td>Points_multiplier</td>
            <td>Action</td>
            </thead>
            <tbode>
                @foreach($logicals as $lesson)
                    @if($lesson->img == 0)
                    <tr>
                        <td>{{ $lesson->id }}</td>
                        <td>{{ $lesson->name }}</td>
                        <td>{{ $lesson->text }}</td>
                        <td>{{ $lesson->answer }}</td>
                        <td>{{ $lesson->points_multiplier }}</td>
                        <td class="flex">
                            <a href="{{ route('admin.logical.show', $lesson->id) }}"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.logical.edit', $lesson->id) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.logical.delete', $lesson->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @else
                        <td>{{ $lesson->id }}</td>
                        <td>{{ $lesson->name }}</td>
                        <td><a  target="_blank" href="{{ asset('storage/' . $lesson->text) }}"><img src="{{ asset('storage/' . $lesson->text) }}" alt=""></a></td>
                        <td>{{ $lesson->answer }}</td>
                        <td class="flex">
                            <a href="{{ route('admin.logical.show', $lesson->id) }}"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.logical.edit', $lesson->id) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.logical.delete', $lesson->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                        </tr>
                    @endif
                @endforeach
            </tbode>
        </table>
    </div>

@endsection
