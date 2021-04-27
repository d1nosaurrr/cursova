<header class="py-3 mb-4 border-bottom bg-dark text-light">
    <div class="container d-flex flex-wrap justify-content-center">
        <a href="{{route('product.index')}}"
           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-light text-decoration-none">
            <span class="fs-4 text-success">LOGO</span>
        </a>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Admin
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{route('product.create')}}">Додати товар</a></li>
                <li><a class="dropdown-item" href="#">Повідомлення</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        {{ __('Вийти') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
