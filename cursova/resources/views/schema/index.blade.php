<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
@include('layout.header')

<main class="content flex-col">
    @yield('login')
    @yield('content')



    @if(isset($hit_products))
        <div class="popular">Топ товарів</div>
        <div class="wrap-container">
            @foreach($hit_products  as $hit_product)
                <div class="wrap-item">
                    <p class="title">{{$hit_product->title}}</p>
                    <img src="{{asset('/uploads/'.$hit_product->image)}}" alt=""/>
                    <a href="{{route('buy')}}">Купити</a>
                </div>
            @endforeach
        </div>
    @endif
</main>

@include('layout.footer')
</body>
</html>
