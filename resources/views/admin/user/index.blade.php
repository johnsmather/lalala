@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Пользователи:</h1>
    <div class="admin__content">
        <a href="{{ route('admin.user.create') }}" class="btn">Добавить</a>
        <h1>Пользователи:</h1>
        <table>
            <thead>
                <td style="padding: 10px;">ID</td>
                <td>Name</td>
                <td>email</td>
                <td>Action</td>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="flex">
                            <a href="{{ route('admin.user.show', $user->id) }}"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('admin.user.edit', $user->id) }}"><i class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
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
