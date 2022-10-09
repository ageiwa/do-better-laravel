@extends('layouts.base')

@section('title', 'Вход')

@section('main')
    <section class="login-section">
        <div class="container">
            <h1 class="login-section__header">Вход</h1>

            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="login-form__container">
                    <label for="email" class="login-container__title">{{ __('Email Address') }}</label>

                    <div class="login-form__input">
                        <input id="email" type="email" class="email-input @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="login-form__container">
                    <label for="password" class="password-container__title">{{ __('Password') }}</label>

                    <div class="login-form__input">
                        <input id="password" type="password" class="password-input @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="login-form__container">
                    <input class="login-form__checkbox" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="login-form__checkbox-title" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="login-form__container">
                    <button type="submit" class="login-form__btn">
                        {{ __('Войти') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="login-form__link" href="{{ route('password.request') }}">
                            {{ __('Забыли пароль?') }}
                        </a>
                    @endif
                </div>

            </form>
        </div>
    </section>
@endsection
