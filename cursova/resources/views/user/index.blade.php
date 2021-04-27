@extends('schema.index')

@section('title','Інтернет магазин сантехніки')
@section('content')
    @if(isset($success))
        <h1 class="msg">{{$success}}</h1>
    @endif
    @if(isset($hit_products))
        <div class="popular">Топ товарів</div>

        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            @foreach($hit_products  as $hit_product)

                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal" style="height: 75px;">
                                {{$hit_product->title}}
                            </h4>
                        </div>
                        <div class="card-body" style="height: 400px">
                            <img src="{{asset('/uploads/'.$hit_product->image)}}" class="w-100 h-100" alt=""/>
                        </div>
                        <div class="card-body">
                            <a href="{{route('product-card',['id'=>$hit_product->id])}}"
                               class="w-100 btn btn-lg btn-outline-primary">
                                Деталі
                            </a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
        @endif
        </div>
@endsection
