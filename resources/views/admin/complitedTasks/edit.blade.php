@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Редактировать урок:</h1>
    <div class="admin__content">
        <form action="{{ route('admin.ComplitedTasks.update', $complitedTasks->id ) }}" class="admin__from"
              method="POST">
            @csrf
            @method('PATCH')
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
            <input type="number" placeholder="Test ID" name="test_id" class="lesson__area" value="{{$complitedTasks->test_id}}">
            <input type="number" placeholder="User ID" name="user_id" class="lesson__area" value="{{$complitedTasks->user_id}}">
            <input type="text" placeholder="Название урока" name="name" class="lesson__area" value="{{$complitedTasks->name}}">
            <input type="text" placeholder="Category" name="category" class="lesson__area" value="{{$complitedTasks->category}}">
            <input type="number" placeholder="Correct" name="correct_count" class="lesson__area" value="{{$complitedTasks->correct_count}}">
            <input type="number" placeholder="Points" name="points" class="lesson__area" value="{{$complitedTasks->points}}">
            <input type="number" placeholder="Time" name="time" class="lesson__area" value="{{$complitedTasks->time}}">
            <input type="submit" value="Обновить" name="submit" class="lesson__start" style="width: 200px;">
        </form>
    </div>

@endsection
