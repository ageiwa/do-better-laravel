@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="/styles/detail.css">
@endsection

@section('title', $post->name)

@section('content')
    <section class="post">
        <div class="container">
            <div class="post__container">
                <p class="post__username">{{ $post->user->name }}</p>
                <p class="post__date">{{ $post->date }}</p>
                <p class="post__category">{{ $post->category->name }}</p>
            </div>
            <div class="post__container">
                <p class="post__desc">{{ $post->desc }}</p>
            </div>
            <img class="post__img" src="{{ $post->img_url }}" alt="Фото">
        </div>
    </section>
@endsection