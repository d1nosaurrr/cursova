<header class="admin-header flex-row">
    <div class="logo">
        <a href="{{route('main')}}">LOGO</a>
    </div>
    <div class="log flex-row">
        @guest()
            <div class="log-block"><a href="{{route('login')}}" class="login">Увійти в кабінет</a></div>
        @endguest
        @auth()
            <div class="log-block">
                <a href="{{route('logout')}}"
                   class="login">{{ 'Вітаємо, '.Auth::user()->name }}</a>
                <a class="logout " href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Вийти') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </div>
        @endauth
    </div>
</header>
<nav class="categories">
    @include('layout.nav')
</nav>
