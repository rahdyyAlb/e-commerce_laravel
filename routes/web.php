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

Route::get('/product_detail/{$id}',[ProductsController::class,'detail']);
Route::get('/',[ProductsController::class,'all']);
