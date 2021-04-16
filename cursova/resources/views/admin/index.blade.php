@extends('admin.master')

@section('content')
    <a href="{{route('product.create')}}" class="add">Додати товар</a>
    @if(isset($products))
        <table class="product-list">
            <thead>
            <tr>
                <th>id</th>
                <th>Назва товару</th>
                <th>Дії</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>

                    <td>
                        {{$product->id}}
                    </td>
                    <td>
                        <details class="more">
                            <summary>  {{$product->title}}</summary>
                            <p>Код товара: {{$product->id}}</p>
                           <p>Ціна: {{$product->price}}<br>
                            Кількість на складі: {{$product->count}}</p>
                        </details>
                    </td>
                    <td>
                        <a href="{{route('product.edit',['id' => $product->id])}}" class="edit">Редагувати</a>
                        <a href="{{route('product.destroy',['id' => $product->id])}}" class="delete">Видалити</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
