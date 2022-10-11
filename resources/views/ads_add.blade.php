@extends('layouts.base')

@section('title', 'Добавление заявки')

@section('main')
<form>
    @csrf

    <div class="form__container">
        <label for="txtTitle">Название</label>
        <input name="title" id="txtTitle" class="input" id="txtTitle">
    </div>
    <div class="form__container">
        <label for="txtDescription">Описание заявки</label>
        <textarea name="description" class="input" id="txtDescription"></textarea>
    </div>
    <div class="form__container">
        <label for="slCategory">Выбор категории</label>
        <select name="category" class="input" id="slCategory">
            <option>Выберите категорию</option>
            
            @foreach ($categories as $category)
                <option>{{ $category->title }}</option>
            @endforeach

        </select>
    </div>
    <input type="submit" class="form__btn" value="Добавить">
</form>
@endsection