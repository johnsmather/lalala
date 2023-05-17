@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Добавить урок:</h1>
    <div class="admin__content">
        <form action="{{ route('admin.testTasks.store') }}" class="admin__from" method="POST">
            @csrf
            @error('test_id')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('correct')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('answer_1')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('answer_2')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('answer_3')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('answer_4')
                <div class="error">{{ $message }}</div>
            @enderror
            <select placeholder="Test ID" name="test_id" class="lesson__area">
                @foreach($tests as $lesson)
                    <option value="{{ $lesson->id }}">{{ $lesson->id }}, ({{ $lesson->name }})</option>
                @endforeach
            </select>
            <input type="number" placeholder="Correct" name="correct" class="lesson__area">
            <input type="text" placeholder="Название урока" name="name" class="lesson__area">
            <input type="text" placeholder="Answer 1" name="answer_1" class="lesson__area">
            <input type="text" placeholder="Answer 2" name="answer_2" class="lesson__area">
            <input type="text" placeholder="Answer 3" name="answer_3" class="lesson__area">
            <input type="text" placeholder="Answer 4" name="answer_4" class="lesson__area">
            <input type="submit" value="Добавить" name="submit" class="lesson__start" style="width: 200px;">
        </form>
    </div>

@endsection
