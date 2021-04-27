<nav class="d-flex justify-content-center mt-2">
    @if(isset($categories))
        @foreach($categories as $category)
            <div class="btn-group">
                <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    {{ $category->title }}
                </button>
                <ul class="dropdown-menu">
                    @foreach($subcategories as $subcategory)
                        @if($category->id == $subcategory->parent)
                            <li><a class="dropdown-item" href="{{ route('category',['id'=>$subcategory->id])}}"> {{ $subcategory->title }}</a></li>
                @endif
                @endforeach
            </div>

        @endforeach
    @endif
</nav>
