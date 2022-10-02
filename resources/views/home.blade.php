@extends('layouts.base')

@section('title', 'Главная')

@section('main')

    <main class="main">
        <div class="overlay">
            <div class="container">
                <nav class="navbar">
                    <a class="navbar__btn" href="#">Вход</a>
                    <a class="navbar__btn" href="#">Регистрация</a>
                </nav>
                <div class="main__wrap">
                    <h1 class="main__title">Наш портал помогает содержать город в чистоте и порядке</h1>
                    <a class="main__btn" href="#">Сообщить о проблеме</a>
                </div>
            </div>
        </div>
    </main>

@endsection