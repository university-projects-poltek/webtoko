<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function show()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }
}
