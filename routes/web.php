<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CommandeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/commande_detail/{$id}',[CommandeController::class,'detail']);
Route::get('/commande',[CommandeController::class,'index']);

Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}/update', [ProductsController::class, 'update'])->name('products.update');
Route::post('/products',[ProductsController::class,'store'])->name('products.store');;
Route::get('/', [ProductsController::class, 'index'])->name('products.index');



Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/moncompte', [UserController::class, 'show'])->name('moncompte')->middleware('auth');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');  // Redirige l'utilisateur vers la page d'accueil après la déconnexion
})->name('logout');
Route::get('/rgpd',function (){
    return view('rgpd');
})->name('rgpd');
