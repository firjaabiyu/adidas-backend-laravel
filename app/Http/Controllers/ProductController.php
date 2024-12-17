<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $items = Product::all();
        return view('pages.product.indexproduct', compact('items'));
    }

    public function create()
    {
        return view('pages.product.createproduct');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required',
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'required',
        ]);



        $filename = time() . '.' . $request->image->extension();
        $request->image->storeAs('product', $filename, 'public');

        $data = $request->all();
        $data['iamge'] = $filename;

        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Item created successfully.');
    }
}
