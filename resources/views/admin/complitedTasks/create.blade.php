@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Добавить урок:</h1>
    <div class="admin__content">
        <form action="{{ route('admin.ComplitedTasks.store') }}" class="admin__from" method="POST">
            @csrf
            @error('test_id')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('user_id')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('category')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('points')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('time')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('correct_count')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="number" placeholder="Test ID" name="test_id" class="lesson__area">
            <input type="number" placeholder="User ID" name="user_id" class="lesson__area">
            <input type="text" placeholder="Название урока" name="name" class="lesson__area">
            <input type="text" placeholder="Category" name="category" class="lesson__area">
            <input type="number" placeholder="Correct" name="correct_count" class="lesson__area">
            <input type="number" placeholder="Points" name="points" class="lesson__area">
            <input type="number" placeholder="Time" name="time" class="lesson__area">
            <input type="submit" value="Добавить" name="submit" class="lesson__start" style="width: 200px;">
        </form>
    </div>

@endsection
