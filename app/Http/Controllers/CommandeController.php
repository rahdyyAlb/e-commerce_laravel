<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandeController extends Controller
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
