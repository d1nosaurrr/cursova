@extends('schema.index')

@section('title', 'Кошик')

@section('content')
    @if(session()->has('cart'))
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Назва</th>
                <th scope="col">Кількість</th>
                <th scope="col">Ціна</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product['title']}}</th>
                    <td><span>{{$product['qty']}}</span></td>
                    <td>{{$product['price']}} грн</td>
                </tr>
                </tr>
            @endforeach
            </tbody>
        </table>

            <a class="btn btn-outline-primary w-25" href="{{route('checkout')}}">Оформити замовлення!</a>
            <a class="btn btn-outline-secondary w-25" href="{{route('main')}}">Продовжити покупки</a>


    @else
        <div class="row">
            <div class="px-4 py-5 my-5 text-center">
                <h1 class="display-5 fw-bold">Кошик порожній</h1>
                <div class="col-lg-6 mx-auto">
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="{{route('main')}}" class="btn btn-secondary btn-lg px-4 me-sm-3">За покупками!</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

