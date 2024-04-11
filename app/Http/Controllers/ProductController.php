<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    $products = Product::all();

    return view('product.index', ['products' => $products]);
}

public function new()
{
    return view('product.new');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'priceHt' => 'required|numeric',
        'creationDate' => 'required|date',
    ]);

    Product::create([
        'name' => $request->name,
        'priceHt' => $request->priceHt,
        'creationDate' => $request->creationDate,
    ]);

    return redirect()->route('index');
}


}
