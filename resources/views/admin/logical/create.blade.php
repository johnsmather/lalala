@extends('admin.layouts.app')

@section('content')

    <h1 class="admin__title">Добавить урок:</h1>
    <div class="admin__content">
        <form action="{{ route('admin.logical.store') }}" class="admin__from" method="POST" enctype="multipart/form-data">
            @csrf
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
            <input type="text" placeholder="Название урока" name="name" class="lesson__area">
            <textarea type="text" placeholder="Текст урока" name="text" class="lesson__area"></textarea>
            <input type="text" placeholder="Ответ" name="answer" class="lesson__area">
            <input type="text" placeholder="Множитель очков" name="points_multiplier" class="lesson__area">
            <label for="select_img">Images</label>
            <select placeholder="Image" name="img" class="lesson__area" id="select_img">
                <option value="0">Нет</option>
                <option value="1" >Да</option>
            </select>
            <div id="img_choose" class="hidden">
                <label class="input-file">
                    <span class="input-file-text" type="text">Вопрос</span>
                    <input type="file" name="main_image">
                    <span class="input-file-btn">Выберите файл</span>
                </label>
            </div>
            <input type="submit" value="Добавить" name="submit" class="lesson__start" style="width: 200px;">
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
