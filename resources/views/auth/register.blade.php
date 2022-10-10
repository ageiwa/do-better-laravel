@extends('layouts.base')

@section('title', 'Регистрация')

@section('main')
    <section class="form-section">
        <div class="container">
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form__container">
                    <label for="name" class="container__title">{{ __('Name') }}</label>

                    <div class="form__input">
                        <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

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
                    <label for="password-confirm" class="container__title">{{ __('Confirm Password') }}</label>

                    <div class="form__input">
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required
                            autocomplete="new-password">
                    </div>
                </div>

                <div class="form__container">
                    <button type="submit" class="form__btn">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
