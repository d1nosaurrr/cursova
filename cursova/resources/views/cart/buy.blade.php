@extends('schema.index')

@section('title','Оформлення замовлення')
@section('content')
    <form action="{{route('confirm-purchase')}}" class="buy-form">
        @csrf
        <h2>Заповніть форму, та наш менеджер зв`єжеться з вами з 9:00 до 18:00 пн-пт</h2>
        <div class="datainput">
            <input class="validate" name="name" required="" type="text" value=''/>
            <span class="highlight"></span><span class="bar"></span>
            <label>Ваше ім`я</label>
        </div>
        <div class="datainput">
            <input class="validate" name="phone" required="" type="text" value=''/>
            <span class="highlight"></span><span class="bar"></span>
            <label>Ваш номер телефона</label>
        </div>
        <button type="submit" class="send_form">Надіслати</button>
    </form>
@endsection
