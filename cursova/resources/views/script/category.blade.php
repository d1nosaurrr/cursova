@extends('schema.index')

@section('title','Інтернет магазин сантехніки')
@section('content')

    <form class="filter-form">
        @csrf
        <div class="filter">
            <select name="" id="" class="filter-selector">
                <option value="1" name="rate">За рейтингом</option>
                <option value="2">За зниженням ціни</option>
                <option value="2">За збільшенням ціни</option>
            </select>
        </div>
        <button class="filter-submit" type="submit">Фільтрувати</button>
    </form>
    <div class="wrap-container">
        @foreach($products as $product)
            <div class="wrap-item flex-col">
                <img src="{{asset('/uploads/' . $product->image)}}" alt=""/>
                <a href="{{route('product-card',['id' => $product->id])}}">
                    <p class="title">{{$product->title}}</p>
                    </a>
            </div>
        @endforeach
    </div>
@endsection
