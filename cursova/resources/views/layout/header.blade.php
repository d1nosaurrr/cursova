<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('main')}}"><h2 class="text-warning">Logo</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar"
                    aria-label="Toggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <form class="navbar-nav mb-2 mb-lg-0 mx-auto" action="{{route('search')}}">
                    @csrf
                    <input type="search" class="form-control me-2" placeholder="Пошук..." name="q" required>
                    <button class="btn btn-outline-warning" type="submit">Пошук</button>
                </form>

                <div class="d-flex">
                    <a href="{{route('show-shop')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-warning text-decoration-none">
                        <img width="45" src="{{asset('/uploads/basket.svg')}}" alt="basket">
                        <span class="btn btn-outline-warning">Кошик
                            (<span>{{session()->has('shop') ? session()->get('shop')->quantity : '' }}</span>)</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
