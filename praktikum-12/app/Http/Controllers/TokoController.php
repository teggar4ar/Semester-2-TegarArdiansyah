<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }

    public function aboutus()
    {
        return view('toko/aboutus');
    }

    public function admin()
    {
        $products = Product::all();
        return view('toko/admin', compact('products'));
    }

    public function customer()
    {
        $customers = Customer::all();
        return view('toko/customer', compact('customers'));
    }

    public function create()
    {
        return view('toko/create');
    }

    public function store(Request $Request)
    {
        $Request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        Product::create($Request->all());
        return redirect()-> route('produk.admin')->with('succes', 'Produk created successfuly');
    }

    public function edit (Product $product)
    {
        return view('toko/edit', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()-> route('produk.admin')->with('success', 'Produk Deleted Successfuly');
    }

    public function update (Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $product->update($request->all());

        return redirect()-> route('produk.admin')->with('success', 'Produk Updated Successfuly');
    }
}
