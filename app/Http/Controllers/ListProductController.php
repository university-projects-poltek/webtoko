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

    public function store(Request $request)
    {
        $produk = new Product;
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
  }