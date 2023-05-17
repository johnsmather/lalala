@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Редактировать урок:</h1>
    <div class="admin__content">
        <form action="{{ route('admin.theory.update', $theory->id ) }}" class="admin__from" method="POST">
            @csrf
            @method('PATCH')
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
            @error('text')
                <div class="error">{{ $message }}</div>
            @enderror
            <input type="text" placeholder="Название урока" name="name" class="lesson__area" value="{{$theory->name}}">
            <textarea type="text" placeholder="Текст урока" name="text" class="lesson__area">{{$theory->text}}</textarea>
            <input type="submit" value="Обновить" name="submit" class="lesson__start" style="width: 200px;">
        </form>
    </div>


@endsection
