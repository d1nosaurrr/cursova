<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('user.index', ['categories' => (new Category)->categories(),
            'subcategories' => (new Category)->subcategories(),
            'hit_products' => (new Product)->hit_products()]);

    }

    public function category($id)
    {
        $category = Category::where('id', $id)->first();
        return view('layout.category', compact('categories'));
    }
}
