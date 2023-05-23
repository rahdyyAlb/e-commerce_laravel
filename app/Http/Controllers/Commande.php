<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Commande extends Controller
{
    public function index()
    {
        return view('commande');
    }

    public function detail($id)
    {
        return view('commande_detail');
    }

}
