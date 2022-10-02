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
    {{-- <nav class="navbar">
        <div class="container">
            <img class="navbar__logo" src="/images/logo.jpg">
            <div class="navbar__log-reg-container">
                <a class="navbar__btn" href="#">Вход</a>
                <a class="navbar__btn" href="#">Регистрация</a>
            </div>
        </div>
    </nav> --}}
    @yield('main')
</body>
</html>