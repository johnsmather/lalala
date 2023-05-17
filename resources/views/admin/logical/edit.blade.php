@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Редактировать урок:</h1>
    <div class="admin__content">
        <form action="{{ route('admin.logical.update', $logical->id ) }}" class="admin__from" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror
            @error('text')
            <div class="error">{{ $message }}</div>
            @enderror
            @error('answer')
            <div class="error">{{ $message }}</div>
            @enderror
            @error('point_multiplier')
            <div class="error">{{ $message }}</div>
            @enderror
            @error('img')
            <div class="error">{{ $message }}</div>
            @enderror
            <input type="text" placeholder="Название урока" name="name" class="lesson__area" value="{{$logical->name}}">
            <textarea type="text" placeholder="Текст урока" name="text" class="lesson__area">{{$logical->text}}</textarea>
            <input type="text" placeholder="Ответ" name="answer" class="lesson__area" value="{{$logical->answer}}">
            <input type="text" placeholder="Множитель очков" name="points_multiplier" class="lesson__area" value="{{ $logical->points_multiplier }}">
            <label for="select_img">Images</label>
            <select placeholder="Image" name="img" class="lesson__area" id="select_img">
                @if($logical->img == 1)
                    <option value="0">Нет</option>
                    <option value="1" selected>Да</option>
                @else
                    <option value="0" selected>Нет</option>
                    <option value="1">Да</option>
                @endif
            </select>
            <div id="img_choose" class="hidden">
                <label class="input-file">
                    <span class="input-file-text" type="text">Вопрос</span>
                    <input type="file" name="main_image">
                    <span class="input-file-btn">Выберите файл</span>
                </label>
            </div>
            <input type="submit" value="Обновить" name="submit" class="lesson__start" style="width: 200px;">
        </form>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $('.input-file input[type=file]').on('change', function(){
            let file = this.files[0];
            $(this).closest('.input-file').find('.input-file-text').html(file.name);
        });
    </script>
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/imgCheckbox.js') }}"></script>

@endsection
