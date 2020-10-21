<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/prodotti', function () {
    $data = config('pasta');

    $paste = [];

    foreach ($data as $key => $prodotto) {
        $prodotto["id"] = $key;
        $paste[$prodotto["tipo"]][] = $prodotto;
    }

    return view('prodotti', ["paste" => $paste]);
})->name('products');

Route::get('/prodotti/show/{id}', function ($id) {

    if(config("pasta.$id") == null){
        abort(404);
    }

    $prodotto = config("pasta.$id");

    return view('card-prodotto', ["data" => $prodotto]);
})->where('id', '[0-9]+');

Route::get('/news', function () {
    return view('news');
})->name('news');