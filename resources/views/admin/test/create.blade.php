@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Добавить урок:</h1>
    <div class="admin__content">
        <form action="{{ route('admin.test.store') }}" class="admin__from" method="POST">
            @csrf
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="text" placeholder="Название урока" name="name" class="lesson__area">
            <input type="text" placeholder="Множитель очков" name="points_multiplier" class="lesson__area">
            <input type="submit" value="Добавить" name="submit" class="lesson__start" style="width: 200px;">
        </form>
    </div>


@endsection
