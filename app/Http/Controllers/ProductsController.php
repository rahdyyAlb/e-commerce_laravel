<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function all(): View
    {

        return view('products', [
            'products' => Products::all()
        ]);
    }

    public function detail($id)
    {
        return view('product_detail');
    }

}
