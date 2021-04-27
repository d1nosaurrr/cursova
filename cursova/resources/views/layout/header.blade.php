<header class="py-3 mb-4 border-bottom bg-dark text-light">
    <div class="container d-flex flex-wrap justify-content-center">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-warning text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">LOGO</span>
        </a>
        <form class="d-flex col-12 col-lg-auto mb-3 mb-lg-0" action="{{route('search')}}">
            @csrf
            <input type="search" class="form-control me-2" placeholder="Пошук..." name="q">
            <button class="btn btn-outline-warning" type="submit">Пошук</button>
        </form>
    </div>
</header>
@include('layout.nav')
