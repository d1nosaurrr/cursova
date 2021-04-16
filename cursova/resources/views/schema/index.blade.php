<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/auth.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>
@include('layout.header')

<main class="content">
    @yield('login')
    @yield('content')

    @if(isset($hit_products))
        <div class="popular">Топ товарів</div>
        <div class="grid-container">
            @foreach($hit_products  as $hit_product)
                <div class="grid-item">{{$hit_product->title}}</div>
                <div class="grid-item">2</div>
                <div class="grid-item">3</div>
                <div class="grid-item">4</div>
                <div class="grid-item">5</div>
            @endforeach
        </div>
@endif
<!--div class="promotions">
    <div class="disp">ddd
    </div>
</div>


<div class="news">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</div!-->
</main>

@include('layout.footer')
</body>
</html>
