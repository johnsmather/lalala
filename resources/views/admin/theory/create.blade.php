@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Добавить урок:</h1>
    <div class="admin__content">
        <form action="{{ route('admin.theory.store') }}" class="admin__from" method="POST" enctype="multipart/form-data">
            @csrf
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('text')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="text" placeholder="Название урока" name="name" class="lesson__area">
            <textarea type="text" placeholder="Текст урока" name="text" class="lesson__area"></textarea>
            <input type="submit" value="Добавить" name="submit" class="lesson__start" style="width: 200px;">
        </form>
    </div>
    <img src="asdasd" alt="">
@endsection
