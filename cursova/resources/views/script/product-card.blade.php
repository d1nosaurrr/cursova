@extends('schema.index')

@foreach($product as $row)
    @section('title',$row->title)

@section('content')

    <div class="flex-card-container flex-col">
        <div class="flex-title">
            {{$row->title}}
        </div>
        <div class="flex-info flex-row">
            <div class="flex-img">
                <img src="{{asset('/uploads/' . $row->image)}}" alt="">
            </div>
            <div class="price-rate flex-col">
                <div class="flex-price">
                    Ціна: {{$row->price}} грн
                </div>
                <div class="flex-rate">
                    {{$row->rate}}<b class="star"></b>
                </div>
                <div class="flex-description">
                    Опис:
                    <p>
                        {{$row->description}}
                    </p>
                </div>
            </div>
            <a href="{{route('buy')}}" class="buy">КУПИТИ</a>
        </div>
    </div>
@endsection
@endforeach
