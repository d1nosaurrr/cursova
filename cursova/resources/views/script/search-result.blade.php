@extends('schema.index')

@section('title','Результати пошуку')
@section('content')
    <div class="wrap-container">
        @foreach($products as $product)
            <div class="wrap-item">
                <a href="{{route('product-card',['id' => $product->id])}}">
                    {{$product->title}}>
                </a>
            </div>
        @endforeach
    </div>
@endsection
