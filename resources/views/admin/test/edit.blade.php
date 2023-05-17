@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Редактировать урок:</h1>
    <div class="admin__content">
        <form action="{{ route('admin.test.update', $test->id ) }}" class="admin__from" method="POST">
            @csrf
            @method('PATCH')
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="text" placeholder="Название урока" name="name" class="lesson__area" value="{{$test->name}}">
            <input type="text" placeholder="Очки" name="points_multiplier" class="lesson__area" value="{{$test->points_multiplier}}">
            <input type="submit" value="Обновить" name="submit" class="lesson__start" style="width: 200px;">
        </form>
    </div>


@endsection
