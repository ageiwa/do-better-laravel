@extends('layouts.base')

@section('title', 'Вход')

@section('main')
    <section class="form-section">
        <div class="container">
            <h1 class="form-section__header">Вход</h1>

            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form__container">
                    <label for="email" class="container__title">{{ __('Email Address') }}</label>

                    <div class="form__input">
                        <input id="email" type="email" class="input @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form__container">
                    <label for="password" class="container__title">{{ __('Password') }}</label>

                    <div class="form__input">
                        <input id="password" type="password" class="input @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form__container">
                    <input class="form__checkbox" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form__checkbox-title" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="form__container">
                    <button type="submit" class="form__btn">
                        {{ __('Войти') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="form__link" href="{{ route('password.request') }}">
                            {{ __('Забыли пароль?') }}
                        </a>
                    @endif
                </div>

            </form>
        </div>
    </section>
@endsection
