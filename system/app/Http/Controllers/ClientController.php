<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ClientController extends Controller
{
    function showShop()
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.shop', $data);
    }

    function showCart()
    {
        return view('frontview.cart');
    }

    function showShopproduk(Produk $produk)
    {
        $data['list_produk'] = Produk::all();
        return view('frontview.shop-produk', $data);
    }
}