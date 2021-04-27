@extends('schema.index')

@section('title','Результати пошуку')
@section('content')
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        @foreach($products as $product)

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal" style="height: 75px;">
                            {{$product->title}}
                        </h4>
                    </div>
                    <div class="card-body" style="height: 400px">
                        <img src="{{asset('/uploads/'.$product->image)}}" class="w-100 h-100" alt=""/>
                    </div>
                    <div class="card-body">
                        <a href="{{route('product-card',['id'=>$product->id])}}"
                           class="w-100 btn btn-lg btn-outline-primary">
                            Деталі
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
