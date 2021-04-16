<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', ['categories' => (new Category)->categories(),
            'subcategories' => (new Category)->subcategories(),
            'products' => (new Product)->products()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create', ['categories' => (new Category)->categories(),
            'subcategories' => (new Category)->subcategories(),
            'products' => (new Product)->products()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        /*
        $add = new Product();
        $add->title = $request->input('title');
        $add->price = $request->input('price');
        $add->category = $request->input('category');
        $add->description = $request->input('description');
        $add->count = $request->input('count');
        $add->save();

        return redirect()->route('admin.index')->with('success', 'Товар додано');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.index', ['categories' => (new Category)->categories(),
            'subcategories' => (new Category)->subcategories(),
            'product' => (new Product)->product($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
