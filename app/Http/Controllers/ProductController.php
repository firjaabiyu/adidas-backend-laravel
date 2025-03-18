<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $type = $request->input('type');
        
        $items = Product::query()
        ->when($search, function($query, $search){
            $query->where(function($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                      ->orWhere('price', 'like', '%' . $search . '%')
                      ->orWhere('type', 'like', '%' . $search . '%')
                      ->orWhere('category', 'like', '%' . $search . '%');
            });
        })
        ->when($type && $type !== 'all', function($query) use ($type){
            $query->where('type', $type);
        })
        ->orderBy('id', 'desc')
        ->get();
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
        $request->image->storeAs('products', $filename, 'public');

        $data = $request->all();
        $data['image'] = $filename;

        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Item created successfully.');
    }

    public function edit($id){
        $item = Product::findOrFail($id);
        return view('pages.product.editproduct', compact('item'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->all();

        if ($request->hasFile('image')){
            // ambil/upload file baru
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // simpan file ke storage/app/public/products
            $file->move(public_path('storage/products'), $filename, 'public');


            // hapus file lama jika ada
            if ($product->image){
                $oldImage = public_path('storage/products/' . $product->image);
                if (file_exists($oldImage)){
                    unlink($oldImage); //hapus file lama
                }
            }

            // tambah nama file
            $data['image'] = $filename;

        }


        $product->update($data);
        return redirect()->route('product.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(Product $product){
        // $item = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Item deleted successfully.');
    }
}
