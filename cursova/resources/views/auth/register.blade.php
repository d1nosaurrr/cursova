@extends('auth.master')
@extends('layouts.app')


@section('title','Реєстрація')

@section('content')>
<form method="POST" class="register-form" action="{{ route('register') }}">
    @csrf
    <h1>Реєстрація</h1>
    <input type="text" class="name" placeholder="Ваше ім'я" required>
    <input type="email" class="email" placeholder="Ваш Email" required>
    <input type="password" class="password" name="password" placeholder="Пароль" required>
    <input type="password" class="password" name="password2" placeholder="Підтвердження пароля" required>
    <button type="submit" class="submit">Реєстрація</button>
    <a href="{{route('login')}}" class="register">Назад</a>
</form>
@endsection

