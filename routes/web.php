<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/product',function (){
    return view('product');
});
Route::get('/commande',function (){
    return view('commande');
});
Route::get('/product_detail?id={id}',function (){
    return view('product_detail');
});
