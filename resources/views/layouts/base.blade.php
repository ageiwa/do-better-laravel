<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/main.css">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <a class="navbar__link" href="{{ route('index') }}">Главная</a>
            <a class="navbar__link" href="{{ route('login') }}">Вход</a>
            <a class="navbar__link" href="{{ route('register') }}">Регистрация</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" class="navbar__link" value="Выход">
            </form>
        </div>
    </nav>
    @yield('main')
</body>
</html>