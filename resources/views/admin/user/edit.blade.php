@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Обновить урок:</h1>
    <div class="admin__content">
        <form action="{{ route('admin.user.update', $user->id) }}" class="admin__from" method="POST">
            @csrf
            @method('PATCH')
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('role')
            <div class="error">{{ $message }}</div>
            @enderror
            <input type="text" placeholder="Имя пользователя" name="name" class="lesson__area" value="{{ $user->name }}">
            <input type="text" placeholder="Email" name="email" class="lesson__area" value="{{ $user->email }}">
            <input type="text" placeholder="Роль" name="role" class="lesson__area" value="{{ $user->role }}">
            <input type="submit" value="Добавить" name="submit" class="lesson__start" style="width: 200px;">
        </form>
    </div>

@endsection
