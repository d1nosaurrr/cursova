@extends('schema.index')

@section('title', 'Кошик')
@section('content')
    <div class="row">
        <h2 class="p-3">Заповніть форму, і наш менеджер зв'яжеться з вами з 9:00 до 18:00 по буднях</h2>
        <form action="{{route('checkout')}}" method="post">
            @csrf
            <div class="input-group mt-3 g-3">
                <div class="form-control">Сума замовлення: <strong>{{$total}}</strong></div>
            </div>
            <div class="input-group mt-3 g-3">
                <input class="form-control" name="name" type="text" placeholder="Ваше ім`я" required>
            </div>
            <div class="input-group mt-3 g-3">
                <input class="form-control" name="phone" type="text" placeholder="Ваш номер телефона" required>
            </div>
            <button class="btn btn-outline-primary mt-3" type="submit">Оформити замовлення!</button>
        </form>
    </div>
@endsection
