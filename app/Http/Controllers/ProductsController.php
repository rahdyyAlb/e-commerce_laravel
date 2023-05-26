<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::latest()->paginate(8);

        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 8);
    }
    public function admin()
    {

        $products =  Products::all();
        return view('products.admin', ['products' => $products]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,)
    {
        $products = new Products();
        $products ->testAddProduct(  $request);
        return redirect()->route('products.index')
            ->with('success','Produits créés avec succès.');
    }

    public function show( $id)
    {
        $product = Products::find($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Products::find($id);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Products  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Project = new Products();
        $Project->testUpdateProduct($request,$id);
        return redirect()->route('products.index')
            ->with('success','Produits mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Products  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success','Produits supprimés avec succès');
    }

}
