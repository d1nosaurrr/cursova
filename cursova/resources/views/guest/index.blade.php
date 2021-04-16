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
    <title>Головна сторінка</title>
</head>
<body>
@include('layout.header')
<main class="content flex-col">
@yield('login')
@yield('content')
<!--div class="promotions">
        <div class="disp">ddd
        </div>
    </div>

        <div class="popular">Топ товарів</div>
        <div class="grid-container">
            <div class="grid-item">1</div>
            <div class="grid-item">2</div>
            <div class="grid-item">3</div>
            <div class="grid-item">4</div>
            <div class="grid-item">5</div>
        </div>
    <div class="news">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div!-->
</main>

<footer class="footer flex-col">
    @include('layout.footer')
</footer>
</body>
</html>
