@extends('schema.index')

@section('title','Інтернет магазин сантехніки')
@section('content')
    @if(isset($success))
        <h1 class="msg">{{$success}}</h1>
    @endif
@endsection
