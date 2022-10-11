@extends('layouts.base')

@section('title', 'Мои заявки')

@section('main')
    <section class="ads-section">
        <div class="container">
            <div class="control-panel">
                <h1>Добро пожаловать {{ $username }}</h1>
                <a class="control-panel__link-action" href="{{ route('ads.add') }}">Создать заявку</a>
            </div>
            <div class="ads-container">
            @foreach ($adsList as $ads)

                <div class="ads">
                    <img class="ads__img" src="{{ $ads->img_url }}">
                    <div class="ads__text">
                        <h2 class="ads__title"> {{ $ads->title }} </h2>
                        <p class="ads__user">Категория: {{ $ads->category->title }} </p>
                        <p class="ads__user">Дата: {{ $ads->created_at }} </p>
                    </div>
                </div>

            @endforeach
            </div>
        </div>
    </section>
@endsection
