@extends('auth.master')

@section('title', "Вхід до акаунту")

@section('content')
    <form class="login-form" action="{{ route('register') }}" method="POST">
        @csrf
        <h1>Вхід</h1>
        <input type="email" class="email" placeholder="Ваш Email" required>
        <input type="password" class="password" placeholder="Пароль" required>
        <button type="submit" class="submit" >Війти</button>
        <a href="{{route('register')}}" class="register">Реєстрація</a>
    </form>
@endsection
