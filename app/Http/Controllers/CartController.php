<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Darryldecode\Cart\Cart;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Session\SessionManager;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $session = app(SessionManager::class);
        $events = app(Dispatcher::class);
        $instanceName = 'default'; // Vous pouvez donner le nom de votre choix ici
        $session_key = 'cart'; // Vous pouvez utiliser une autre clé de session si nécessaire
        $config = [
            'format_numbers' => env('SHOPPING_FORMAT_VALUES', false),

            'decimals' => env('SHOPPING_DECIMALS', 0),

            'dec_point' => env('SHOPPING_DEC_POINT', '.'),

            'thousands_sep' => env('SHOPPING_THOUSANDS_SEP', ','),
            'storage' => null,
            'events' => null,
            ];
        $cart = new Cart($session,$events,$instanceName,$session_key,$config);
        $content  = $cart->getContent();
        $total = $cart->getTotal();
        return view('cart.index', compact('content', 'total'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Products::findOrFail($request->id);
        $session = app(SessionManager::class);
        $events = app(Dispatcher::class);
        $instanceName = 'default'; // Vous pouvez donner le nom de votre choix ici
        $session_key = 'cart'; // Vous pouvez utiliser une autre clé de session si nécessaire
        $config = [
            'format_numbers' => env('SHOPPING_FORMAT_VALUES', false),

            'decimals' => env('SHOPPING_DECIMALS', 0),

            'dec_point' => env('SHOPPING_DEC_POINT', '.'),

            'thousands_sep' => env('SHOPPING_THOUSANDS_SEP', ','),
            'storage' => null,
            'events' => null,
        ];
        $cart = new Cart($session,$events,$instanceName,$session_key,$config);


        $cart->add([
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $request->quantity,
                'attributes' => [],
                'associatedModel' => $product,
            ]
        );
        return redirect()->back()->with('cart', 'ok');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $session = app(SessionManager::class);
        $events = app(Dispatcher::class);
        $instanceName = 'default'; // Vous pouvez donner le nom de votre choix ici
        $session_key = 'cart'; // Vous pouvez utiliser une autre clé de session si nécessaire
        $config = [
            'format_numbers' => env('SHOPPING_FORMAT_VALUES', false),

            'decimals' => env('SHOPPING_DECIMALS', 0),

            'dec_point' => env('SHOPPING_DEC_POINT', '.'),

            'thousands_sep' => env('SHOPPING_THOUSANDS_SEP', ','),
            'storage' => null,
            'events' => null,
        ];
        $cart = new Cart($session,$events,$instanceName,$session_key,$config);

        $cart->update($id, [
            'quantity' => ['relative' => false, 'value' => $request->quantity],
        ]);
        return redirect(route('card.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $session = app(SessionManager::class);
        $events = app(Dispatcher::class);
        $instanceName = 'default'; // Vous pouvez donner le nom de votre choix ici
        $session_key = 'cart'; // Vous pouvez utiliser une autre clé de session si nécessaire
        $config = [
            'format_numbers' => env('SHOPPING_FORMAT_VALUES', false),

            'decimals' => env('SHOPPING_DECIMALS', 0),

            'dec_point' => env('SHOPPING_DEC_POINT', '.'),

            'thousands_sep' => env('SHOPPING_THOUSANDS_SEP', ','),
            'storage' => null,
            'events' => null,
        ];
        $cart = new Cart($session,$events,$instanceName,$session_key,$config);

        $cart->remove($id);
        return redirect(route('card.index'));

    }
}
