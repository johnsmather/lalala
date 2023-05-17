@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Добавить урок:</h1>
    <div class="admin__content">
        <form action="{{ route('admin.practice.store') }}" class="admin__from" method="POST">
            @csrf
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('action')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="text" placeholder="Название урока" name="name" class="lesson__area">
            <input type="text" placeholder="Действие" name="action" class="lesson__area">
            <input type="text" placeholder="script" name="script" class="lesson__area">
            <input type="submit" value="Добавить" name="submit" class="lesson__start" style="width: 200px;">
        </form>
    </div>

@endsection
