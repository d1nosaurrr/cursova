@extends('admin.master')

@section('title',"Список замовлень")

@section('content')
    @if(isset($orders))
        <table class="product-list">
            <thead>
            <tr>
                <th>id замовлення</th>
                <th>Назва товару</th>
                <th>К-ть</th>
                <th>Ім'я</th>
                <th>Номер телефона</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>

                    <td>
                        {{$order->id}}
                    </td>
                    <td>
                        @foreach(unserialize(($order->products)) as $product)
                            {{ $product['title']}} <br>
                        @endforeach
                    </td>
                    <td>
                        @foreach(unserialize(($order->products)) as $product)
                        {{ $product['qty']}} <br>
                        @endforeach
                    </td>
                    <td>
                        {{$order->name}}
                    </td>
                    <td>
                        {{$order->phone}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection

