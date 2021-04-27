@extends('admin.master')

@foreach($products as $product)
    @section('title','Редагування '.$product->title )

@section('content')
    <div class="container">
        <a href="{{route('product.index')}}">< На головну</a>
        <form action="{{route('product.update',['id'=>$product->id])}}" class="crud-form" method="post">
            <input name="_method" type="hidden" value="PUT">
            @csrf
            <div class="datainput">
                <input class="validate" name="title" required="" type="text" value='{{$product->title}}'/>
                <span class="highlight"></span><span class="bar"></span>
                <label>Назва товару</label>
            </div>
            <div class="datainput">
                <select name="category">
                    @foreach($subcategories as $subcategory)
                        <option value='{{ $subcategory->id }}'>{{ $subcategory->title }}</option>
                    @endforeach
                </select>
                <label>Категорії</label>
            </div>
            <div class="datainput">
                <input class="validate" name="price" required="" type="number" value='{{$product->price}}'/>
                <span class="highlight"></span><span class="bar"></span>
                <label>Ціна</label>
            </div>
            <div class="datainput">
                <input class="validate" name="count" required type="number" value='{{$product->count}}'/>
                <span class="highlight"></span><span class="bar"></span>
                <label>Кількість на складі</label>
            </div>
            <div class="datainput">
                <textarea placeholder='' name="description" maxlength='5000' row='1'
                          required>{{$product->description}}</textarea>
                <span class="highlight"></span><span class="bar"></span>
                <label>Опис</label>
            </div>
            <button class="send_form" type="submit">Редагувати</button>
        </form>
    </div>
@endsection
@endforeach
