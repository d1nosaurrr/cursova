<header class="header flex-row">
    <div class="logo">
        <a href="{{route('main')}}">LOGO</a>
    </div>
    <div class="search">
        <form action="{{route('search')}}" method="get">
            @csrf
            <input type="text" name="q" placeholder="Пошук товару">
            <button value="submit">Пошук</button>
        </form>
    </div>
    <div class="login">
        <a href="{{route('login')}}" class="login-link">Увійти в кабінет</a>
    </div>
</header>
<nav class="categories">
    @include('layout.nav')
</nav>


