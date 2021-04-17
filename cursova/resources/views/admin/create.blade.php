@extends('admin.master')

@section('content')
    <a href="{{route('product.index')}}">< На головну</a>
    <form action="{{route('product.store')}}" method="post" class="crud-form"
          enctype="multipart/form-data">
        @csrf
        <div class="datainput">
            <input class="validate" name="title" required="" type="text" value=''/>
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
            <input class="validate" name="price" required="" type="number" value=''/>
            <span class="highlight"></span><span class="bar"></span>
            <label>Ціна</label>
        </div>
        <div class="datainput">
            <input class="validate" name="count" type="number" value='' required/>
            <span class="highlight"></span><span class="bar"></span>
            <label>Кількість на складі</label>
        </div>
        <div class="datainput">
            <input class="validate" name="image" type="file" value=''/>
            <span class="highlight"></span><span class="bar"></span>
            <label>Фото</label>
        </div>
        <div class="datainput">
            <textarea placeholder='' name="description" maxlength='5000' row='1' required></textarea>
            <span class="highlight"></span><span class="bar"></span>
            <label>Опис</label>
        </div>
        <button class="send_form" type="submit">Додати</button>
    </form>
@endsection
