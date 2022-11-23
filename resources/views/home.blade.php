@extends('layouts.base')

@section('styles')
    <link rel="stylesheet" href="/styles/home.css">
@endsection

@section('content')
    <section class="posts-list-user">
        <div class="container">
            
            @foreach ($posts as $post)
                <div class="post__posts-list-user">
                    <img class="post__img" src="{{ $post->img_url }}">
                    <div class="post__container">
                        <h2 class="post__field">{{ $post->name }}</h2>
                        <p class="post__field">{{ $post->category->name }}</p>
                        <p class="post__field">{{ $post->date }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
@endsection
