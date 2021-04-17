<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index(Request $request)
    {
        $add = new Purchase();
        $add->name = $request->input('name');
        $add->phone = $request->input('phone');
        $add->timestamps = true;
        $add->save();
        return redirect()->route('main')->with('success', 'Очікуйте на дзвінок');
    }
}
