<ul class="menu">
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
</ul>
<!--
SELECT p.title,p.price,sb.title FROM product p INNER JOIN subcategories  sb on p.category = sb.id



!-->
