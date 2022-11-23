<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/base.css">
    @yield('styles')
    <title>@yield('title')</title>
</head>

<body>

    <nav class="navbar">
        <div class="container">
            <a class="navbar__link" href="{{ route('index') }}">Главная</a>
            <div class="navbar__group">
                @guest
                <a class="navbar__link" href="{{ route('login') }}">Вход</a>
                <a class="navbar__link" href="{{ route('register') }}">Регистрация</a>
                @endguest

                @auth
                <p class="navbar__username">{{ Auth::user()->name }}</p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input class="navbar__link" type="submit" value="Выход">
                </form>
                @endauth
            </div>
        </div>
    </nav>

    @yield('content')

    @yield('scripts')
</body>

</html>
