@extends('admin.master')

@section('content')
    <a href="{{route('product.create')}}" class="add">Додати товвар</a>
    @if(isset($products))
        @foreach($products as $product)
            <table>
                <thead>
                <tr>
                    <th>id</th>
                    <th>Назва товару</th>
                    <th>Дії</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>
                        <a href="{{route('product.show',['id' => $product->id])}}" class="info">Деталі</a>
                        <a href="{{route('product.edit',['id' => $product->id])}}" class="edit">Редагувати</a>
                        <a href="{{route('product.destroy',['id' => $product->id])}}" class="delete">Видалити</a>
                    </td>
                </tr>
                </tbody>
            </table>
        @endforeach
    @endif
    @if(isset($product))
        Код товара: {{$product->id}}
        Назва: {{$product->title}}
        <a href="{{route('product.edit',['id' => $product->id])}}" class="edit">Редагувати</a>
        <a href="{{route('product.destroy',['id' => $product->id])}}" class="delete">Видалити</a>
    @endif
@endsection
