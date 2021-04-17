<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        foreach (['hit', 'new', 'recommend'] as $field) {
            if ($request->has($field)) {
                $filter = (new Product)->filter($field);
            }
        }

        return view('user.index', ['categories' => (new Category)->categories(),
            'subcategories' => (new Category)->subcategories(),
            'hit_products' => (new Product)->hit_products()]);

    }

    public
    function product_card($id)
    {

        return view('script/product-card', ['categories' => (new Category)->categories(),
            'subcategories' => (new Category)->subcategories(),
            'product' => (new Product)->product_by_id($id)]);
    }

    public
    function category_nav($id)
    {
        return view('script.category', ['categories' => (new Category)->categories(),
            'subcategories' => (new Category)->subcategories(),
            'products' => (new Product)->product_by_category($id)]);
    }

    public
    function search(Request $request)
    {
        $title = $request->q;
        return view('script.search-result',
            ['categories' => (new Category)->categories(),
                'subcategories' => (new Category)->subcategories(),
                'products' => (new Product)->product_by_title($title)]);
    }
}
