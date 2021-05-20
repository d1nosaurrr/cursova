<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
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
     * @return Application|Factory|View
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
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $add = new Product();
        $add->title = $request->input('title');
        $add->price = $request->input('price');
        $add->category_id = $request->input('category');
        $add->description = $request->input('description');
        $add->count = $request->input('count');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->image->store('uploads', 'public');
            $add->image = $fileName;
        } else {
            $add->image = '';
        }

        $add->save();

        return redirect()->route('product.index')->with('success', 'Товар додано');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin.info', ['categories' => (new Category)->categories(),
            'product' => (new Product)->product_by_id($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        return view('admin.edit', ['categories' => (new Category)->categories(),
            'subcategories' => (new Category)->subcategories(),
            'products' => (new Product)->product_by_id($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        DB::table('product')
            ->where('id', $id)
            ->update([
                'title' => $request->input('title'),
                'price' => $request->input('price'),
                'category_id' => $request->input('category'),
                'description' => $request->input('description'),
                'count' => $request->input('count'),
            ]);

        return redirect()->route('product.index')->with('success', 'Товар відредаговано');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public
    function destroy($id)
    {
        DB::table('product')->where('id', '=', $id)->delete();
        return redirect()->route('product.index')->with('success', 'Товар видалено');
    }
}
