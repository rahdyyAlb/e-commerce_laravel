<?php

namespace App\Providers;

use App\Models\Products;
use Illuminate\Events\Dispatcher;
use Illuminate\Session\SessionManager;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Darryldecode\Cart\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
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

        //
        Schema::defaultStringLength(191);
        $cart = new Cart($session,$events,$instanceName,$session_key,$config);
        View::composer(['base', 'products.show'], function ($view) use ($cart) {
            $view->with([
                'cartCount' =>$cart-> getTotalQuantity(),
                'cartTotal' => $cart->getTotal(),
            ]);
        });

    }
}
