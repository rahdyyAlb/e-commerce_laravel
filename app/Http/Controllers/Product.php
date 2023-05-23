<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function detail($id)
    {
        return view('product_detail');
    }

}
