@extends('layouts.base')

@section('title', 'Мои заявки')

@section('main')
    <section class="ads-section">
        <h1>Мои заявки</h1>
        <div class="container">
            @foreach ($adss as $ads)

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
    </section>
@endsection
