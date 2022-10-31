@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="/styles/index.css">
@endsection

@section('title', 'Главная')

@section('content')
    <section class="posts-list">
        <div class="container">

            @foreach ($posts as $post)
                <div class="post__posts-list">
                    <img class="post__img" src="{{ $post->img_url }}">
                    <div class="post__container">
                        <h2 class="post__field">{{ $post->name }}</h2>
                        <p class="post__field">{{ $post->category_id }}</p>
                        <p class="post__field">{{ $post->date }}</p>
                    </div>
                    <a class="post__link" href="#">Подробнее</a>
                </div>
            @endforeach

        </div>
    </section>
@endsection