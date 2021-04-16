<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('guest.index', ['categories' => (new Category)->categories(),
            'subcategories' => (new Category)->subcategories()]);

    }

    public function category($id)
    {
        $category = Category::where('id', $id)->first();
        return view('layout.category', compact('categories'));
    }
}
