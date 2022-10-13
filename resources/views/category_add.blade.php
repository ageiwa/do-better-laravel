@extends('layouts.base');

@section('title', 'Создание категории');

@section('main')
    <section>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <input type="text" name="title">
            <input type="submit" value="Создать">
        </form>
    </section>
@endsection