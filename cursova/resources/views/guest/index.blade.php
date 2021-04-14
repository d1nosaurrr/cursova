<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <title>Головна сторінка</title>
</head>
<body>

<header class="header flex-row">
    @include('layout.header')
</header>
<main>
    <div class="nav">
        <nav id="primary_nav_wrap">
            @include('layout.nav')
        </nav>
    </div>
    @yield('content')
    <div class="items">

    </div>
    <div class="news">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</main>
<footer class="footer flex-col">
    @include('layout.footer')
</footer>
</body>
</html>
