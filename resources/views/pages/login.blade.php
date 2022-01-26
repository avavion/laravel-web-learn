@extends('layouts.main-layout')

@section('title', 'Fitness - авторизация')

@section('content')
    <section class="section login" id="login">
        <div class="container">
            <form class="form form-login" action="{{ route('login') }}" method="POST" id="formLogin"
                  accept-charset="UTF-8">
                @csrf

                <div class="form-control">
                    <label for="emailInput" aria-label="Email input">Электронная почта</label>
                    <input id="emailInput" type="email" name="email">
                </div>

                <div class="form-control">
                    <label for="passwordInput" aria-label="Password input">Пароль</label>
                    <input id="passwordInput" type="password" name="password">
                </div>

                <button type="submit" aria-label="Login">Авторизоваться</button>
            </form>
        </div>
    </section>
@endsection
