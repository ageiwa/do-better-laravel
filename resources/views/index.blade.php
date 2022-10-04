@extends('layouts.base')

@section('title', 'Главная')

@section('main')

    <main class="main">
        <div class="overlay">
            <div class="container">
                <nav class="navbar">
                    <a class="navbar__btn" href="{{ route('login') }}">Вход</a>
                    <a class="navbar__btn" href="{{ route('register') }}">Регистрация</a>
                </nav>
                <div class="main__wrap">
                    <h1 class="main__title">Наш портал помогает содержать город в чистоте и порядке</h1>
                    <a class="main__btn" href="#">Сообщить о проблеме</a>
                </div>
            </div>
        </div>
    </main>

    <section class="ads-section">
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