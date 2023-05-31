<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Produk;

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
        $products = Produk::all();
        return view('toko/admin', compact('products'));
    }

    public function customer()
    {
        $customers = Customer::all();
        return view('toko/customer', compact('customers'));
    }
}
