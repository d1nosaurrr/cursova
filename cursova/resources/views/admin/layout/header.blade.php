<header class="admin-header flex-row">
    <div class="logo">
        <a href="{{route('product.index')}}">LOGO</a>
    </div>
    <div class="log">
        <div class="log-block flex-row">
            <div class="login">{{ 'Вітаємо, '.Auth::user()->name }}</div>
            <a class="logout " href="{{ route('logout') }}"
               onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Вийти') }}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>
        </div>
    </div>
</header>
