@extends('admin.master')

@section('content')
    <form action="{{route('product.store')}}">
        @csrf
        <div class="form">
            <div class="title">
                <input type="text" name="title" placeholder="Назва товару" required>
            </div>
            <div class="category">
                <select name="category" class="category-selector">
                    @foreach($subcategories as $subcategory)
                        <option value='{{ $subcategory->id }}'>{{ $subcategory->title }}</option>
                    @endforeach
                </select>

            </div>
            <div class="price">
                <input type="text" name="price" placeholder="Ціна" required>
            </div>
            <div class="description">
                <textarea name="description" cols="30" rows="10" placeholder="Опис" required></textarea>
            </div>
            <div class="count">
                <input type="text" name="count" placeholder="Кількість на складі" required>
            </div>
            <button type="submit">Додати!</button>
        </div>
    </form>
@endsection
