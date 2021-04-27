@extends('admin.master')

@section('title', 'Admin home')

@section('content')
    @if(isset($products))
        <table class="product-list">
            <thead>
            <tr>
                <th>id</th>
                <th>Назва товару</th>
                <th class="buttons">Дії</th>
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
                    <td class="buttons flex-row">
                        <a href="{{route('product.show',['id' => $product->id])}}" class="info">Переглянути</a>
                        <a href="{{route('product.edit',['id' => $product->id])}}" class="edit">Редагувати</a>
                        <form action="{{ route('product.destroy' , $product->id)}}" method="POST">
                            <input name="_method" type="hidden" value="DELETE">
                            {{ csrf_field() }}
                            <button type="submit" class="delete">Видалити</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
