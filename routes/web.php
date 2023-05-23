<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Product;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/helloWord',function (){
    return view('helloWord');
});
Route::get('/commande_detail/{$id}',[Product::class,'detail']);
Route::get('/commande',[Product::class,'index']);

Route::get('/product_detail/{$id}',[Product::class,'detail']);
Route::get('/product',[Product::class,'index']);
