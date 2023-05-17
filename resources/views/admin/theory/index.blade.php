@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Теоретические уроки:</h1>
    <div class="admin__content">
        <a href="{{ route('admin.theory.create') }}" class="btn">Добавить</a>
        <h1>Добавленные уроки:</h1>
        <table>
            <thead>
                <td style="padding: 10px;">ID</td>
                <td>Name</td>
                <td>Text</td>
                <td>Action</td>
            </thead>
            <tbody>
                @foreach($theories as $lesson)
                    <tr>
                        <td>{{ $lesson->id }}</td>
                        <td>{{ $lesson->name }}</td>
                        <td>{!!  $lesson->text !!}</td>
                        <td class="flex">
                            <a href="{{ route('admin.theory.show', $lesson->id) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.theory.edit', $lesson->id) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.theory.delete', $lesson->id) }}" method="POST">
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
