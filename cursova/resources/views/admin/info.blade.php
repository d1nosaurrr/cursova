@extends('admin.master')

@foreach($product as $row)
    @section('title',$row->title)

@section('content')
    <div class="col-md-6 w-100">
        <a href="{{route('product.index')}}">До списку</a>
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4  shadow-sm position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0">{{$row->title}}</h3>
                <div class="mb-0 text-muted">{{$row->rate}}
                    <img src="{{asset('/uploads/star-fill.svg')}}" alt="rate">
                </div>
                <div class="card-text my-1">
                    <h4><strong>Ціна: {{$row->price}} грн</strong></h4>
                </div>
                <div class="card-text mb-1"> Опис:
                    <p>
                        {{$row->description}}
                    </p>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img class="bd-placeholder-img" style="height: 500px; width: 400px" src="{{asset('/uploads/' . $row->image)}}" alt="{{$row->title}}">
            </div>
        </div>
    </div>

@endsection
@endforeach
