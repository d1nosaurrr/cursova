<ul class="dropdown-menu" role="menu">
    @if(isset($categories))
        @foreach($categories as $category)
            <li class="dropdown-submenu">
                <span>
                    {{ $category->title }}
                </span>
                <ul class="dropdown-menu">
                    @foreach($subcategories as $subcategory)
                        @if($category->id == $subcategory->parent)
                            <li>
                                <a href="{{ route('category', $subcategory->id) }}">
                                    {{ $subcategory->title }}
                                </a>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </li>
        @endforeach
    @endif
</ul>
