<ul class="menu">
    @if(isset($categories))
    @foreach($categories as $category)
        <li>
            <a href="{{ route('category', $category->id) }}">
                {{ $category->title }}
            </a>
            <ul class="submenu">
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
