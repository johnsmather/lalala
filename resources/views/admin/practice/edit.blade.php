@extends('admin.layouts.app')

@section('content')

<h1 class="admin__title">Редактировать урок:</h1>
<div class="admin__content">
  <form action="{{ route('admin.practice.update', $practice->id ) }}" class="admin__from" method="POST">
    @csrf
    @method('PATCH')
    <input type="text" placeholder="Название урока" name="name" class="lesson__area" value="{{$practice->name}}">
    <textarea type="text" placeholder="Действие" name="action" class="lesson__area">{{$practice->action}}</textarea>
      <input type="text" placeholder="script" name="script" class="lesson__area" value="{{ $practice->script }}">
    <input type="submit" value="Обновить" name="submit" class="lesson__start" style="width: 200px;">
  </form>
</div>


@endsection
