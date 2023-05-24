<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

Route::get('/helloWord',function (){
    return view('helloWord');
});
Route::get('/commande_detail/{$id}',[ProductsController::class,'detail']);
Route::get('/commande',[ProductsController::class,'index']);

Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}/update', [ProductsController::class, 'update'])->name('products.update');

Route::post('/products',[ProductsController::class,'store'])->name('products.store');;
Route::get('/', [ProductsController::class, 'index'])->name('products.index');
