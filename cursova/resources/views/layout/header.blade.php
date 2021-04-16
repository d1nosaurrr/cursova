<header class="header flex-row">
    <nav class="nav-list flex-row">
        <div><a href="{{route('delivery')}}">Доставка/Оплата</a></div>
        <div><a href="{{route('contact')}}">Контакти</a></div>
    </nav>
    <div class="logo">
        <a href="{{route('main')}}">LOGO</a>
    </div>
    <div class="log flex-row">
        <div><a href="{{route('login')}}" class="login">Увійти в кабінет</a></div>
    </div>
</header>
<div class="categories">
    <nav class="category">
        @include('layout.nav')
    </nav>
</div>
